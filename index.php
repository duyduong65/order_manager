<?php
include_once "class/Product.php";
include_once "class/customerInformation.php";
include_once "class/Order.php";
include_once "class/DBConnect.php";
include_once "class/OrderDB.php";
include_once "class/OrderManager.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$manager = new OrderManager();
$page = (isset($_GET['page'])) ? $_GET['page'] : NULL;

switch ($page) {
    case "orderDetail":
        $manager->showOrderDetail();
        break;
    case "add":
        break;
    default:
        $manager->getAll();
}
?>
</body>
</html>

