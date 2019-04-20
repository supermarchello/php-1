<?php
/**
 * Copyright (c) 2019. Wizard-c
 */

interface ProductInterface
{
    function setName($name);
    
    function getName();
    
    function setPrice($price);
    
    function getPrice();
    
    function setArticul($articul);
    
    function getArticul();
    
    function setDiscount($discount);
    
    function getDiscountPrice();
}

class Product implements ProductInterface
{
    protected $name;
    
    protected $discount;
    
    protected $price;
    
    protected $articul;
    
    
    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }
    
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @return mixed
     */
    public function getArticul()
    {
        return $this->articul;
    }
    
    /**
     * @param mixed $articul
     */
    public function setArticul($articul)
    {
        $this->articul = $articul;
    }
    
    public function getDiscountPrice()
    {
        return $this->getPrice() * $this->getDiscount() / 100;
    }
    
    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }
    
    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    
}

class Offer extends Product
{
    protected $color;
    
    public function __construct($name, $price, $color)
    {
        parent::__construct($name, $price);
        $this->setColor($color);
    }
    
    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
    
    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}

$product = new Product('Куртка', 100.50);
$offer   = new Offer('Куртка', 150.50, 'Синий');
