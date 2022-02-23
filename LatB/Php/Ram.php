<?php
class Ram{
    # Attribute untuk class Ram
    private $kapasitas;
    private $harga;
    # Constructor dengan parameter dari attribute private
    function __construct($kapasitas, $harga)
    {
        $this->kapasitas = $kapasitas;
        $this->harga = $harga;
    }
    # Get dan Set semua attribute private
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
    # Fungsi untuk menampilkan isi dari attribute private
    function printRam(){
        echo "RAM Capacity: " .$this->kapasitas."<br>";
        echo "RAM Price: " .$this->harga."<br>";
    }
    # Destructor
    function __destruct()
    {
        
    }
}
?>