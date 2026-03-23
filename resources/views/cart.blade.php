<!DOCTYPE html>
<html>
<head>
<title>Cart</title>

<style>

body{
    font-family: Arial, sans-serif;
    background:#f5f5f5;
    padding:40px;
}

h2{
    text-align:center;
}

table{
    width:70%;
    margin:auto;
    border-collapse:collapse;
    background:white;
}

th{
    background:#333;
    color:white;
    padding:10px;
}

td{
    padding:10px;
    text-align:center;
}

tr:nth-child(even){
    background:#f2f2f2;
}

.checkout-btn{
    display:block;
    width:200px;
    margin:30px auto;
    text-align:center;
    padding:12px;
    background:#28a745;
    color:white;
    text-decoration:none;
    font-size:18px;
    border-radius:5px;
}

.checkout-btn:hover{
    background:#218838;
}

</style>

</head>
<body>

<h2>Your Cart</h2>

<table border="1">

<tr>
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
</tr>

@php $grandTotal = 0; @endphp

@foreach($cart as $item)

<tr>

<td>{{ $item->product->name ?? 'Product' }}</td>

<td>₹{{ $item->product->price ?? 0 }}</td>

<td>{{ $item->quantity }}</td>

<td>
₹{{ ($item->product->price ?? 0) * $item->quantity }}

</td>

</tr>

@endforeach

</table>

     <a href="/checkout" class="checkout-btn">Checkout</a>

</body>
</html>