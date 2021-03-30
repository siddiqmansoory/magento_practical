<?php
namespace Deval\Recurring\Observer;

use Magento\Framework\Event\ObserverInterface;
use Zend\Log\Writer\Stream;
use Zend\Log\Logger;
use Magento\Customer\Model\Session as CustomerSession;
 
class SetItemOrderFrequency implements ObserverInterface
{
    protected $timezone;
    protected $customerSession;
    protected $messageManager;

    public function __construct(
        \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone,
        CustomerSession $customerSession,
        \Magento\Framework\Message\ManagerInterface $messageManager
    ) {
        $this->timezone = $timezone;
        $this->messageManager = $messageManager;
        $this->customerSession = $customerSession;
    }
    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
    	
        $item = $observer->getEvent()->getData('quote_item');
        $item = ($item->getParentItem() ? $item->getParentItem() : $item);
        $writer = new Stream(BP . '/var/log/fileName.log');
        $logger = new Logger();
        
        $options = $item->getProduct()->getTypeInstance(true)->getOrderOptions($item->getProduct());
        if(isset($options['options'])){
        	$customOptions = $options['options'];
	        if (!empty($customOptions)) {
	            $currentDate = $this->timezone->formatDate(null, 1);
	            foreach ($customOptions as $option) {
	                $optionTitle = $option['label'];
	                if ($optionTitle == "Subscription") {
	                	if (!$this->customerSession->isLoggedIn())
				    	{
							$message = "Please login to order this product.";
				       		$this->messageManager->addError($message);
				        	return $this->resultRedirectFactory->create()->setRedirect('*/*/')->sendResponse();
				    	}
	                    $optionValue = $option['value'];
	                    if ($optionValue == "Daily") {
	                        $nextDate = date('Y-m-d', strtotime($currentDate . ' +1 day'));
	                        $item->setNextOrderDate($nextDate);
	                        $item->setOrderFrequency(1);
	                        $logger->addWriter($writer);
	                        $logger->info($optionTitle."-".$optionValue."-".$nextDate."-"."1");
	                    } elseif ($optionValue == "Weekly") {
	                        $nextDate = date('Y-m-d', strtotime($currentDate . ' +7 day'));
	                        $item->setNextOrderDate($nextDate);
	                        $item->setOrderFrequency(7);
	                        $logger->addWriter($writer);
	                        $logger->info($optionTitle."-".$optionValue."-".$nextDate."-"."7");
	                    } elseif ($optionValue == "Monthly") {
	                        $nextDate = date('Y-m-d', strtotime($currentDate . ' +1 month'));
	                        $item->setNextOrderDate($nextDate);
	                        $item->setOrderFrequency(30);
	                        $logger->addWriter($writer);
	                        $logger->info($optionTitle."-".$optionValue."-".$nextDate."-"."30");
	                    }
	                }
	            }
	        }
        }
    }
}
