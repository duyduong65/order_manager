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
<form action="" method="get" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>STT</td>
            <td>OrderNumber</td>
            <td>OderDate</td>
            <td>Status</td>
        </tr>
            <?php
             foreach ($orders as $key => $order): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><a href="index.php?page=orderDetail"><?php echo $order->getOrderNumber() ?></a></td>
                <td><?php echo $order->getOrderDate() ?></td>
                <td><?php echo $order->getStatus()?></td>
            </tr>
            <?php endforeach; ?>

    </table>
</form>
</body>
</html>