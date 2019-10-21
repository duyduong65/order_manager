<?php

include_once "../class/Product.php";
include_once "../class/customerInformation.php";
include_once "../class/Order.php";
include_once "../class/DBConnect.php";
include_once "../class/OrderDB.php";
include_once "../class/OrderManager.php";

$manager = new OrderManager();
$status=$_GET['status'];
$orderNumber=$_GET['id'];
$manager->updateStatus($status,$orderNumber);

header("Location:../index.php");
