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
        public function tambahFakultas($kodeFakultas,$namaFakultas){
            mysqli_query($this->koneksi, "INSERT INTO fakultas (kd_fekultas, nm_fakultas) VALUES ('$kodeFakultas','$namaFakultas')");
        }
        public function editFakultas($kodeFakultas,$namaFakultas,$id){
            mysqli_query($this->koneksi, "UPDATE fakultas SET kd_fekultas='$kodeFakultas', nm_fakultas='$namaFakultas' WHERE id='$id' ");
        }
        public function hapusFakultas($id){            
            mysqli_query($this->koneksi, "DELETE FROM fakultas WHERE id = '$id'");
        }
    }
    // $db = new koneksi;
    // $query = "select * from fakultas";
    // $hasil = $db->tampilData($query);
    // var_dump($hasil);
?>