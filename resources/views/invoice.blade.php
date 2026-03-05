<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
</head>
<body>

<h2>Invoice</h2>

<p>Order ID : {{ $order->id }}</p>
<p>User ID : {{ $order->user_id }}</p>
<p>Total : ₹{{ $order->total }}</p>
<p>Payment Mode : {{ $order->payment_mode }}</p>

<hr>

<h3>Thank you for your order!</h3>

</body>
</html> 