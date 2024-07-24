@extends('layouts.app4')

@section('content')
    <div class="container mt-4">
        <h1>Trang chi tiết</h1>
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('image/' . $book->thumbnail) }}" style="margin-left: 200px" width="300px" alt="{{ $book->title }}" class="img-thumbnail">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 style="margin-left: 200px">{{ $book->title }}</h3>
                        <h5 style="margin-left: 200px" class="card-title">Author: {{ $book->author }}</h5>
                        <p style="margin-left: 200px" class="card-text">Publisher: {{ $book->publisher }}</p>
                        <p style="margin-left: 200px" class="card-text">Publication Date: {{ $book->publication }}</p>
                        <p style="margin-left: 200px" class="card-text">Price: ${{ $book->price }}</p>
                        <p style="margin-left: 200px" class="card-text">Quantity: {{ $book->quantity }}</p>
                        <p style="margin-left: 200px" class="card-text">Category: {{ $book->category->name }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="quantity mt-2">
                            <label for="quantity" class="form-label">Quantity</label>
                            <div class="input-group">
                                <button class="btn btn-quantity" type="button" id="decreaseQuantity">-</button>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" max="{{ $book->quantity }}">
                                <button class="btn btn-quantity" type="button" id="increaseQuantity">+</button>
                            </div>
                        </div>
                        <br>
                        <form id="addToCartForm" action="{{ route('cart.add') }}" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $book->id }}">
                            <input type="hidden" id="formQuantity" name="quantity" value="1">
                            <button style="margin-left: 30px; width: 75px;" type="submit" class="btn btn-primary btn-sm">
                                <i class="fas fa-shopping-cart"></i> Mua
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Books -->
        <div class="related-books mt-4">
            <h2>Một số sách liên quan</h2>
            <div class="row">
                @foreach ($relatedBooks as $relatedBook)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <a href="{{ route('books.show', $relatedBook->id) }}">
                                <img src="{{ asset('image/' . $relatedBook->thumbnail) }}"  class="card-img-top" alt="{{ $relatedBook->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $relatedBook->title }}</h5>
                                    <p class="card-text">{{ $relatedBook->author }}</p>
                                    <p class="card-text">{{ $relatedBook->price }} USD</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('decreaseQuantity').addEventListener('click', function() {
            let quantityInput = document.getElementById('quantity');
            if (quantityInput.value > 1) {
                quantityInput.value--;
                document.getElementById('formQuantity').value = quantityInput.value;
            }
        });

        document.getElementById('increaseQuantity').addEventListener('click', function() {
            let quantityInput = document.getElementById('quantity');
            if (quantityInput.value < {{ $book->quantity }}) {
                quantityInput.value++;
                document.getElementById('formQuantity').value = quantityInput.value;
            }
        });

        document.getElementById('quantity').addEventListener('input', function() {
            let quantityInput = document.getElementById('quantity');
            document.getElementById('formQuantity').value = quantityInput.value;
        });
    </script>
@endsection
