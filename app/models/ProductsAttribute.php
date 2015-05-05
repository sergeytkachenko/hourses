<?php

class ProductsAttribute extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $product_id;

    /**
     *
     * @var integer
     */
    public $attribute_id;

    /**
     *
     * @var string
     */
    public $attribute_value;
    public function initialize()
    {
        $this->belongsTo('attribute_id', 'Attributes', 'id', array('alias' => 'Attributes'));
        $this->belongsTo('product_id', 'Products', 'id', array('alias' => 'Products'));
    }

}
