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

    public function orderDetail($orderNumber)
    {
        $sql = "SELECT customerName, contactFirstName as firstName,contactLastName as lastName,phone 
                FROM customers
                INNER JOIN orders
                ON customers.customerNumber = orders.customerNumber
                WHERE orders.orderNumber = :orderNumber";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":orderNumber", $orderNumber);
        $stmt->execute();
        $result = $stmt->fetch();
        $order = new OrderDetail($result['customerName'], $result['firstName'], $result['lastName'], $result['phone']);
        return $order;
    }


}

