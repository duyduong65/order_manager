<?php


class Product
{
    protected $productName;
    protected $productLine;
    protected $quantityOrdered;
    protected $priceEach;
    protected $orderNumber;

    public function __construct($productName, $productLine, $quantityOrdered, $priceEach,$orderNumber)
    {
        $this->productName = $productName;
        $this->productLine = $productLine;
        $this->quantityOrdered = $quantityOrdered;
        $this->priceEach = $priceEach;
        $this->orderNumber=$orderNumber;
    }

    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    public function getPriceEach()
    {
        return $this->priceEach;
    }

    public function getProductLine()
    {
        return $this->productLine;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getQuantityOrdered()
    {
        return $this->quantityOrdered;
    }

    public function setPriceEach($priceEach)
    {
        $this->priceEach = $priceEach;
    }

    public function setProductLine($productLine)
    {
        $this->productLine = $productLine;
    }

    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    public function setQuantityOrdered($quantityOrdered)
    {
        $this->quantityOrdered = $quantityOrdered;
    }

}