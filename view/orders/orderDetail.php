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
    <form action="">
        <select name="status">
            <option value="Shipped" <?php if ($customer->status == 'Shipped') echo 'selected'; ?> >Shipped</option>
            <option value="Cancelled" <?php if ($customer->status == 'Cancelled') echo 'selected'; ?> >Cancelled
            </option>
            <option value="On Hold" <?php if ($customer->status == 'On Hold') echo 'selected'; ?> >On Hold</option>
            <option value="Resolved" <?php if ($customer->status == 'Resolved') echo 'selected'; ?> >Resolved</option>
            <option value="Disputed" <?php if ($customer->status == 'Disputed') echo 'selected'; ?> >Disputed</option>
            <option value="In Process" <?php if ($customer->status == 'In Process') echo 'selected'; ?> >In Process
            </option>
        </select>
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
            <td><?php echo $product->getProductName()?></td>
            <td><?php echo $product->getProductLine()?></td>
            <td><?php echo $product-> getQuantityOrdered() ?></td>
            <td><?php echo $product->getPriceEach()  ?></td>
        </tr>
    <?php endforeach; ?>
</table>

