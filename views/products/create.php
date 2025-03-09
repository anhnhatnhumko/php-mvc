<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="index.php?action=store" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price"><br>
        <label for="color">Color:</label><br>
        <input type="text" id="color" name="color"><br>
        <label for="release_at">Release Date:</label><br>
        <input type="date" id="release_at" name="release_at"><br>
        <label for="brand">Brand:</label><br>
        <input type="text" id="brand" name="brand"><br>
        <label for="per_sale">Per Sale:</label><br>
        <input type="text" id="per_sale" name="per_sale"><br>
        <label for="img_url">Image URL:</label><br>
        <input type="text" id="img_url" name="img_url"><br>
        <input type="submit" value="Submit">
    </form>
    <a href="index.php">Back to Products</a>
</body>
</html>