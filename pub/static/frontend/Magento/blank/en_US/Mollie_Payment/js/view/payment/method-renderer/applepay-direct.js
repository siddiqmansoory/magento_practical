define(
    [
        'jquery',
        'Mollie_Payment/js/view/payment/method-renderer/default',
        'Magento_Checkout/js/model/totals',
        'mage/url'
    ],
    function (
        $,
        Component,
        totals,
        url
    ) {
        'use strict';

        var checkoutConfig = window.checkoutConfig.payment;

        return Component.extend({
            session: null,
            redirectAfterPlaceOrder: false,
            totalsLoading: totals.isLoading,
            defaults: {
                template: 'Mollie_Payment/payment/applepay-direct'
            },

            initObservable: function () {
                this._super().observe([
                    'applePayPaymentToken'
                ]);

                return this;
            },

            getMethodImage: function () {
                return checkoutConfig.image[this.item.method];
            },

            getData: function () {
                return {
                    'method': this.item.method,
                    'additional_data': {
                        "applepay_payment_token": this.applePayPaymentToken()
                    }
                };
            },

            placeApplePayOrder(event) {
                var amount = totals.getSegment('grand_total').value;

                var request = {
                    countryCode: 'NL',
                    currencyCode: 'EUR',
                    supportedNetworks: ['amex', 'maestro', 'masterCard', 'visa', 'vPay'],
                    merchantCapabilities: ['supports3DS'],
                    total: {
                        label: checkoutConfig.mollie.store.name,
                        amount: amount
                    },
                }

                if (!this.session) {
                    this.session = new ApplePaySession(3, request);
                }

                this.session.onpaymentmethodselected = function () {
                    var finalTotal = {
                        label: 'Total',
                        type: 'final',
                        amount: amount
                    };

                    this.session.completePaymentMethodSelection(finalTotal, []);
                }.bind(this);

                this.session.onpaymentauthorized = function (event) {
                    try {
                        this.applePayPaymentToken(JSON.stringify(event.payment.token));
                        this.placeOrder(this);
                    } catch {
                        this.session.completePayment(ApplePaySession.STATUS_ERROR);
                    }
                }.bind(this);

                this.session.onvalidatemerchant = function (event) {
                    $.ajax({
                        type: 'POST',
                        url: url.build('mollie/checkout/applePayValidation'),
                        data: {
                            validationURL: event.validationURL
                        },
                        success: function (result) {
                            this.session.completeMerchantValidation(result);
                        }.bind(this)
                    })
                }.bind(this);

                this.session.oncancel = function () {
                    this.session = null;
                }.bind(this);

                this.session.begin();
            },

            afterPlaceOrder: function () {
                this.session.completePayment(ApplePaySession.STATUS_SUCCESS);

                var paymentToken = this.paymentToken();
                setTimeout( function () {
                    window.location = url.build('mollie/checkout/redirect/paymentToken/' + paymentToken);
                }, 1000);
            }
        });
    }
);
