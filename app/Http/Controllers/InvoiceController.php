<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use PDF;

class InvoiceController extends Controller
{
    public function download($id)
    {
        $order = Order::findOrFail($id);

        $pdf = PDF::loadView('invoice', compact('order'));

        return $pdf->download('invoice_'.$order->id.'.pdf');
    }
}