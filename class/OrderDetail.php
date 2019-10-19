<?php


class OrderDetail
{
    public $customerName;
    public $firstName;
    public $lastName;
    public $phone;
    public $status;

    public function __construct($customerName, $firstName, $lastName, $phone,$status)
    {
        $this->customerName = $customerName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->status = $status;
    }
}