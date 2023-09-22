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
  <div>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-form') ?>">
    <ul>
      <li>
        <label>Product Name</label>
        <input type="text" name="ProductName" class="form-control">
      </li>
      <li>
        <label>Product Description</label>
        <input type="text" name="ProductDescription" class="form-control">
      </li>
      <li>
        <label>Product Category</label>
        <select name="ProductCategory">
    <option value=""></option>
    <?php foreach ($categories as $category): ?>
        <option value="<?= $category['ProductCategory'] ?>"><?= $category['ProductCategory'] ?></option>
    <?php endforeach; ?>
</select>
      </li>
      <li>
        <label>Product Quantity</label>
        <input type="number" name="ProductQuantity" class="form-control">
      </li>
      <li>
        <label>Product Price</label>
        <input type="number" name="ProductPrice" class="form-control">
      </li>
      <li>
        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
      </li>
    </ul>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
</body>
</html>