<?php


class customerInformation
{
    public $customerName;
    public $firstName;
    public $lastName;
    public $phone;
    public $status;
    public $orderNumber;

    public function __construct($customerName, $firstName, $lastName, $phone, $status, $orderNumber)
    {
        $this->customerName = $customerName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->status = $status;
        $this->orderNumber = $orderNumber;
    }
}