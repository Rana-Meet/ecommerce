<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
</head>
<body>

<h2>Add Product</h2>

    <form method="POST" action="/admin/login" >
            @csrf

            <label>Product Name</label>
            <input type="text" name="name"><br><br>

            <label>Price</label>
            <input type="text" name="price"><br><br>

            <label>Description</label>
            <textarea name="description"></textarea><br><br>

            <label>Product Image</label>
            <input type="file" name="image"><br><br>

            <button type="submit">Add Product</button>

    </form>

</body>
</html> 