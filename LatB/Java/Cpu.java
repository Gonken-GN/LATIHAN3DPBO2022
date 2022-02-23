public class Cpu{
    // Attribute class Cpu
    private String nama;
    private int harga;
    // Constructor kosong
    Cpu(){}
    // Constructor
    Cpu(String nama, int harga){
        this.nama = nama;
        this.harga = harga;
    }
    // Get dan Set
    public String getNama() {
        return nama;
    }
    public void setNama(String nama) {
        this.nama = nama;
    }
    public int getHarga() {
        return harga;
    }
    public void setHarga(int harga) {
        this.harga = harga;
    }
    // Fungsi untuk menampilkan isi dari attribute
    public void printCpu(){
        System.out.println("CPU Name: " + this.nama);
        System.out.println("CPU Price: " + this.harga);
    }
}