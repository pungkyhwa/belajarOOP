<?php 
    class Motor
    {
        // property
        public $kenalpot = 1;
        public $sepion = 2;
        public $velg = 'palang';
        public $ban = 'batlax';

        // method
        public function Jalan()
        {   
            echo "motor sudah berjalan yang memiliki kenalpon sebanyak ".$this->kenalpot."<br>";
            
        }

        public function Mogok()
        {
            echo "motor Mogok CEk bensin <br>";
        }
        public function Rem()
        {
            echo "Motor Berhenti nitch <br>";
        }
    }

    class Mobil
    {
        // property
        public $kenalpot;
        public $sepion;
        public $velg;
        public $ban;

        // method
        public function Jalan()
        {
            echo "Mobil sudah berjalan <br>";
        }

        public function Mogok()
        {
            echo "Mobil Mogok CEk bensin <br>";
        }
        public function Rem()
        {
            echo "Mobil Berhenti nitch <br>";
        }
    }
    
    // instansiasi => object
    // $rxking = new Motor();
    // $rxking->Jalan();
    // $rxking->Rem();
    // $rxking->Mogok();

    $vario = new Motor();
    $vario->kenalpot = 10;
    $vario->Jalan();

    $toyota = new Mobil();
    $toyota->Jalan();
?>