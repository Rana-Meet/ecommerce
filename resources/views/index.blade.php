<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        /* Body with background image and overlay */
        body {
            font-family: 'Arial', sans-serif;
            background: url('{{ asset("images/background.jpg") }}') no-repeat center center fixed;
            background-size: cover;
            padding: 40px;
            margin: 0;
            position: relative;
        }

        /* Optional dark overlay for better readability */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.3); /* adjust opacity */
            z-index: -1;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #fff; /* change to white for visibility on background */
            font-size: 32px;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.7);
        }

        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
        }

        .product-card {
            border-radius: 12px;
            padding: 20px;
            background: rgba(255,255,255,0.95); /* slightly transparent for effect */
            width: 220px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .product-card h3 {
            margin-bottom: 10px;
            font-size: 20px;
            color: #444;
            min-height: 50px;
        }

        .product-card p {
            margin-bottom: 15px;
            font-weight: bold;
            color: #222;
        }

        .product-card button {
            padding: 10px 20px;
            background: linear-gradient(135deg, #28a745, #218838);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        .product-card button:hover {
            background: linear-gradient(135deg, #218838, #1e7e34);
        }

        .cart-link {
            display: block;
            width: 180px;
            margin: 40px auto 0 auto;
            text-align: center;
            padding: 14px;
            background: #007bff;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 6px;
            transition: background 0.3s;
        }

        .cart-link:hover {
            background: #0056b3;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .products-container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<h2>Product List</h2>

<div class="products-container">
    @foreach($products as $product)
    <div class="product-card">
        <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
        <h3>{{ $product->name }}</h3>
        <p>₹{{ $product->price }}</p>
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