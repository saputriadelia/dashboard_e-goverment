<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #828282;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        .login-container {
            background-color: #ffffff;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            padding: 2rem;
            width: 100%;
            max-width: 500px; /* Increased the max-width */
        }
        .login-container h1 {
            margin-bottom: 1.5rem;
            color: #000000;
            font-weight: 600;
        }
        .login-container .form-control {
            background-color: #ffffff;
            color: #000000;
            border: 1px solid #ced4da;
            font-family: 'Poppins', sans-serif;
        }
        .login-container .form-control:focus {
            box-shadow: none;
            background-color: #ffffff;
        }
        .login-container .btn-primary {
            background-color: #007bff;
            border: none;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
        .login-container .btn-primary:hover {
            background-color: #0056b3;
        }
        .alert {
            background: rgba(255, 0, 0, 0.2);
            border: none;
        }
        .login-container h1, .login-container h6 {
            margin-bottom: 0.5rem; /* Reduced the bottom margin */
            color: #000000;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h1 class="text-center">Login</h1>
        <h6 class="text-center">Masukan Username dan Password</h6>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div> 
</body>
</html>
