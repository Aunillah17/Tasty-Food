<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Panel Admin Tasty Food</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #000000;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-login {
            background-color: #ffffff;
            border: 3px solid #fbbf24;
            box-shadow: 10px 10px 0px #fbbf24;
            width: 100%;
            max-width: 420px;
        }
        .form-control-login {
            border: 2px solid #000000;
            border-radius: 0px;
            padding: 12px 15px;
            font-weight: 600;
        }
        .form-control-login:focus {
            box-shadow: none;
            border-color: #fbbf24;
            background-color: #fffbeb;
        }
        .btn-login {
            background-color: #000000;
            color: #ffffff;
            border-radius: 0px;
            padding: 14px;
            font-weight: 800;
            letter-spacing: 1px;
            border: none;
            width: 100%;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            background-color: #fbbf24;
            color: #000000;
        }
    </style>
</head>
<body>

<div class="container p-3">
    <div class="card card-login mx-auto p-4 p-md-5">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-uppercase mb-1">TASTY <span style="color: #fbbf24;">FOOD</span></h3>
            <p class="text-muted small fw-bold text-uppercase">Admin Login Panel</p>
        </div>

        <!-- Alert Error -->
        @if(session('error'))
            <div class="alert alert-danger rounded-0 border-2 border-dark small fw-bold mb-4">
                ⚠️ {{ session('error') }}
            </div>
        @endif

        <form action="/tasty-secret-admin/login" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-bold text-uppercase small">Email / Username</label>
                <input type="email" name="email" class="form-control form-control-login" placeholder="admin@tastyfood.com" required autofocus>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold text-uppercase small">Password</label>
                <input type="password" name="password" class="form-control form-control-login" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn btn-login text-uppercase">Masuk Ke Panel ➔</button>
        </form>
    </div>
</div>

</body>
</html>