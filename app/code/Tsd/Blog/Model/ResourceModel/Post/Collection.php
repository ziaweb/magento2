<?php
namespace Tsd\Blog\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Tsd\Blog\Model\Post', 'Tsd\Blog\Model\ResourceModel\Post');
    }
}