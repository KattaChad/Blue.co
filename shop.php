<?php
include 'db.php';
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shop - Blue.co</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="stylesheet" href="assets/styles/shop.css" />
</head>
<body>
  <div class="header">
    <i class="fas fa-bars"></i>
    <h1>Blue.co</h1>
    <div class="icons">
      <a href="login.html"><i class="fas fa-user"></i></a>
      <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
    </div>
  </div>

  <h2 class="product-heading">Product Collections</h2>

  <div class="product-grid">
    <?php while ($row = $result->fetch_assoc()) { ?>
      <a href="product.php?id=<?php echo $row['id']; ?>" class="product-card">
        <img src="assets/images/<?php echo $row['id']; ?>.png" alt="<?php echo $row['name']; ?>" />
        <div class="product-info">
          <p><?php echo $row['name']; ?></p>
          <p>$ <?php echo $row['price']; ?></p>
        </div>
      </a>
    <?php } ?>
  </div>
</body>
</html>
