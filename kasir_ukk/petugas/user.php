<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h4 class="card-title">Daftar Pengguna</h4>
            <h4 class="card-title">Daftar User</h4>
            <?php
            if ($_SESSION['Level'] == "Administrator") {
                ?>
                <a href="?page=tambah-user" class="btn btn-primary btn-sm">Tambah User+</a>
                <?php
            }?>
            <p class="card-description">
        </p>

        <div class="table-responsive">
            <table class="table" id="database" widht="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <?php if ($_SESSION['Level'] == "Administrator" ) {?>
                            <th>Opsi</th>
                            <?php } ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        $sql = $koneksi->query("SELECT * FROM user");
                        while ($data= $sql->fetch_assoc()){
                            
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['Username']?></td>
                            <td><?php echo $data['Password']?></td>
                            <td><?php echo $data['Level']?></td>
                            <?php if($_SESSION['Level'] == "Administrator" ) {?>
                            <td ailgn="center" widht="12%"><a href="?page=edit-user&UserID=<?= $data['UserID']; ?>" class="badge badge-primary p-2" title="Edit"><i>edit</i></a> | <a href="?page=hapus-user&UserID=<?= $data['UserID']; ?>" onclick="return confirm('Hapus User?')" class="badge badge-danger p-2 delete-data" title='Delete'><i>hapus</i></a> </td>
                            <?php }?>
                            </tr>
                            <?php } ?>

                            </tbody>
                            </table>
                            </div>
                            
                            </div>
                            </div>
                            </div>
                            </div>
