<?php

class OrderManager
{
    public $orderDB;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=classicmodels";
        $user = "root";
        $password = "khongbiet1";

        $db = new DBConnect($dsn, $user, $password);
        $this->orderDB = new orderDB($db->connect());
    }

    public function getAll()
    {
        $orders = $this->orderDB->getAll();
        include "view/orders/list.php";

    }
    public function showOrderDetail(){

        include "view/orders/orderDetail.php";
    }


}