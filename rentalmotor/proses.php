<?php

class RentalMotor {
    protected $Diskon, $Pajak;
    private $Astea, $Aerox, $Win100, $Scoopy;
    public $Nama, $Waktu, $Jenis;

    function __construct() {
        $this->Diskon = 0.05;
        $this->Pajak = 10000;
    }

    public function setHarga($motor1, $motor2, $motor3, $motor4) {
        $this->Astrea = $motor1;
        $this->Aerox = $motor2;
        $this->Win100 = $motor3;
        $this->Scoopy = $motor4;
    }

    public function getHarga() {
        $motor['Astrea'] = $this->Astrea;
        $motor['Aerox'] = $this->Aerox;
        $motor['Win100'] = $this->Win100;
        $motor['Scoopy'] = $this->Scoopy;
        return $motor;
    }
}

class Rental extends RentalMotor {
    private $member=['dimas','alif','raja','arya'];

    public function HargaRental() {
        $DataRental = $this->getHarga();
        $HargaRental = $this->Waktu * $DataRental[$this->Jenis];
        $HargaPajak = $HargaRental + $this->Pajak;
        if (in_array($this->Nama,$this->member)){
        $HargaBayar = $HargaPajak - ($HargaPajak * $this->Diskon);
        } else {
            $HargaBayar = $HargaPajak;
        }
        return $HargaBayar;
    }

    public function CetakRental() {

        echo "<center>";
        if (in_array($this->Nama,$this->member)){
        echo " $this->Nama Berstatus sebagai Member mendapatkan diskon sebesar 5%<br>";
    }else {
        echo " $this->Nama Berstatus bukan member tidak mendapatkan diskon member <br>";
    }
        echo "Jenis motor yang dirental adalah " . $this->Jenis . " selama " . $this->Waktu . " Hari<br>";
        echo "Harga Rental perharinya: Rp." . $this->getHarga()[$this->Jenis] . "<br>";
        echo "Besar yang harus dibayar adalah Rp." . $this -> HargaRental();
    }
}
?>



<!-- in_array fungsi nya untuk memeriksa suatu nilai yang ada di dalam array
jika nama tersebut ada didalam array maka akan menghasilkan true 
jika tidak ada maka menghasilkan false -->
