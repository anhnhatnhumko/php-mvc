<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="index.php?action=update" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>"><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" value="<?= $product['price'] ?>"><br>
        <label for="color">Color:</label><br>
        <input type="text" id="color" name="color" value="<?= $product['color'] ?>"><br>
        <label for="release_at">Release Date:</label><br>
        <input type="date" id="release_at" name="release_at" value="<?= $product['release_at'] ?>"><br>
        <label for="brand">Brand:</label><br>
        <input type="text" id="brand" name="brand" value="<?= $product['brand'] ?>"><br>
        <label for="per_sale">Per Sale:</label><br>
        <input type="text" id="per_sale" name="per_sale" value="<?= $product['per_sale'] ?>"><br>
        <label for="img_url">Image URL:</label><br>
        <input type="text" id="img_url" name="img_url" value="<?= $product['img_url'] ?>"><br>
        
        <input type="submit" value="Submit">
    </form>
    <a href="index.php?action=delete&id=<?= $product['id'] ?>">Delete</a>
    <a href="index.php">Back to Products</a>
</body>
</html>