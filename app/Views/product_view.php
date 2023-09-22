<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product</title>
</head>
<body>
<div>
    <div>
        <a href="<?php echo site_url('/products-form') ?>">Add Product</a>
    </div>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
    ?>
    <div class="mt-3">
        <!-- Add a border to the table -->
        <table id="products-list" border="1">
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Category</th>
                <th>Product Quantity</th>
                <th>Product Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if($table_products): ?>
                <?php foreach($table_products as $product): ?>
                    <tr>
                        <td><?php echo $product['ProductName']; ?></td>
                        <td><?php echo $product['ProductDescription']; ?></td>
                        <td><?php echo $product['ProductCategory']; ?></td>
                        <td><?php echo $product['ProductQuantity']; ?></td>
                        <td><?php echo $product['ProductPrice']; ?></td>
                        <td>
                            <a href="<?php echo base_url('edit-view/'.$product['id']);?>" >Edit</a>
                            <a href="<?php echo base_url('delete/'.$product['id']);?>" >Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready( function () {
        $('#products-list').DataTable();
    } );
</script>
</body>
</html>
