<?php
class Cpu{
    #attribute untuk class CPU
    private $nama;
    private $harga;
    function __construct($nama, $harga){
        $this->nama = $nama;
        $this->harga = $harga;

    }
    # Get dan Set untuk semua attribute Private
    function setNama($nama){
        $this->nama = $nama;
    }
    function getNama(){
        return $this->nama;
    }
    function setHarga($harga){
        $this->harga = $harga;
    }
    function getHarga(){
        return $this->harga;
    }
    #Fungsi untuk menampilkan isi dari attribute private di class CPU
    function printCpu(){
        echo "CPU Name: " .$this->nama."<br>";
        echo "CPU Price: " .$this->harga."<br>";
    }
    function __destruct()
    {
        
    }
}
?>