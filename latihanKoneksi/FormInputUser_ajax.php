<?php require_once "koneksi.php";?>
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

        <title>Aplikasi Toko Saya</title>
    </head>
    <body style="background-color: #f1f1f1;">
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
                                <a class="nav-link active" href="FormInputUser.php">Form Input Data User</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" name="q"
                                placeholder="Search">
                            <button class="btn btn-success my-2 my-sm-0"
                                type="submit">Search</button>
                        </form>
                    </div>
                </nav>

                <div class="col-12 col-md-8 col-lg-10 bg-light p-md-3 pt-1" style="min-height:650px">
                    <h3 class="text-center mb-5">FORM INPUT DATA USER</h3>
                    <div id="show_message" class="alert alert-warning alert-dismissible" style="display:none" role="alert">
                        Data Berhasil Tersimpan !
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="ProsesInsertUser.php" id="form1" method="POST">
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Nama User :</label>
                            <div class="col-sm-9">
                                <input type="text" name="namaUser" class="form-control" id="namaUser" placeholder="Masukkan Nama User" 
                                required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Email User :</label>
                            <div class="col-sm-9">
                                <input type="email" name="emailUser" class="form-control" id="emailUser" placeholder="Masukkan Email User" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Password User</label>
                            <div class="col-sm-9">
                                <input type="password" name="passwordUser" class="form-control" id="passwordUser" placeholder="Masukkan Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="submit" name="simpan" class="btn btn-primary btn-block" value="Simpan">
                            </div>
                        </div>
                    </form>
                    <!-- Tabel data -->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>

                    </table>
                </div>
                <div class="col-12 col-md-4 col-lg-2 bg-danger text-light">Banner</div>
                <div class="col-12 bg-info text-light">Footer</div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">FORM UPDATE DATA USER</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="prosesUpdateUser.php" method="POST">
                    
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Id User :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="idUser" id="modal-id-user"
                                 readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Nama User :</label>
                            <div class="col-sm-9">
                                <input type="text" name="namaUser" class="form-control" id="modal-nama-user" placeholder="Masukkan Nama User" 
                                required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Email User :</label>
                            <div class="col-sm-9">
                                <input type="email" name="emailUser" class="form-control" id="modal-email-user" placeholder="Masukkan Email User" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="submit" name="simpan" class="btn btn-primary btn-block" value="Update">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
        
        <script>
            //Fungsi untk menampilkan nilai pada form update
            function showUpdateForm(id,nama,email){
                //document.getElementById adalah cara pada js DOM untuk mengambil elemen pada halaman html
                document.getElementById('modal-id-user').value = id ;
                document.getElementById('modal-nama-user').value = nama ;
                document.getElementById('modal-email-user').value = email;
            }
            function bindTable(){
                $.ajax({
                    type: "POST",
                    url: "ajaxGetDataTable.php",
                    data: {},
                    contentType: "application/json;charse=utf-8",
                    dataType: "json",
                    success: function(data){
                        alert(data);
                    }
                })
            }
            $(document).ready(function(){
                bindTable();
                $("#form1").submit(function(e){
                    e.preventDefault(); 
                    $.ajax({
                        type:"POST",
                        url: "prosesInsertUser.php",
                        data: $(this).serialize(),
                        success: function(){
                            $("#show_message").fadeIn();
                            $("#namaUser").val('');
                            $("#emailUser").val('');
                            $("#passwordUser").val('');
                        }
                    })
                })
            })
            </script>
    </body>
    </html>