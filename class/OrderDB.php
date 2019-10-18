<?php

class orderDB
{
    public $conn;

    public function __construct($connect)
    {
        $this->conn = $connect;
    }

    public function getAll()
    {

        $sql = "SELECT orderNumber, orderDate,status FROM orders";
        $stmt = $this->conn->query($sql);
        $stmt = $stmt->fetchAll();
        $orders = [];
        foreach ($stmt as $value) {
            $order = new Order($value['orderNumber'], $value['orderDate'], $value['status']);
            array_push($orders, $order);
        }
        return $orders;
    }
    public function showOrderDetail(){
        return "abc";
    }


}

