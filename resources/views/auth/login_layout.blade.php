<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KaiAdmin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: url('https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2c/06/aa/3d/caption.jpg?w=1200&h=-1&s=1') no-repeat center center fixed;
            background-size: cover;
        }
        .blur-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.2);
        }
        .login-container {
            position: relative;
            z-index: 10;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .logo-container {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .logo-container i {
            font-size: 3rem;
            color: #ff6219;
        }
    </style>
</head>
<body>
    <div class="blur-bg"></div>
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="col-md-6 login-container">
                <div class="logo-container">
                    <i class="fas fa-cubes"></i>
                    <h1 class="fw-bold">Roomify</h1>
                </div>
                <form>
                    <h5 class="fw-normal mb-3 text-center">Login ke akun kamu!</h5>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" class="form-control" required />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control" required />
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-dark btn-lg" type="submit">Login</button>
                    </div>
                    <div class="text-center mt-3">
                        <a class="small text-muted" href="#">Temukan password?</a>
                        <p class="mt-2">Anda tidak memiliki akun? <a href="#" class="text-dark">Daftar here</a></p>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>