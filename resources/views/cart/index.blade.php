@extends('layouts.app3')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Giỏ Hàng</h1>

    @if (session('cart'))
        <table class="table">
            <thead>
                <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Tổng</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach (session('cart') as $id => $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ number_format($item['price'], 2) }} USD</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ number_format($item['price'] * $item['quantity'], 2) }} USD</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="item_id" value="{{ $id }}">
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3">
            <strong>Tổng Tiền: </strong>
            {{ number_format(array_sum(array_map(function ($item) {
                return $item['price'] * $item['quantity'];
            }, session('cart'))), 2) }} USD
        </div>

        <div class="mt-3">
            <a href="{{ route('pages.list') }}" class="btn btn-primary">Quay lại Trang Chủ</a>
            <form action="{{ route('order.place') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-success">Đặt Hàng</button>
            </form>
        </div>

    @else
        <p>Giỏ hàng của bạn hiện đang trống.</p>
        <div class="mt-3">
            <a href="{{ route('pages.list') }}" class="btn btn-primary">Quay lại Trang sản phẩm</a>
        </div>
    @endif
</div>
@endsection
