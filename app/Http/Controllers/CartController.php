<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('cart.index', ['cart' => $cart]);
    }

    public function add(Request $request)
{
    $request->validate([
        'item_id' => 'required|integer|exists:books,id',
        'quantity' => 'required|integer|min:1',
    ]);

    $cart = Session::get('cart', []);
    $itemId = $request->input('item_id');
    $quantity = $request->input('quantity', 1);

    if (isset($cart[$itemId])) {
        $cart[$itemId]['quantity'] += $quantity;
    } else {
        $book = \App\Models\Book::find($itemId);
        $cart[$itemId] = [
            'name' => $book->title,
            'price' => $book->price,
            'quantity' => $quantity,
        ];
    }

    Session::put('cart', $cart);
    return redirect()->route('cart.index')->with('success', 'Product added to cart successfully.');
}


    public function update(Request $request)
    {
        $cart = Session::get('cart', []);
        $itemId = $request->input('item_id');
        $quantity = $request->input('quantity', 1);

        if (isset($cart[$itemId])) {
            $cart[$itemId]['quantity'] = $quantity;
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }

    public function remove(Request $request)
    {
        $cart = Session::get('cart', []);
        $itemId = $request->input('item_id');

        if (isset($cart[$itemId])) {
            unset($cart[$itemId]);
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }
    public function placeOrder(Request $request)
    {
        // Xử lý logic đặt hàng ở đây
        // Lưu thông tin đơn hàng vào cơ sở dữ liệu nếu cần

        // Xóa giỏ hàng sau khi đặt hàng
        Session::forget('cart');

        // Thông báo thành công
        return redirect()->route('pages.list')->with('success', 'Đặt hàng thành công!');
    }
}
