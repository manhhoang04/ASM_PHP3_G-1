@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Edit Book</h1>
        <div class="card card-custom">
            <div class="card-body">
                <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail:</label>
                        <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="{{ $book->thumbnail }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="publisher">Publisher:</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="publication">Publication Date:</label>
                        <input type="date" class="form-control" id="publication" name="publication" value="{{ $book->publication }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $book->price }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $book->quantity }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="category_id">Category:</label>
                        <input type="number" class="form-control" id="category_id" name="category_id" value="{{ $book->category_id }}" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Book
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
