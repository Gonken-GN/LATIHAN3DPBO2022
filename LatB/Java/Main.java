public class Main{
    public static void main(String [] args){
        //Memanggil dan memasukkan data untuk tiap class
        Ram tforce = new Ram("16_GB", 1000000);
        Cpu intel = new Cpu("AMD Ryzen 6 3600", 2000000);
        Disk sumsang = new Disk("556 GB", 1000000, "SSD");
        // Class yang telah dibuat dimasukkan kedalam class Pc dan Harga tiap class dijumlahkan
        Pc ujang = new Pc(tforce, intel, sumsang, (tforce.getHarga() + intel.getHarga() + sumsang.getHarga()));
        ujang.printPc();
    }
}