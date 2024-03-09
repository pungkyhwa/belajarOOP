<?php 
    class koneksi
    {
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $database = "2ti04";
        public $koneksi = "";

        function __construct(){
            $this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
            if (mysqli_connect_errno()){
                echo "Koneksi database gagal : ".mysqli_connect_error();
            }
        }    
        public function tampilData($query){
            $data = mysqli_query($this->koneksi,$query);
            while($row = mysqli_fetch_assoc($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }     

    }
    $db = new koneksi;
    $query = "select * from fakultas";
    $hasil = $db->tampilData($query);
    var_dump($hasil);
?>