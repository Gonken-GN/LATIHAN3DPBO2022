<?php
#include class
include "Cpu.php";
include "Ram.php";
include "Disk.php";
include "Pc.php";
#proses memasukkan data kedalam class secara manual
$tforce = new Ram("16_GB", 1000000);
$intel = new Cpu("Intel Core I-5", 2000000);
$sumsang = new Disk("SSD", "556 GB", 1000000);
$ujang = new Pc($tforce, $intel, $sumsang, ($tforce->getHarga() + $intel->getHarga() + $sumsang->getHarga()));
$ujang->printPc();

?>