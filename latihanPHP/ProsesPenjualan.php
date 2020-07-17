<?php
if(isset($_POST['hitung'])){
    $namaBarang = $_POST['namaBarang'];
    $hargaBarang = $_POST['hargaBarang'];
    $jumlahBeli = $_POST['jumlahBeli'];
    $totalHarga = $hargaBarang * $jumlahBeli;
    if($jumlahBeli>=10){
        $diskon = 0.05*$totalHarga;
    }else{
        $diskon = 0;
    }
    $grandTotal = $totalHarga-$diskon;
}

?>
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
                                    href="FormPenjualan.php">Form Penjualan</a>
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
                    <h3 class="text-center mb-5">Rincian Penjualan</h3>
                    <form action="ProsesBayar.php" method="POST">
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="namaBarang" min="0" class="form-control" id="namaBarang" value="<?=$namaBarang;?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Harga Barang</label>
                            <div class="col-sm-9">
                                <input type="number" name="hargaBarang" min="0" class="form-control" id="harga" value="<?=$hargaBarang;?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Jumlah Beli</label>
                            <div class="col-sm-9">
                                <input type="number" name="jumlahBeli" min="0" class="form-control" id="jumlah" value="<?=$jumlahBeli;?>"readonly>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Total Harga</label>
                            <div class="col-sm-9">
                                <input type="number" name="totalHarga" min="0" class="form-control" id="total" value="<?=$totalHarga;?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row pb-2" style="border-bottom: 1px dashed grey">
                            <label class="control-label col-sm-3">Diskon</label>
                            <div class="col-sm-9">
                                <input type="number" name="diskon" min="0" class="form-control" id="diskon" value="<?=$diskon;?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3" style="font-weight:bold">Grand Total</label>
                            <div class="col-sm-9">
                                <input type="number" name="gTotal" min="0" class="form-control" id="gTotal" value="<?=$grandTotal;?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3" style="font-weight:bold">Uang Bayar</label>
                            <div class="col-sm-9">
                                <input type="number" name="uangBayar" min="0" class="form-control" onchange="getKembali()" onkeyup="getKembali()" id="bayar" placeholder="Masukkan Jumlah Uang Bayar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3"  style="font-weight:bold">Uang Kembali</label>
                            <div class="col-sm-9">
                                <input type="number" name="uangKembali" min="0" class="form-control" id="kembali" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-primary btn-block" value="Bayar" id="tombolBayar">
                            </div>
                        </div>
                    </form>
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
        <script>
            function getKembali(){
                var gTotal= document.getElementById('gTotal').value
                var uangBayar = document.getElementById('bayar').value

                var uangKembali = uangBayar - gTotal
                document.getElementById('kembali').value = uangKembali
                
                if(uangKembali < 0){
                    document.getElementById('tombolBayar').disabled=true;
                }else{
                    document.getElementById('tombolBayar').disabled=false;
                }
                console.log(uangKembali)
            }
            
            
        </script>
    </body>
</html>