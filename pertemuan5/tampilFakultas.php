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
    ?>

    <div class="card col-6 ms-2 mt-2 ">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <p class="text-start">Tampil Data Fakultas</p>
                </div>
                <div class="col-6">
                    <p class="text-end"><a href="tambahFakultas.php" class="btn btn-success">tambah Fakultas</a></p>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>no</th>
                    <th>kode fakultas</th>
                    <th>nama fakultas</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                    $query = "select * from fakultas";
                    $no = 1;
                    foreach ($db->tampilData($query) as $row) {
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['kd_fekultas']; ?></td>
                    <td><?php echo $row['nm_fakultas']; ?></td>
                    <td>
                        <a href="editFakultas.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Edit</a>
                        <a href="hapusFakultas.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php 
                    $no++; }
                ?>
            </table>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>