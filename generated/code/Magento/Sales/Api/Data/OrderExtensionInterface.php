<?php
namespace Magento\Sales\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderInterface
 */
interface OrderExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Sales\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments();

    /**
     * @param \Magento\Sales\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments);

    /**
     * @return \Magento\Payment\Api\Data\PaymentAdditionalInfoInterface[]|null
     */
    public function getPaymentAdditionalInfo();

    /**
     * @param \Magento\Payment\Api\Data\PaymentAdditionalInfoInterface[] $paymentAdditionalInfo
     * @return $this
     */
    public function setPaymentAdditionalInfo($paymentAdditionalInfo);

    /**
     * @return \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface[]|null
     */
    public function getAppliedTaxes();

    /**
     * @param \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface[] $appliedTaxes
     * @return $this
     */
    public function setAppliedTaxes($appliedTaxes);

    /**
     * @return \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface[]|null
     */
    public function getItemAppliedTaxes();

    /**
     * @param \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface[] $itemAppliedTaxes
     * @return $this
     */
    public function setItemAppliedTaxes($itemAppliedTaxes);

    /**
     * @return boolean|null
     */
    public function getConvertingFromQuote();

    /**
     * @param boolean $convertingFromQuote
     * @return $this
     */
    public function setConvertingFromQuote($convertingFromQuote);

    /**
     * @return \Magento\GiftMessage\Api\Data\MessageInterface|null
     */
    public function getGiftMessage();

    /**
     * @param \Magento\GiftMessage\Api\Data\MessageInterface $giftMessage
     * @return $this
     */
    public function setGiftMessage(\Magento\GiftMessage\Api\Data\MessageInterface $giftMessage);

    /**
     * @return \Amazon\Payment\Api\Data\OrderLinkInterface|null
     */
    public function getAmazonOrderReferenceId();

    /**
     * @param \Amazon\Payment\Api\Data\OrderLinkInterface $amazonOrderReferenceId
     * @return $this
     */
    public function setAmazonOrderReferenceId(\Amazon\Payment\Api\Data\OrderLinkInterface $amazonOrderReferenceId);

    /**
     * @return float|null
     */
    public function getMolliePaymentFee();

    /**
     * @param float $molliePaymentFee
     * @return $this
     */
    public function setMolliePaymentFee($molliePaymentFee);

    /**
     * @return float|null
     */
    public function getBaseMolliePaymentFee();

    /**
     * @param float $baseMolliePaymentFee
     * @return $this
     */
    public function setBaseMolliePaymentFee($baseMolliePaymentFee);

    /**
     * @return float|null
     */
    public function getMolliePaymentFeeTax();

    /**
     * @param float $molliePaymentFeeTax
     * @return $this
     */
    public function setMolliePaymentFeeTax($molliePaymentFeeTax);

    /**
     * @return float|null
     */
    public function getBaseMolliePaymentFeeTax();

    /**
     * @param float $baseMolliePaymentFeeTax
     * @return $this
     */
    public function setBaseMolliePaymentFeeTax($baseMolliePaymentFeeTax);
}
