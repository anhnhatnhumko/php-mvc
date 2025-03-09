<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($product['name']) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($product['name']) ?></h1>
    <img src="<?= $product['img_url'] ?>" alt="<?= $product['name'] ?>" width="200">
    <p>Color: <?= $product['color'] ?></p>
    <p>Release Date: <?= $product['release_at'] ?></p>
    <p>Brand: <?= $product['brand'] ?></p>
    <p>Per Sale: <?= $product['per_sale'] ?></p>
    <p>Price: $<?= number_format($product['price'], 2) ?></p>
    <a href="index.php?action=edit&id=<?= $product['id'] ?>">Edit</a>
    <a href="index.php?action=delete&id=<?= $product['id'] ?>">Delete</a>
    <a href="index.php">Back to Products</a>
</body>
</html>