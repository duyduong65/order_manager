<h1>Thông tin khách hàng</h1>
<table border="1">
    <tr>
        <td>Customer Name</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Phone</td>
    </tr>
    <tr>
        <td><?php echo $customer->customerName ?></td>
        <td><?php echo $customer->firstName ?></td>
        <td><?php echo $customer->lastName ?></td>
        <td><?php echo $customer->phone ?></td>
    </tr>
</table>
<h1>Trạng thái:</h1>
<table>
    <form action="CRUD/updateStatus.php" method="get">
        <tr>
            <td>
                <select name="status">
                    <option value="" selected>Select Status</option>
                    <option value="Shipped" <?php if ($customer->status == CONST_orders::SHIPPED) echo 'selected'; ?> >
                        Shipped
                    </option>
                    <option value="Cancelled" <?php if ($customer->status == CONST_orders::CANCELLED) echo 'selected'; ?> >
                        Cancelled
                    </option>
                    <option value="On Hold" <?php if ($customer->status == CONST_orders::ONHOLD) echo 'selected'; ?> >
                        On Hold
                    </option>
                    <option value="Resolved" <?php if ($customer->status == CONST_orders::RESOLVED) echo 'selected'; ?> >
                        Resolved
                    </option>
                    <option value="Disputed" <?php if ($customer->status == CONST_orders::DISPUTED) echo 'selected'; ?> >
                        Disputed
                    </option>
                    <option value="In Process" <?php if ($customer->status == CONST_orders::INPROCESS) echo 'selected'; ?> >
                        In Process
                    </option>
                </select>
            </td>
            <td>
                <input type="submit" value="Update">
            </td>
            <td style="display: none"><input type="text" name="id" value="<?php echo $customer->orderNumber ?>"></td>
        </tr>

    </form>
</table>
<table border="1">
    <tr>
        <td>STT</td>
        <td>Sản phẩm</td>
        <td>Danh mục</td>
        <td>Số lượng</td>
        <td>Giá tiền</td>
    </tr>
    <?php foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $product->getProductName() ?></td>
            <td><?php echo $product->getProductLine() ?></td>
            <td><?php echo $product->getQuantityOrdered() ?></td>
            <td><?php echo $product->getPriceEach() ?></td>
        </tr>
    <?php endforeach; ?>
</table>

