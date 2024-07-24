<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
    <style>
        body {
            background: #f8f9fa;
            /* width: 1800px; */

        }
        .navbar {
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }
    
        .card-custom {
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .img-fluid{
            width: 100%;
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
        .container .mt-4 {
            
        }
    </style>
</head>
<body>
    <div class="content">

        <div class="container mt-4">
            <div class="card card-custom">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
