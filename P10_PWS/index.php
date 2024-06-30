<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4b7a2;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
            background-color: #f18658;
        }

        .card-body {
            padding: 2rem;
        }

        .form-control {
            border-radius: 0.3rem;
            padding: 1rem;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: #ac4c48;
            border-color: #ac4c48;
            border-radius: 0.3rem;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #f18658;
            border-color: #f18658;
        }

        .alert {
            margin-top: 1rem;
            border-radius: 0.3rem;
            font-size: 0.9rem;
        }

        .login-title {
            font-weight: 600;
            color: #ac4c48;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center mb-4 login-title">Login</h1>
                        <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') { ?>
                            <div class="alert alert-danger" role="alert">
                                Username atau password salah!
                            </div>
                        <?php } ?>
                        <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses') { ?>
                            <div class="alert alert-success" role="alert">
                                Login berhasil! Selamat datang, <?php echo htmlspecialchars($_GET['nama']); ?>.
                            </div>
                        <?php } ?>
                        <form action="login.php" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>