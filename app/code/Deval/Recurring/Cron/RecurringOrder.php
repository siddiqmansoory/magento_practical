<?php

namespace Deval\Recurring\Cron;

use \Magento\Sales\Model\Order\ItemFactory;


class RecurringOrder
{
    protected $timezone;
    protected $itemFactory;
    protected $orderFactory;
    protected $helper;

    public function __construct(
        ItemFactory $itemFactory,
        \Magento\Sales\Model\Order $orderFactory,
        \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone,
        \Deval\Recurring\Helper\Data $helperData
    ) {
        $this->itemFactory = $itemFactory;
        $this->orderFactory = $orderFactory;
        $this->timezone = $timezone;
        $this->helper = $helperData;
    }

    public function execute()
    {
    	$date = $this->timezone->date();
		$date = $date->format('Y-m-d');
        $collection = $this->itemFactory->create()->getCollection()->addFieldToFilter("next_order_date",$date);

        foreach($collection as $item){
        	$orderData = $this->orderFactory->load($item->getOrderId());
        	$billingAddress = $orderData->getBillingAddress();
        	$shippingAddress = $orderData->getShippingAddress();

        	$tempOrder = array();
        	$tempOrder['currency_id'] = $orderData->getOrderCurrencyCode();
        	$tempOrder['email'] = $orderData->getCustomerEmail();
        	$tempOrder['shipping_address'] = $shippingAddress->getData();
        	$tempOrder['billing_address'] = $billingAddress->getData();
        	$tempOrder['items'][0]['product_id'] = $item->getProductId();
        	$tempOrder['items'][0]['qty'] = intval($item->getQtyOrdered());
        	$tempOrder['items'][0]['price'] = $item->getPrice();
        

        	$order = $this->helper->createOrder($tempOrder);

        	if(isset($order['error'])){
        		$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/recurringOrderError.log');
		        $logger = new \Zend\Log\Logger();
		        $logger->addWriter($writer);
		        $logger->info("Error in creating subscription order for item ID: ".$item->getItemId().", Message:".$order['msg']);	
        	}
        	else{
        		$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/recurringOrderSuccess.log');
		        $logger = new \Zend\Log\Logger();
		        $logger->addWriter($writer);
		        $logger->info("Created subscription order for item ID: ".$item->getItemId());	
		        $frequence = $item->getOrderFrequency();
		        $orderDate = $item->getNextOrderDate();
		        if($frequence == 1)
		        	$orderDate = date('Y-m-d', strtotime($orderDate . ' +1 day'));
		        if($frequence == 7)
		        	$orderDate = date('Y-m-d', strtotime($orderDate . ' +7 day'));
		        if($frequence == 30)
		        	$orderDate = date('Y-m-d', strtotime($orderDate . ' +1 month'));

		        $item->setNextOrderDate($orderDate)->save();
        	}
        }
        return $this;
    }
}
