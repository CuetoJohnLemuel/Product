<!DOCTYPE html>
<html>
<head>
  <title>Product</title>
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form method="post" id="update_product" name="update_product" action="<?= site_url('/update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $table_products['id']; ?>">
      <ul>
        <li>
          <label for="ProductName">Product Name</label>
          <input type="text" id="ProductName" name="ProductName" value="<?php echo $table_products['ProductName']; ?>">
        </li>
        <li>
          <label for="ProductDescription">Product Description</label>
          <input type="text" id="ProductDescription" name="ProductDescription" value="<?php echo $table_products['ProductDescription']; ?>">
        </li>
        <li>
          <label for="ProductCategory">Product Category</label>
          <select name="ProductCategory">
    <option value=""></option>
    <?php foreach ($categories as $category): ?>
        <option value="<?= $category['ProductCategory'] ?>"><?= $category['ProductCategory'] ?></option>
    <?php endforeach; ?>
</select>
        </li>
        <li>
          <label for="ProductQuantity">Product Quantity</label>
          <input type="number" id="ProductQuantity" name="ProductQuantity" value="<?php echo $table_products['ProductQuantity']; ?>">
        </li>
        <li>
          <label for="ProductPrice">Product Price</label>
          <input type="number" id="ProductPrice" name="ProductPrice" value="<?php echo $table_products['ProductPrice']; ?>">
        </li>
        <li>
          <button type="submit">Save Data</button>
        </li>
      </ul>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_product").length > 0) {
      $("#update_product").validate({
        rules: {
          ProductName: {
            required: true,
          },
          ProductDescription: {
            required: true,
          },
          ProductCategory: {
            required: true,
          },
          ProductQuantity: {
            required: true,
            digits: true,
          },
          ProductPrice: {
            required: true,
            number: true,
          },
        },
        messages: {
          ProductName: {
            required: "Product Name is required.",
          },
          ProductDescription: {
            required: "Product Description is required.",
          },
          ProductCategory: {
            required: "Product Category is required.",
          },
          ProductQuantity: {
            required: "Product Quantity is required.",
            digits: "Please enter a valid quantity (whole number).",
          },
          ProductPrice: {
            required: "Product Price is required.",
            number: "Please enter a valid price (numeric value).",
          },
        },
      })
    }
  </script>
</body>
</html>
