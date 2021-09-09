<?php
 
namespace Omnipro\UiComponent\Ui\DataProvider\Product; 
 
use Magento\Framework\Data\Collection; 
use Magento\Ui\DataProvider\AddFieldToCollectionInterface;
 
 
class Monthlyviewsfieldtocollection implements AddFieldToCollectionInterface
 
{ 
    public function addField(Collection $collection, $field, $alias = null) 
    { 
        $collection->joinField( 
            'monthly_views', 
            'report_viewed_product_aggregated_monthly', 
            'views_num', 
            'product_id=entity_id', 
             null, 
            'left' 
        ); 
    } 
}