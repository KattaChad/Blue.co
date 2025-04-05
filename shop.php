<?php
include 'db.php';
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blue.co - Shop</title>
    <style>
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 40px;
        }
        .product {
            width: 200px;
            text-align: center;
            background: #f2f2f2;
            padding: 10px;
            text-decoration: none;
            color: black;
        }
        .product img {
            width: 100%;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Product Collections</h1>
    <div class="product-grid">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <a class="product" href="product.php?id=<?php echo $row['id']; ?>">
                <img src="images/<?php echo $row['id']; ?>.png" alt="<?php echo $row['name']; ?>">
                <div>
                    <strong><?php echo $row['name']; ?></strong><br>
                    $<?php echo $row['price']; ?>
                </div>
            </a>
        <?php } ?>
    </div>
</body>
</html>
