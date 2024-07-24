@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Books</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Add Book
        </a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Publication Date</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td><img src="{{ asset('image/' . $book->thumbnail) }}" width="150px" class="img-thumbnail"></td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->publication }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->quantity }}</td>
                    <td>{{ $book->category->name }}</td>
                    <td>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('books.edit', $book->id) }}">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
