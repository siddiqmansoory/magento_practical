<?php
namespace Magento\SalesRule\Model\Rule\Condition\Product;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\Rule\Condition\Product
 */
class Interceptor extends \Magento\SalesRule\Model\Rule\Condition\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Rule\Model\Condition\Context $context, \Magento\Backend\Helper\Data $backendData, \Magento\Eav\Model\Config $config, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Model\ResourceModel\Product $productResource, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Set\Collection $attrSetCollection, \Magento\Framework\Locale\FormatInterface $localeFormat, array $data = [], ?\Magento\Catalog\Model\ProductCategoryList $categoryList = null)
    {
        $this->___init();
        parent::__construct($context, $backendData, $config, $productFactory, $productRepository, $productResource, $attrSetCollection, $localeFormat, $data, $categoryList);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        if (!$pluginInfo) {
            return parent::getAttribute();
        } else {
            return $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeName');
        if (!$pluginInfo) {
            return parent::getAttributeName();
        } else {
            return $this->___callPlugins('getAttributeName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadAttributeOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadAttributeOptions');
        if (!$pluginInfo) {
            return parent::loadAttributeOptions();
        } else {
            return $this->___callPlugins('loadAttributeOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeElementHtml');
        if (!$pluginInfo) {
            return parent::getAttributeElementHtml();
        } else {
            return $this->___callPlugins('getAttributeElementHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute(string $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttribute');
        if (!$pluginInfo) {
            return parent::setAttribute($value);
        } else {
            return $this->___callPlugins('setAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadArray($arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadArray');
        if (!$pluginInfo) {
            return parent::loadArray($arr);
        } else {
            return $this->___callPlugins('loadArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function asArray(array $arrAttributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asArray');
        if (!$pluginInfo) {
            return parent::asArray($arrAttributes);
        } else {
            return $this->___callPlugins('asArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\Magento\Framework\Model\AbstractModel $model)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($model);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueElementChooserUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueElementChooserUrl');
        if (!$pluginInfo) {
            return parent::getValueElementChooserUrl();
        } else {
            return $this->___callPlugins('getValueElementChooserUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOperatorInputByType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultOperatorInputByType');
        if (!$pluginInfo) {
            return parent::getDefaultOperatorInputByType();
        } else {
            return $this->___callPlugins('getDefaultOperatorInputByType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeObject()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeObject');
        if (!$pluginInfo) {
            return parent::getAttributeObject();
        } else {
            return $this->___callPlugins('getAttributeObject', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueOption($option = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueOption');
        if (!$pluginInfo) {
            return parent::getValueOption($option);
        } else {
            return $this->___callPlugins('getValueOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueSelectOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueSelectOptions');
        if (!$pluginInfo) {
            return parent::getValueSelectOptions();
        } else {
            return $this->___callPlugins('getValueSelectOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueAfterElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueAfterElementHtml');
        if (!$pluginInfo) {
            return parent::getValueAfterElementHtml();
        } else {
            return $this->___callPlugins('getValueAfterElementHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeElement()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeElement');
        if (!$pluginInfo) {
            return parent::getAttributeElement();
        } else {
            return $this->___callPlugins('getAttributeElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function collectValidatedAttributes($productCollection)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collectValidatedAttributes');
        if (!$pluginInfo) {
            return parent::collectValidatedAttributes($productCollection);
        } else {
            return $this->___callPlugins('collectValidatedAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getInputType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInputType');
        if (!$pluginInfo) {
            return parent::getInputType();
        } else {
            return $this->___callPlugins('getInputType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueElementType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueElementType');
        if (!$pluginInfo) {
            return parent::getValueElementType();
        } else {
            return $this->___callPlugins('getValueElementType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExplicitApply()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExplicitApply');
        if (!$pluginInfo) {
            return parent::getExplicitApply();
        } else {
            return $this->___callPlugins('getExplicitApply', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBindArgumentValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBindArgumentValue');
        if (!$pluginInfo) {
            return parent::getBindArgumentValue();
        } else {
            return $this->___callPlugins('getBindArgumentValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMappedSqlField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMappedSqlField');
        if (!$pluginInfo) {
            return parent::getMappedSqlField();
        } else {
            return $this->___callPlugins('getMappedSqlField', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateByEntityId($productId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateByEntityId');
        if (!$pluginInfo) {
            return parent::validateByEntityId($productId);
        } else {
            return $this->___callPlugins('validateByEntityId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOperatorForValidate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperatorForValidate');
        if (!$pluginInfo) {
            return parent::getOperatorForValidate();
        } else {
            return $this->___callPlugins('getOperatorForValidate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOperatorOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultOperatorOptions');
        if (!$pluginInfo) {
            return parent::getDefaultOperatorOptions();
        } else {
            return $this->___callPlugins('getDefaultOperatorOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        if (!$pluginInfo) {
            return parent::getForm();
        } else {
            return $this->___callPlugins('getForm', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTablesToJoin()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTablesToJoin');
        if (!$pluginInfo) {
            return parent::getTablesToJoin();
        } else {
            return $this->___callPlugins('getTablesToJoin', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function asXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asXml');
        if (!$pluginInfo) {
            return parent::asXml();
        } else {
            return $this->___callPlugins('asXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadXml($xml)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadXml');
        if (!$pluginInfo) {
            return parent::loadXml($xml);
        } else {
            return $this->___callPlugins('loadXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeOptions');
        if (!$pluginInfo) {
            return parent::getAttributeOptions();
        } else {
            return $this->___callPlugins('getAttributeOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeSelectOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeSelectOptions');
        if (!$pluginInfo) {
            return parent::getAttributeSelectOptions();
        } else {
            return $this->___callPlugins('getAttributeSelectOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadOperatorOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadOperatorOptions');
        if (!$pluginInfo) {
            return parent::loadOperatorOptions();
        } else {
            return $this->___callPlugins('loadOperatorOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOperatorSelectOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperatorSelectOptions');
        if (!$pluginInfo) {
            return parent::getOperatorSelectOptions();
        } else {
            return $this->___callPlugins('getOperatorSelectOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOperatorName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperatorName');
        if (!$pluginInfo) {
            return parent::getOperatorName();
        } else {
            return $this->___callPlugins('getOperatorName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadValueOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadValueOptions');
        if (!$pluginInfo) {
            return parent::loadValueOptions();
        } else {
            return $this->___callPlugins('loadValueOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueParsed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueParsed');
        if (!$pluginInfo) {
            return parent::getValueParsed();
        } else {
            return $this->___callPlugins('getValueParsed', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isArrayOperatorType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isArrayOperatorType');
        if (!$pluginInfo) {
            return parent::isArrayOperatorType();
        } else {
            return $this->___callPlugins('isArrayOperatorType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValue');
        if (!$pluginInfo) {
            return parent::getValue();
        } else {
            return $this->___callPlugins('getValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueName');
        if (!$pluginInfo) {
            return parent::getValueName();
        } else {
            return $this->___callPlugins('getValueName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNewChildSelectOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNewChildSelectOptions');
        if (!$pluginInfo) {
            return parent::getNewChildSelectOptions();
        } else {
            return $this->___callPlugins('getNewChildSelectOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNewChildName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNewChildName');
        if (!$pluginInfo) {
            return parent::getNewChildName();
        } else {
            return $this->___callPlugins('getNewChildName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function asHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asHtml');
        if (!$pluginInfo) {
            return parent::asHtml();
        } else {
            return $this->___callPlugins('asHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function asHtmlRecursive()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asHtmlRecursive');
        if (!$pluginInfo) {
            return parent::asHtmlRecursive();
        } else {
            return $this->___callPlugins('asHtmlRecursive', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeElement()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypeElement');
        if (!$pluginInfo) {
            return parent::getTypeElement();
        } else {
            return $this->___callPlugins('getTypeElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypeElementHtml');
        if (!$pluginInfo) {
            return parent::getTypeElementHtml();
        } else {
            return $this->___callPlugins('getTypeElementHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOperatorElement()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperatorElement');
        if (!$pluginInfo) {
            return parent::getOperatorElement();
        } else {
            return $this->___callPlugins('getOperatorElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOperatorElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperatorElementHtml');
        if (!$pluginInfo) {
            return parent::getOperatorElementHtml();
        } else {
            return $this->___callPlugins('getOperatorElementHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueElementRenderer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueElementRenderer');
        if (!$pluginInfo) {
            return parent::getValueElementRenderer();
        } else {
            return $this->___callPlugins('getValueElementRenderer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueElement()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueElement');
        if (!$pluginInfo) {
            return parent::getValueElement();
        } else {
            return $this->___callPlugins('getValueElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueElementHtml');
        if (!$pluginInfo) {
            return parent::getValueElementHtml();
        } else {
            return $this->___callPlugins('getValueElementHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAddLinkHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddLinkHtml');
        if (!$pluginInfo) {
            return parent::getAddLinkHtml();
        } else {
            return $this->___callPlugins('getAddLinkHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRemoveLinkHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRemoveLinkHtml');
        if (!$pluginInfo) {
            return parent::getRemoveLinkHtml();
        } else {
            return $this->___callPlugins('getRemoveLinkHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChooserContainerHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChooserContainerHtml');
        if (!$pluginInfo) {
            return parent::getChooserContainerHtml();
        } else {
            return $this->___callPlugins('getChooserContainerHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function asString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asString');
        if (!$pluginInfo) {
            return parent::asString($format);
        } else {
            return $this->___callPlugins('asString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function asStringRecursive($level = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asStringRecursive');
        if (!$pluginInfo) {
            return parent::asStringRecursive($level);
        } else {
            return $this->___callPlugins('asStringRecursive', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateAttribute($validatedValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateAttribute');
        if (!$pluginInfo) {
            return parent::validateAttribute($validatedValue);
        } else {
            return $this->___callPlugins('validateAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        if (!$pluginInfo) {
            return parent::addData($arr);
        } else {
            return $this->___callPlugins('addData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($key, $value);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        if (!$pluginInfo) {
            return parent::unsetData($key);
        } else {
            return $this->___callPlugins('unsetData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $index);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        if (!$pluginInfo) {
            return parent::getDataByPath($path);
        } else {
            return $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        if (!$pluginInfo) {
            return parent::getDataByKey($key);
        } else {
            return $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        if (!$pluginInfo) {
            return parent::setDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        if (!$pluginInfo) {
            return parent::getDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        if (!$pluginInfo) {
            return parent::hasData($key);
        } else {
            return $this->___callPlugins('hasData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($keys);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        if (!$pluginInfo) {
            return parent::convertToArray($keys);
        } else {
            return $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        if (!$pluginInfo) {
            return parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('toXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        if (!$pluginInfo) {
            return parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        if (!$pluginInfo) {
            return parent::toJson($keys);
        } else {
            return $this->___callPlugins('toJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        if (!$pluginInfo) {
            return parent::convertToJson($keys);
        } else {
            return $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        if (!$pluginInfo) {
            return parent::toString($format);
        } else {
            return $this->___callPlugins('toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        if (!$pluginInfo) {
            return parent::isEmpty();
        } else {
            return $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        if (!$pluginInfo) {
            return parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
        } else {
            return $this->___callPlugins('serialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        if (!$pluginInfo) {
            return parent::debug($data, $objects);
        } else {
            return $this->___callPlugins('debug', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        if (!$pluginInfo) {
            return parent::offsetSet($offset, $value);
        } else {
            return $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        if (!$pluginInfo) {
            return parent::offsetExists($offset);
        } else {
            return $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        if (!$pluginInfo) {
            return parent::offsetUnset($offset);
        } else {
            return $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        if (!$pluginInfo) {
            return parent::offsetGet($offset);
        } else {
            return $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo);
        }
    }
}
