<?php include "layout_siswa/_header.php"; ?>
<?php include "layout_siswa/_navbar.php"; ?>
<?php //include '../connection/config.php'; ?>


    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </div>
        <form action="proses_pendaftaran.php" method="post"> 
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap"></textarea>
            </div>
            <div class="form-group">
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="pria" checked>
                        <label class="form-check-label">
                            Pria
                        </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
                    <label class="form-check-label">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <select class="form-control" id="agama" name="agama">
                    <option>Pilih</option>
                    <option>islam</option>
                    <option>kristen</option>
                    <option>hindu</option>
                    <option>buddha</option>
                </select>
            </div>
            <div class="form-group">
                <label>Sekolah Asal</label>
                <input type="text" class="form-control" name="sekolah_asal" placeholder="Sekolah Asal">
            </div>
            <div class="form-group">
                <input type="submit" value="Daftar" name="daftar" class="btn btn-primary"/>
            </div><br />
        </form>
    </div>
<?php include "layout_siswa/_footer.php"; ?>
