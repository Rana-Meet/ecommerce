<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f5f5f5;
            padding:40px;
        }

        h2{
            text-align:center;
            margin-bottom:30px;
        }

        .products-container{
            display:flex;
            flex-wrap:wrap;
            justify-content:center;
            gap:20px;
        }

        .product-card{
            border:1px solid #ccc;
            border-radius:8px;
            padding:20px;
            background:white;
            width:200px;
            text-align:center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .product-card h3{
            margin-bottom:10px;
            font-size:20px;
        }

        .product-card p{
            margin-bottom:15px;
            font-weight:bold;
        }

        .product-card button{
            padding:10px 15px;
            background:#28a745;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
            font-size:16px;
        }

        .product-card button:hover{
            background:#218838;
        }

        .cart-link{
            display:block;
            width:150px;
            margin:30px auto;
            text-align:center;
            padding:12px;
            background:#007bff;
            color:white;
            text-decoration:none;
            font-size:18px;
            border-radius:5px;
        }

        .cart-link:hover{
            background:#0056b3;
        }
    </style>
</head>
<body>

<h2>Product List</h2>

<div class="products-container">
    @foreach($products as $product)
    <div class="product-card">
        <h3>{{ $product->name }}</h3>
        <p>Price: ₹{{ $product->price }}</p>
        <form action="/add-cart/{{ $product->id }}" method="POST">
            @csrf
            <button type="submit">Add To Cart</button>
        </form>
    </div>
    @endforeach
</div>

<a href="/cart" class="cart-link">View Cart</a>

</body>
</html>