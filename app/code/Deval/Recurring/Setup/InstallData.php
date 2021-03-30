<?php
namespace Deval\Recurring\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Sales\Setup\SalesSetupFactory;
use Magento\Quote\Setup\QuoteSetupFactory;
 
/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
    /**
     * @var QuoteSetupFactory
     */
    private $quoteSetupFactory;
 
    /**
     * @var SalesSetup
     */
    private $salesSetupFactory;
 
    /**
     * InstallData constructor.
     * @param QuoteSetupFactory $quoteSetupFactory
     */
    public function __construct(
        QuoteSetupFactory $quoteSetupFactory,
        SalesSetupFactory $salesSetupFactory
    ) {
        $this->quoteSetupFactory = $quoteSetupFactory;
        $this->salesSetupFactory = $salesSetupFactory;
    }
 
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var QuoteSetup $quoteSetup */
        $quoteSetup = $this->quoteSetupFactory->create(['setup' => $setup]);
 
        /** @var SalesSetup $salesSetup */
        $salesSetup = $this->salesSetupFactory->create(['setup' => $setup]);
 
 
        $attributeOptions = [
            'type'     => Table::TYPE_DATE,
            'visible'  => true,
            'required' => false
        ];

        $attributeOptions2 = [
            'type'     => Table::TYPE_INTEGER,
            'visible'  => true,
            'required' => false
        ];
        
        $quoteSetup->addAttribute('quote_item', 'next_order_date', $attributeOptions);
        $quoteSetup->addAttribute('quote_item', 'order_frequency', $attributeOptions2);

        $salesSetup->addAttribute('order_item', 'next_order_date', $attributeOptions);
        $salesSetup->addAttribute('order_item', 'order_frequency', $attributeOptions2);
    }
}
