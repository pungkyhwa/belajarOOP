<?php 
// array 1 dimensi
$array1 = array();
$array2 = [];

$makanan = ['nasi goreng kambing', 'sate kambing', 'sate goreng kambing', 'sate buntel kambing', 'tengkleng kambing'];

// menghitung jumlah array
// echo count($makanan);

//dimulai dari index ke-0 
// echo $makanan[0];

// looping untuk menampilkan array 
$i = 0;
while ($i < count($makanan)) {
    echo $makanan[$i]."<br>";
    $i++;
}


foreach ($makanan as $row) {
    echo $row."<br>";
}

?>