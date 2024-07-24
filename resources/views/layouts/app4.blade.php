<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
            background: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .nav-link:hover {
            color: #ffd700 !important;
        }
        
        .card-custom {
            margin-top: 20px;

        }
        .card-footer{
            width: 170px;
            margin-left: 200px;
            
        }
        .content {
            margin-left: 50px;
            padding: 20px;
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
        }
        .footer a {
            color: #ffd700;
            margin-right: 10px;
        }
        <style>
    .btn-quantity {
        width: 50px;
        height: 40px;
        font-size: 20px;
        border-radius: 50%;
        padding: 0;
        color: white;
        background-color: #007bff; 
        border: none;
    }

    .btn-quantity:hover {
        background-color: #0056b3; 
    }

    .btn-quantity:disabled {
        background-color: #6c757d; 
        color: #fff;
    }
</style>

</head>
<body>
    <div class="content">
        <div class="menu mb-4">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">Bookstore</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('pages.index') }}">Trang chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pages.list') }}">Danh sách</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Danh mục sách
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($categories as $category)
                                    <a class="dropdown-item" href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li> --}}
                        {{-- <li class="nav-item" style="margin-left: 470px;">
                            <a class="nav-link" href="{{ route('cart.index')}}">🛒 </a>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </div>
    
        <div class="container mt-4">
            <div class="card card-custom">
                <div class="card-body">
                    @yield('content')
                </div>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    @yield('scripts')
</body>
</html>
