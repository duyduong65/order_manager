<?php


class OrderDetail
{
    public $customerName;
    public $firstName;
    public $lastName;
    public $phone;

    public function __construct($customerName, $firstName, $lastName, $phone)
    {
        $this->customerName = $customerName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
    }
}