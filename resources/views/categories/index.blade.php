@extends('layouts.app3')

@section('content')
<div class="container mt-4">
    <!-- Banner -->
    <div class="banner mb-4">
        <img src="{{ asset('image/14.jpg') }}" class="img-fluid" alt="Banner">
    </div>

    <!-- Menu -->
    <div class="menu mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Bookstore</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('pages.index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pages.list') }}">Danh sách</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                                <a class="dropdown-item" href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item" style="margin-left: 470px;">
                        <a class="nav-link" href="{{ route('cart.index')}}">🛒 </a>
                    </li> --}}
                </ul>
            </div>
        </nav>
    </div>

    <!-- Categories -->
    <div class="categories">
        <h1 class="mb-4">Categories</h1>

        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i> View Books
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Information about the bookstore.</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p>Email: info@bookstore.com</p>
                    <p>Phone: (123) 456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="mr-2"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="mr-2"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
