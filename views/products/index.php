<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <a href="index.php?action=show&id=<?= $product['id'] ?>">
                    <?= htmlspecialchars($product['name']) ?> - $<?= number_format($product['price'], 2) ?>
                    - <?= $product['color'] ?> - <?= $product['release_at'] ?> - <?= $product['brand'] ?>
                    - <?= $product['per_sale'] ?> - <img src="<?= $product['img_url'] ?>" alt="<?= $product['name'] ?>" width="50">
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?action=create">Add New Product</a>
</body>
</html>