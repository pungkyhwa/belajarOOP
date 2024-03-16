<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="" name="tambah" method="post">
                <div class="col-6"><label for=""> kode fakultas</label></div>
                <div class="col-6"> <input type="text" name="kd_fakultas" id=""></div>
                
                <div class="col-6"><label for="">nama fakultas</label></div>
                <div class="col-6"><input type="text" name="nm_fakultas" id=""></div>
                
                <div class="col-6 mt-2"><input type="submit" name="simpan" value="simpan"> <input type="reset" value="hapus"></div>                
            </form>
            
        </div>
    </div>
   
    <?php
        include "koneksi.php";
        $db = new koneksi;
        if(isset($_POST['simpan'])){
            $kodeFakultas = $_POST['kd_fakultas'];
            $namaFakultas = $_POST['nm_fakultas'];
            $db->tambahFakultas($kodeFakultas,$namaFakultas);
            header("location: tampilFakultas.php", true, 301);
        }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>