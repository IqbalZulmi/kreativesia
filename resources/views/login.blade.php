<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web-assets/css/login.css') }}">
</head>
<body class="header finisher-header">
    <div class="login-form card">
        <h2>Halodek</h2>
        <form>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Masukan Email Anda" required>
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukan Kata Sandi Anda" required>
            </div>
            <div class="login-forgot-password mb-3">
                <a href="#" class="text-dark"> Lupa Kata Sandi ?</a>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('web-assets/js/finisher-header.es5.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        new FinisherHeader({
            "count": 6,
            "size": {
                "min": 1100,
                "max": 1300,
                "pulse": 0
            },
            "speed": {
                "x": {
                "min": 0.1,
                "max": 0.3
                },
                "y": {
                "min": 0.1,
                "max": 0.3
                }
            },
            "colors": {
                "background": "#ffebeb",
                "particles": [
                "#c98f8f",
                "#e7c7c6"
                ]
            },
            "blending": "screen",
            "opacity": {
                "center": 1,
                "edge": 0.1
            },
            "skew": 0,
            "shapes": [
                "c"
            ]
        });
    </script>
</body>
</html>
