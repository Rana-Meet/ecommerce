<!DOCTYPE html>
<html>
<head>
<title>Invoice - Meet`s Shop</title>

<style>

body{
font-family:Arial, sans-serif;
background:#f3f4f6;
margin:0;
padding:40px;
}

/* Invoice Box */

.invoice-container{
max-width:700px;
margin:auto;
background:white;
padding:40px;
border-radius:10px;
box-shadow:0 5px 20px rgba(0,0,0,0.1);
}

/* Header */

.invoice-header{
display:flex;
justify-content:space-between;
align-items:center;
border-bottom:2px solid #eee;
padding-bottom:15px;
margin-bottom:20px;
}

.shop-name{
font-size:26px;
font-weight:bold;
color:#2563eb;
}

.invoice-title{
font-size:22px;
font-weight:bold;
}

/* Table */

.invoice-table{
width:100%;
border-collapse:collapse;
margin-top:20px;
}

.invoice-table th{
text-align:left;
background:#f1f5f9;
padding:10px;
}

.invoice-table td{
padding:10px;
border-bottom:1px solid #eee;
}

/* Total */

.total{
text-align:right;
font-size:20px;
font-weight:bold;
margin-top:20px;
color:#16a34a;
}

/* Footer */

.footer{
margin-top:30px;
text-align:center;
color:#6b7280;
font-size:14px;
}

/* Print Button */

button{
margin-top:20px;
padding:10px 20px;
background:#2563eb;
border:none;
color:white;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#1d4ed8;
}

</style>
</head>

<body>

<div class="invoice-container">

<div class="invoice-header">
<div class="shop-name">Meet`s Shop</div>
<div class="invoice-title">Invoice</div>
</div>

<table class="invoice-table">

<tr>
<th>Order ID</th>
<td>{{ $order->id }}</td>
</tr>

<tr>
<th>User ID</th>
<td>{{ $order->user_id }}</td>
</tr>

<tr>
<th>Payment Mode</th>
<td>{{ $order->payment_mode }}</td>
</tr>
<tr>
    <th>Item</th>
    <td>{{ $order->product }}</td>
</tr>
<tr>
<th>Total Amount</th>
<td>₹{{ $order->total }}</td>
</tr>

</table>

<div class="total">
Total Payable : ₹{{ $order->total }}
</div>

<div class="footer">
<h3>Thank you for shopping with Meet`s Shop!</h3>
<p>Your order has been successfully placed.</p>
</div>

<center>
<button onclick="window.print()">Print Invoice</button>
</center>

</div>

</body>
</html>