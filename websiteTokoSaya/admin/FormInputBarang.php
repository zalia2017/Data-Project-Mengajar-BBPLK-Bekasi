<h3 class="text-center mb-5">FORM INPUT DATA BARANG</h3>
<!-- <div id="show_message" class="alert alert-warning alert-dismissible" style="display:none" role="alert">
    Data Berhasil Tersimpan !
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> -->
<form action="ProsesInsertBarang.php" id="form1" method="POST">
    <div class="form-group row">
        <label class="control-label col-sm-3">Nama Barang :</label>
        <div class="col-sm-9">
            <input type="text" name="namaBarang" class="form-control" id="nama-barang" placeholder="Masukkan Nama Barang" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-sm-3">Satuan Barang :</label>
        <div class="col-sm-9">
            <input type="text" name="satuanBarang" class="form-control" id="satuan-barang" placeholder="Masukkan Satuan Barang" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-sm-3">Harga Barang</label>
        <div class="col-sm-9">
            <input type="number" min="0" name="hargaBarang" class="form-control" id="harga-barang" placeholder="Masukkan Harga Barang" required>
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
            <th>Nama Barang</th>
            <th>Satuan Barang</th>
            <th>Harga Barang</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        //Jika $_GET['q'] ada isinya
        if (isset($_GET['q'])) {
            //yang dijalankan jika ada isinya
            $q = $_GET['q'];
            $sql = "SELECT*FROM tb_barang WHERE nama_barang LIKE '%$q%'";
        } else {
            //Jika $_GET['q'] tidak ada isinya
            $sql = "SELECT*FROM tb_barang";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            //Akan dijalankan jika recordnya ada
            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id_barang'] ?></td>
                    <td><?= $row['nama_barang'] ?></td>
                    <td><?= $row['satuan_barang'] ?></td>
                    <td><?= $row['harga_barang'] ?></td>
                    <td>
                        <a onclick="return confirm('Anda yakin akan menghapus record ini?')" class="btn btn-danger" href="prosesDeleteBarang.php?id=<?= $row['id_barang'] ?>">
                            Delete
                        </a>
                        <a class="btn btn-primary" href="" onclick="showBarangUpdateForm('<?= $row['id_barang'] ?>', '<?= $row['nama_barang'] ?>', '<?= $row['satuan_barang'] ?>', '<?= $row['harga_barang'] ?>')" data-toggle="modal" data-target="#exampleModal">
                            Update
                        </a>
                    </td>
                </tr>
        <?php
            }
        } else {
            //Akan dijalankan jika recordnya kosong
            echo "<tr><td colspan='3'>Record masih kosong</td></tr>";
        }
        ?>
    </tbody>

</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM UPDATE DATA BARANG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="prosesUpdateBarang.php" method="POST">

                    <div class="form-group row">
                        <label class="control-label col-sm-3">Id Barang :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="idBarang" id="modal-id-barang" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3">Nama User :</label>
                        <div class="col-sm-9">
                            <input type="text" name="namaBarang" class="form-control" id="modal-nama-barang" placeholder="Masukkan Nama Barang" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3">Satuan Barang :</label>
                        <div class="col-sm-9">
                            <input type="text" name="satuanBarang" class="form-control" id="modal-satuan-barang" placeholder="Masukkan Satuan Barang" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3">Harga Barang :</label>
                        <div class="col-sm-9">
                            <input type="number" name="hargaBarang" class="form-control" id="modal-harga-barang" placeholder="Masukkan Harga Barang" required>
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