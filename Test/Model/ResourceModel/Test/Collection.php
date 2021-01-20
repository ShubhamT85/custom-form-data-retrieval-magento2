<?php
namespace Custom\Test\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Custom\Test\Model\Test',
            'Custom\Test\Model\ResourceModel\Test'
        );
    }
}
