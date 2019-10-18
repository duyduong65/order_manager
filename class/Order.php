<?php

class Order
{
    protected $orderNumber;
    protected $orderDate;
    protected $status;

    public function __construct($orderNumber,$orderDate,$status)
    {
        $this->orderNumber = $orderNumber;
        $this->orderDate = $orderDate;
        $this->status = $status;
    }

    public function getOrderDate()
    {
        return $this->orderDate;
    }

    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
    }

    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}