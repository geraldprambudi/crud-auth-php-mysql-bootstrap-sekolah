<?php include "layout/_header.php"; ?>
<?php include "layout/_navbar.php"; ?>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang</h1>
            <p class="lead">SD SMP SMA SMK Jonthor</p>
            <hr class="my-4">
            <p>Belajar Online ? Siapa takut. Jangan lupa belajar <i>Fundamental</i> ya!</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Daftar Yuk</a>
        </div>
    </div>
<?php include "layout/_footer.php"; ?>

