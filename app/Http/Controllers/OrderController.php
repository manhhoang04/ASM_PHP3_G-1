<?php

namespace App\Http\Controllers;

// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
  
        Session::forget('cart');
        return redirect()->route('pages.list')->with('success', 'Đặt hàng thành công.Hàng sẽ giao đến quý khác trong thời gian sớm nhất.');
    }
}
