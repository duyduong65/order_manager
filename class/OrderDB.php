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

    public function customerInformation()
    {
        $orderNumber=$_GET['id'];
        $sql = "SELECT orders.orderNumber, customerName, contactFirstName as firstName,contactLastName as lastName,phone ,status
                FROM customers
                INNER JOIN orders
                ON customers.customerNumber = orders.customerNumber
                WHERE orders.orderNumber = :orderNumber";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":orderNumber", $orderNumber);
        $stmt->execute();
        $result = $stmt->fetch();
        $customer = new customerInformation($result['customerName'], $result['firstName'], $result['lastName'], $result['phone'],$result['status'],$result['orderNumber']);
        return $customer;
    }
    public function orderDetail(){
        $orderNumber=$_GET['id'];
        $sql = "SELECT  p.productName,p.productLine,od.quantityOrdered,od.priceEach FROM customers c
                INNER JOIN orders o
                ON c.customerNumber = o.customerNumber
                INNER JOIN orderdetails od
                ON o.orderNumber = od.orderNumber
                INNER JOIN products p
                ON od.productCode = p.productCode
                WHERE o.orderNumber =:orderNumber ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":orderNumber",$orderNumber);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $products = [];
        foreach ($result as $value){
        $product = new Product($value['productName'],$value['productLine'],$value['quantityOrdered'],$value['priceEach']);
            array_push($products,$product);
        }
        return $products;
    }
    public function updateStatus($status,$orderNumber){
        $sql = "UPDATE orders SET status=:status WHERE orderNumber=:orderNumber";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':status',$status);
        $stmt->bindParam(':orderNumber',$orderNumber);
        $stmt->execute();
    }

}

