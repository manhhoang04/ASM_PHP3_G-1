@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>{{ $book->title }}</h1>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Author: {{ $book->author }}</h5>
                <p class="card-text">Publisher: {{ $book->publisher }}</p>
                <p class="card-text">Publication Date: {{ $book->publication_date }}</p>
                <p class="card-text">Price: ${{ $book->price }}</p>
                <p class="card-text">Quantity: {{ $book->quantity }}</p>
                <p class="card-text">Category: {{ $book->category->name }}</p>
                <img src="{{ asset('image/' . $book->thumbnail) }}" width="200px" alt="{{ $book->title }}" class="img-thumbnail">
            </div>
            <div class="card-footer">
                <a href="{{ route('home') }}" class="btn btn-primary">Quay lại</a>
                <a href="{{ route('books.user_show', $book->id) }}" class="btn btn-primary">Xem chi tiết</a>

            </div>
        </div>
        

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
@endsection
