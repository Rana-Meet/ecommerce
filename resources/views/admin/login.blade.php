<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
</head>
<body>

    <h2>Admin Login</h2>

    <form method="POST" action="/admin/addtocart">

    @csrf

    <label>Email</label>
    <input type="email" name="email">
    <br><br>

    <label>Password</label>
    <input type="password" name="password">
    <br><br>

    <button type="submit">Login</button>

    </form>

</body>
</html>