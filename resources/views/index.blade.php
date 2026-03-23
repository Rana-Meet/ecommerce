<!DOCTYPE html>
<html>
<head>
<title>Electronic  Shop</title>

<style>

body{
font-family:Arial;
margin:0;
background:#0f172a;
color:white;
}

/* Navbar */

.navbar{
display:flex;
justify-content:space-between;
align-items:center;
padding:15px 40px;
background:#111827;
}

.logo{
font-size:24px;
font-weight:bold;
}

.search input{
padding:8px;
width:300px;
border-radius:5px;
border:none;
}

/* Banner */

.banner{
width:100%;
height:350px;
overflow:hidden;
position:relative;
}

.slides{
display:flex;
width:200%;
animation:slide 8s infinite;
}

.slides img{
width:50%;
height:350px;
object-fit:cover;
}

/* Banner Animation */

@keyframes slide{
0%{transform:translateX(0);}
45%{transform:translateX(0);}
50%{transform:translateX(-50%);}
95%{transform:translateX(-50%);}
100%{transform:translateX(0);}
}

/* Categories */

.categories{
display:flex;
justify-content:center;
gap:30px;
padding:30px;
}

.cat{
text-align:center;
}

.cat img{
width:60px;
background:#1f2937;
padding:15px;
border-radius:10px;
transition:0.3s;
}

.cat img:hover{
transform:scale(1.1);
background:#2563eb;
}

/* Products */

.products-container{
display:flex;
flex-wrap:wrap;
justify-content:center;
gap:25px;
padding:40px;
}

.product-card{
width:220px;
background:white;
color:black;
padding:20px;
border-radius:10px;
text-align:center;
box-shadow:0 4px 15px rgba(0,0,0,0.3);
transition:0.3s;
}

.product-card:hover{
transform:translateY(-10px);
}

.product-card img{
width:100%;
height:150px;
object-fit:contain;
}

button{
padding:10px 18px;
background:#22c55e;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#16a34a;
}

.cart-link{
display:block;
width:200px;
margin:20px auto;
text-align:center;
padding:12px;
background:#3b82f6;
color:white;
text-decoration:none;
border-radius:6px;
}

/* Footer */

.footer{
background:#020617;
padding:50px 80px;
margin-top:40px;
}

.footer-container{
display:flex;
flex-wrap:wrap;
justify-content:space-between;
gap:40px;
}

.footer-column h3{
margin-bottom:15px;
color:#38bdf8;
}

.footer-column ul{
list-style:none;
padding:0;
}

.footer-column ul li{
margin:6px 0;
font-size:14px;
color:#cbd5f5;
cursor:pointer;
}

.footer-column ul li:hover{
color:white;
}

.newsletter input{
padding:10px;
border:none;
border-radius:5px;
width:200px;
}

.footer-bottom{
text-align:center;
margin-top:30px;
font-size:14px;
color:#94a3b8;
}

</style>
</head>

<body>

<!-- Navbar -->

<div class="navbar">

<div class="logo">Electronic Shop</div>

<div class="search">
<input type="text" placeholder="Search products">
</div>

<div>
<a href="/cart" style="color:white;">Cart</a>
</div>

</div>

<!-- Banner -->

<div class="banner">

<div class="slides">

<img src="{{ asset('storage/images/banner1.jpg') }}" alt="Banner">

<img src="{{ asset('storage/images/banner2.jpg') }}" alt="Banner">

</div>

</div>

<!-- Categories -->

<div class="categories">

<div class="cat">
<img src="{{ asset('storage/images/phonw.jpg') }}">
<p>Mobiles</p>
</div>

<div class="cat">
<img src="{{ asset('storage/images/laptop.jpg') }}">
<p>Laptops</p>
</div>

<div class="cat">
<img src="{{ asset('storage/images/tv.jpg') }}">
<p>TV</p>
</div>

<div class="cat">
<img src="{{ asset('storage/images/ac.jpg') }}">
<p>AC</p>
</div>

<div class="cat">
<img src="{{ asset('storage/images/watch.jpg') }}">
<p>Smart Watch</p>
</div>

</div>

<h2 style="text-align:center;">Latest Products</h2>

<!-- Products -->

<div class="products-container">

@foreach($products as $product)

<div class="product-card">

<img src="{{ asset('storage/images/' . $product->image) }}">

<h3>{{ $product->name }}</h3>

<p>₹{{ $product->price }}</p>

<form action="/add-cart/{{ $product->id }}" method="POST">

@csrf

<button>Add To Cart</button>

</form>

</div>

@endforeach

</div>

<a href="/cart" class="cart-link">View Cart</a>

<!-- Footer -->

<div class="footer">

<div class="footer-container">

<div class="footer-column">

<h3>Connect with us</h3>

<div class="newsletter">
<input type="text" placeholder="Enter Email ID">
</div>

</div>

<div class="footer-column">

<h3>Useful Links</h3>

<ul>
<li>About Meet`s Shop</li>
<li>Help And Support</li>
<li>FAQs</li>
<li>Buying Guide</li>
<li>Return Policy</li>
<li>B2B Orders</li>
<li>Store Locator</li>
<li>E-Waste</li>
<li>Franchise Opportunity</li>
<li>Careers</li>
</ul>

</div>

<div class="footer-column">

<h3>Products</h3>

<ul>
<li>Televisions</li>
<li>Home Appliances</li>
<li>Phones & Wearables</li>
<li>Computers & Tablets</li>
<li>Kitchen Appliances</li>
<li>Audio & Video</li>
<li>Health & Fitness</li>
<li>Gaming</li>
<li>Accessories</li>
</ul>

</div>

</div>

<div class="footer-bottom">

© Copyright 2026 Meet`s Shop. All rights reserved

</div>

</div>

</body>
</html>