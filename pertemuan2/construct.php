<?php
    class kendaraan{
        public $mesin = 1500;
        public $jml_roda;

        function __construct()
        {
            echo "ini adalah method konstrak";
        }

        // method
        public function nyalakanMesin ($harga){
            echo "mesin menyala menggunakan ".$this->mesin;
            echo "<br>dengan harga ".$harga;
        }
    }

    // object
    $politron = new kendaraan();
    echo "<br>";
    $politron->mesin = 'listrik';
    $politron->nyalakanMesin(5000);
?>