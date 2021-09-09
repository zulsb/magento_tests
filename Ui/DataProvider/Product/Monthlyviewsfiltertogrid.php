<?php
 
namespace Omnipro\UiComponent\Ui\DataProvider\Product; 
use Magento\Framework\Data\Collection; 
use Magento\Ui\DataProvider\AddFilterToCollectionInterface;
 
class Monthlyviewsfiltertogrid implements AddFilterToCollectionInterface
 
{ 
    public function addFilter(Collection $collection, $field, $condition = null) 
    { 
        if (isset($condition['gteq'])) { 
            $collection->addFieldToFilter([['attribute' => 'monthly_views', 'gteq' => $condition['gteq']]]);
        }
        if (isset($condition['lteq'])) { 
            $collection->addFieldToFilter([['attribute' => 'monthly_views', 'lteq' => $condition['lteq']]]);
        } 
    } 
}