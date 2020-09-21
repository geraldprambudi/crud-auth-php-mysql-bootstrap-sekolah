<?php include "layout_siswa/_header.php"; ?>
<?php include "layout_siswa/_navbar.php"; ?>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "<div class='alert alert-primary alert-dismissible'>Pendaftaran siswa baru berhasil!</div>";
            } else {
                echo "<div class='alert alert-primary alert-dismissible'>Pendaftaran gagal!!</div>";
            }
        ?>
    </p>
<?php endif; ?>
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h3>Siswa Yang Sudah Mendaftar</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Pendaftar</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Sekolah Asal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                            $sql    = "SELECT * FROM calon_siswa";
                            $query  = mysqli_query($db, $sql);
                            
                            // Jika data tidak ada tampilkan tulisan tidak ada data
                            if (mysqli_num_rows($query) == 0) 
                            { 
                                echo "<tr class='table-danger'><td colspan='7'>Tidak Ada Data</td></tr>";
                            } 
                            
                            else 
                                {
                                
                                    $no = 1;
                                    while($siswa = mysqli_fetch_array($query)) 
                                    {
                        ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $siswa['id']; ?></td>
                                            <td><?= $siswa['nama']; ?></td>
                                            <td><?= $siswa['alamat']; ?></td>
                                            <td><?= $siswa['jenis_kelamin']; ?></td>
                                            <td><?= $siswa['agama']; ?></td>
                                            <td><?= $siswa['sekolah_asal']; ?></td>
                                            <td>
                                                <!-- edit -->
                                                <?= 
                                                    "<a class='btn btn-warning' href='edit.php?id=".$siswa['id']."'>Edit</a>";
                                                ?>
                                                <!-- hapus -->
                                                <?= 
                                                    "<a class='btn btn-danger' href='delete.php?id=".$siswa['id']."'>Hapus</a>";
                                                ?>
                                                
                                            </td>
                                        </tr>
                        <?php 
                                        $no++;
                                    }
                                }
                        ?>

                    </tbody>
                </table>
            </div>
            <p class="p-3 bg-success text-white">Total Yang Sudah Mendaftar: <?php echo mysqli_num_rows($query) ?></p>
        </div>
    </div>
<?php include "layout_siswa/_footer.php"; ?>
