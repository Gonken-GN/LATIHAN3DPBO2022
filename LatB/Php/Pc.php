<?php
class Pc{
    #attribut dari class yang telah dibuat dan total harga (dimana total harga didapat dari penjumlahan harga dari semua class)
    private $CPU;
    private $RAM;
    private $DISK;
    private $total_price;
    #constructor dimana class composition akan dipanggil 
    function __construct(Ram $RAM, Cpu $CPU, Disk $DISK, $total_price)
    {
        $this->total_price = $total_price;
        $this->RAM = $RAM;
        $this->CPU = $CPU;
        $this->DISK = $DISK;
    }
    #Get dan Set untuk setiap attribute private
    function setCpu(Cpu $CPU){
        $this->CPU = $CPU;
    }
    function getCpu(){
        return $this->CPU;
    }
    function setRam(Ram $RAM){
        $this->RAM = $RAM;
    }
    function getRam(){
        return $this->RAM;
    }
    function setDisk(Disk $DISK){
        $this->DISK = $DISK;
    }
    function getDisk(){
        return $this->DISK;
    }
    function setTotal_price($total_price){
        $this->total_price = $total_price;
    }
    function getTotal_price(){
        return $this->total_price;
    }
    #fungsi untuk menampilkan isi dari semua class/attribute private
    function printPc(){
        echo "Spesifikasi PC Mang Ujang" ."<br>";
        $this->CPU->printCpu();
        $this->RAM->printRam();
        $this->DISK->printDisk();
        echo "Total Price: " .$this->total_price."<br>";
    }
    function __destruct()
    {
        
    }
}
?>