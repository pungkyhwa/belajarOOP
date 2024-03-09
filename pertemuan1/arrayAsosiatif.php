<?php 
    $mahasiswa = [
        'nim' => '2222105227',
        'nama' => 'yusril',
        'kelas' => '2TI04',
        'jurusan' => 'Tekin Informatika',
        'fakultas' => 'Teknik'
    ];

    // echo $mahasiswa['nim']."<br>";
    // echo $mahasiswa['nama'];

    $mahasiswaBanyak = [
        [
            'nim' => '2222105227',
            'nama' => 'yusril',
            'kelas' => '2TI04',
            'jurusan' => 'Tekin Informatika',
            'fakultas' => 'Teknik'
        ],
        [
            'nim' => '2222105084',
            'nama' => 'Anis',
            'kelas' => '2TI04',
            'jurusan' => 'Tekin Informatika',
            'fakultas' => 'Teknik'
        ],
        [
            'nim' => '2222105070',
            'nama' => 'Aeir cenat cenut',
            'kelas' => '2TI04',
            'jurusan' => 'Tekin Informatika',
            'fakultas' => 'Teknik'
        ],
    ];

    foreach ($mahasiswaBanyak as $tampilin11){
        echo $tampilin11['nim']."<br>";
        echo $tampilin11['nama']."<br>";
        echo $tampilin11['kelas']."<br>";
        echo $tampilin11['fakultas']."<br>";
        echo $tampilin11['jurusan']."<br><br>";
    }
?>


