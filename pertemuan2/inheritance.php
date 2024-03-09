<?php 
    class kendaraan
    {
        public $mesin;
        public $roda;

        public function menyalakan($kapasitasMesin){
            $this->mesin = $kapasitasMesin;
            echo $this->mesin." dinyalakan"; 
        }
    }

    class mobil extends kendaraan
    {
        public function berjalanMaju(){
            echo "mobil berjalan Maju";
        }
    }

    $sedan = new mobil();
    $sedan->menyalakan(1500);
?>