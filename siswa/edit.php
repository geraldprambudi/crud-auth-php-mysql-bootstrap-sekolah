<?php 
    include('../connection/config.php'); 

    if (!isset($_GET['id'])) {
        header('Location: list-siswa.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) < 1) {
        die('data tidak ditemukan...');
    }
?>

<?php include "layout_siswa/_header.php"; ?>
<?php include "layout_siswa/_navbar.php"; ?>

    <div class="container-fluid">
    <form action="proses-edit.php" method="post"> 
             <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $siswa['nama'] ?>"/>
                
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat"><?= $siswa['alamat']?></textarea>
            </div>
            <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin </label>
                <div class="form-check">
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="pria" <?= ($jk == 'pria') ? "checked":""  ?>>
                        <label class="form-check-label">
                            Pria
                        </label>
                </div>
                <div class="form-check">
                    
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" <?= ($jk == 'perempuan') ? "checked":""  ?>>
                        <label class="form-check-label">
                            Perempuan
                        </label>
                </div>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <?php $agama = $siswa['agama']; ?>
                <select class="form-control" id="agama" name="agama">
                    <option>pilih</option>
                    <option <?= ($agama == 'islam') ? "selected": "" ?>>islam</option>
                    <option <?= ($agama == 'kristen') ? "selected":""?>>kristen</option>
                    <option <?= ($agama == 'hindu') ? "selected":""?>>hindu</option>
                    <option <?= ($agama == 'buddha') ? "selected":""?>>buddha</option>
                </select>
            </div>
            <div class="form-group">
                <label>Sekolah Asal</label>
                <input type="text" class="form-control" name="sekolah_asal" placeholder="Sekolah Asal" value="<?=  $siswa['sekolah_asal'] ?>"/>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" name="simpan" class="btn btn-primary"/>
            </div><br />
        </form>
    </div>

<?php include "layout_siswa/_footer.php"; ?>

