<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <title>Login ke Aplikasi Toko Saya</title>
    <style>
        .container {
            width: 400px;
        }
    </style>
</head>

<body style="background-color: #f1f1f1;">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Login to Apps
            </div>
            <div class="card-body">
                <form action="prosesLogin.php" id="form1" method="POST">
                    <div class="form-group row">
                        <div class="col-12">
                            <input type="text" name="namaUser" class="form-control" id="namaUser" placeholder="Masukkan Nama User" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <input type="password" name="passwordUser" class="form-control" id="passwordUser" placeholder="Masukkan Password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <input type="submit" name="Login" class="btn btn-primary btn-block" value="Login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>