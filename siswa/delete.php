<?php
    include('../connection/config.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM calon_siswa WHERE id=$id";
        $query = mysqli_query($db, $sql);
        
        if ($query) {
            header('location: list-siswa.php');
        } else {
            header('location: list-siswa.php');
        }
   } else {
       die('akses dilarang...');
   }
?>
