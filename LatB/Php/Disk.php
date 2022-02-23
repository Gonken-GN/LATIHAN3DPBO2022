<?php
class Disk{
    # attribute untuk class Disk
    private $tipe;
    private $kapasitas;
    private $harga;
    # Constructor untuk class Disk
    function __construct($tipe, $kapasitas, $harga)
    {
        $this->tipe = $tipe;
        $this->kapasitas = $kapasitas;
        $this->harga = $harga;
    }
    # Get dan Set setiap attribute private
    function setTipe($tipe){
        $this->tipe = $tipe;
    }
    function getTipe(){
        return $this->tipe;
    }
    function setKapasitas($kapasitas){
        $this->kapasitas = $kapasitas;
    }
    function getKapasitas(){
        return $this->kapasitas;
    }
    function setHarga($harga){
        $this->harga = $harga;
    }
    function getHarga(){
        return $this->harga;
    }
    # Fungsi untuk menampilkan isi dari semua attribute private di Disk
    function printDisk(){
        echo "Disk Type: " .$this->tipe."<br>";
        echo "Disk Capacity: " .$this->kapasitas."<br>";
        echo "Disk Price: " .$this->harga."<br>";
    }
    function __destruct()
    {
        
    }
}
?>