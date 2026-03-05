<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
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

        label{
            display:block;
            text-align:center;
            margin-top:20px;
            font-weight:bold;
        }

        select{
            display:block;
            width:200px;
            margin:10px auto;
            padding:8px;
            font-size:16px;
        }

        button{
            display:block;
            width:200px;
            margin:20px auto;
            padding:12px;
            background:#007bff;
            color:white;
            font-size:18px;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#0056b3;
        }

    </style>
</head>
<body>

<h2>Checkout</h2>

<table border="1">
<tr>
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
</tr>

@foreach($cart as $item)
<tr>
<td>{{ $item->product->name }}</td>
<td>₹{{ $item->product->price }}</td>
<td>{{ $item->quantity }}</td>
</tr>
@endforeach

</table>

<form method="POST" action="/place-order">
    @csrf

    <label>Select Payment Mode</label>
    <select name="payment_mode">
        <option value="COD">Cash on Delivery</option>
        <option value="UPI">UPI</option>
        <option value="Card">Card</option>
    </select>

    <button type="submit">Place Order</button>
</form>

</body>
</html>