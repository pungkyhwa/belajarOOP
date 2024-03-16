<?php 
    include "koneksi.php";
    $db = new koneksi;
    $id = $_GET['id'];
    $db->hapusFakultas($id);
    header("location: tampilFakultas.php", true, 301);
?>