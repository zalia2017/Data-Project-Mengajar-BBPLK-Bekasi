<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body style="background-color: #f1f1f1;">
        <?php
            $nama1 = "Zulka Ajuab";
            $nama2 = "Ali";
            $email1 = "zulka@gmail.com";
            $email2 = "ali@gmail.com";
            $comment1 = "Mantap";
            $comment2 = "Lanjutkan";
        ?>
        <div class="container">
            <div class="row">
                <div class="col-12 bg-primary text-light" style="height: 100px">Header</div>

                <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark
                    sticky-top">
                    <a class="navbar-brand" href="javascript:void(0)">myLogo</a>
                    <button class="navbar-toggler navbar-toggler-right"
                        type="button" data-toggle="collapse"
                        data-target="#navb">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navb">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active"
                                    href="javascript:void(0)">Data Komentar</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text"
                                placeholder="Search">
                            <button class="btn btn-success my-2 my-sm-0"
                                type="button">Kirim</button>
                        </form>
                    </div>
                </nav>

                <div class="col-12 col-md-8 col-lg-10 bg-light p-md-3 pt-1" style="min-height:650px">
                    <h3 class="text-center mb-5">Data Komentar</h3>
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Comment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><?php echo $nama1;?></td>
                                <td><?=$email1;?></td>
                                <td><?=$comment1;?></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><?php echo $nama2;?></td>
                                <td><?php echo $email2;?></td>
                                <td><?php echo $comment2;?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-md-4 col-lg-2 bg-danger text-light">Banner</div>
                <div class="col-12 bg-info text-light">Footer</div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    </body>
</html>