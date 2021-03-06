                    <h3 class="text-center mb-5">FORM INPUT DATA TRANSAKSI</h3>
                    <form action="ProsesInsertTransaksi.php" id="form1" method="POST">
                        <div class="form-group row">
                            <label class="control-label col-sm-3">No Transaksi :</label>
                            <div class="col-sm-9">
                                <input type="text" name="noTransaksi" class="form-control" id="no-transaksi" placeholder="Masukkan Nomer Transaksi" onkeyup="validasiTransaksi()" onclick="validasiTransaksi()" data-toggle="tooltip" title="Isi keranjang belanjaan dahulu"data-placement="left">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Tanggal :</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggalTransaksi" class="form-control" id="tanggal-transaksi" value="<?php echo date('Y-m-j');?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3">ID User(Kasir) / Nama User(Kasir)</label>
                            <div class="col-sm-2">
                                <input type="text" name="idUser" class="form-control" id="id-user" value="<?=$_SESSION['idUser']?>" readonly>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" name="namaUser" class="form-control" id="nama-user" value="<?=$_SESSION['namaUser']?>" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <select onchange="getDataBarang()" class="form-control" id="id-barang" name="idBarang">
                                    <option value="" disabled selected>Pilih Barang --></option>
                                    <?php
                                    require_once 'koneksi.php';
                                    $sql = "SELECT*FROM tb_barang";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) { ?>
                                        <option value="<?= $row['id_barang']; ?>">
                                            <?= $row['id_barang'] . "-" . $row['nama_barang']; ?>
                                        </option>
                                       <?php }; ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <input type="number" name="hargaBarang" class="form-control" id="harga-barang" readonly>

                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="satuanBarang" class="form-control" id="satuan-barang" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="number" min="1" name="jumlahBeli" class="form-control" id="jumlah-beli" disabled>
                            </div>
                            <div class="col-sm-3">
                                <input type="submit" name="submitTemp" class="form-control btn btn-success" id="submit-temp" value="Tambah" disabled>
                            </div>
                        </div>
                        <hr>
              
                    <!-- Tabel data -->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>ID Barang</th>
                                <th>Nama Barang</th>
                                <th>Satuan Barang</th>
                                <th>Harga Barang</th>
                                <th>Jumlah Beli</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $totalHarga = 0;
                            $grandTotal = 0;
                            $totalBeli = 0;
                            $sql = "SELECT*FROM tb_temp";


                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                //Akan dijalankan jika recordnya ada
                                while ($row = $result->fetch_assoc()) {
                                    $totalHarga = $row['harga_barang'] * $row['jumlah_beli'];
                            ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $row['id_barang']; ?></td>
                                        <td><?= $row['nama_barang']; ?></td>
                                        <td><?= $row['satuan_barang']; ?></td>
                                        <td><?= $row['harga_barang']; ?></td>
                                        <td><?= $row['jumlah_beli']; ?></td>
                                        <td><?= $totalHarga; ?></td>
                                        <td>
                                            <a onclick="return confirm('Anda yakin akan menghapus record ini?')" class="btn btn-danger" href="prosesDeleteTempTrans.php?id=<?= $row['id_barang'] ?>">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                            <?php
                                    $grandTotal = $grandTotal + $totalHarga;
                                    $totalBeli = $totalBeli + $row['jumlah_beli'];
                                }
                            } else {
                                //Akan dijalankan jika recordnya kosong
                                echo "<tr><td colspan='3'>Record masih kosong</td></tr>";
                            }
                            ?>
                        </tbody>
                        <tfoot class="bg-secondary text-light">
                            <tr>
                                <td colspan="5"></td>
                                <td><?= $totalBeli; ?></td>
                                <td>
                                    <input type="number" name="grandTotal" value="<?= $grandTotal; ?>" id="grand-total" readonly>
                                </td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="row">
                    <div class="col-12">
                                <input type="submit" name="submitTrans" class="form-control btn btn-primary" id="submit-trans" value="Simpan Transaksi" disabled>
                            </div>
                    </div>      
                </form>