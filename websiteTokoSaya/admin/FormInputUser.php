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
                            <?php
                                //Jika $_GET['q'] ada isinya
                                if(isset($_GET['q'])){
                                    //yang dijalankan jika ada isinya
                                    $q = $_GET['q'];
                                    $sql = "SELECT*FROM tb_users WHERE nama_user LIKE '%$q%'";
                                }else{
                                    //Jika $_GET['q'] tidak ada isinya
                                    $sql = "SELECT*FROM tb_users";
                                }
                            
                                $result = $conn->query($sql);
                                
                                if($result->num_rows > 0){
                                    //Akan dijalankan jika recordnya ada
                                    while($row = $result->fetch_assoc()){ ?>
                                       <tr>
                                           <td><?=$row['id_user']?></td>
                                           <td><?=$row['nama_user']?></td>
                                           <td><?=$row['email_user']?></td>
                                           <td>
                                                <a onclick="return confirm('Anda yakin akan menghapus record ini?')" class="btn btn-danger" href="prosesDeleteUser.php?id=<?=$row['id_user']?>">
                                                    Delete
                                                </a>
                                                <a class="btn btn-primary" href="" onclick="showUserUpdateForm('<?=$row['id_user']?>', '<?=$row['nama_user']?>', '<?=$row['email_user']?>')" data-toggle="modal" data-target="#exampleModal">
                                                    Update
                                                </a>
                                           </td>
                                       </tr>
                                <?php
                                    }
                                }else{
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
