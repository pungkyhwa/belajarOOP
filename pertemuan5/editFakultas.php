<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    <?php 
        include "koneksi.php";
        $db = new koneksi;
        $id = $_GET['id'];
        $query = "select * from fakultas where id = '$id'";
        $no = 1;
        foreach ($db->tampilData($query) as $row) {    
    ?>
    <form action="" name="edit" method="post">
        <div class="card col-6 mt-2 ms-2">
            <div class="card-header">
                Edit Data Fakultas
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Kode Fakultas</label>
                    <input type="text" name="kd_fakultas" class="form-control" value="<?php echo $row['kd_fekultas']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Fakultas</label>
                    <input type="text" name="nm_fakultas" class="form-control" value="<?php echo $row['nm_fakultas']; ?>">
                </div>
                <div class="mb-3">
                    <input type="submit" name="simpan" value="simpan" class="btn btn-info">
                    <input type="reset" name="hapus" value="hapus" class="btn btn-secondary">
                </div>
            </div>
        </div>
    </form>
    <?php } 
          if(isset($_POST['simpan'])){
            $kodeFakultas = $_POST['kd_fakultas'];
            $namaFakultas = $_POST['nm_fakultas'];
            $db->editFakultas($kodeFakultas,$namaFakultas,$id);
            header("location: tampilFakultas.php", true, 301);
        }
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>