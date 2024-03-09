<?php
    class perhitungan{
        public $phi = 3.14;

        function __construct()
        {
            echo "ini adalah class perhitungan";
        }

        // method
        public function kerucut ($jariJari,$garisPelukis){
            $luas = $this->phi * $jariJari * ($jariJari + $garisPelukis);
            echo "luas kerucut = ".$luas;
        }
        
        public function kubus ($sisi){
            $luas = 6 * $sisi;
            echo "luas kubus = ".$luas;
        }
        public function balok ($panjang, $luas, $tinggi){
            $luas = 2 * (($panjang * $luas) + ($luas * $tinggi) + ($panjang * $tinggi));
            echo "luas balok = ".$luas;
        }
        
    }

    // object
    $hasil = new perhitungan ();
    echo "<br>";
    $hasil->kerucut(6,19);
    echo "<br>";
    $hasil->kubus(6);
    echo "<br>";
    $hasil->kubus(6,3,4);
?>