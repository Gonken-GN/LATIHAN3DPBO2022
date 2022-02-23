public class Disk{
    // Attribut untuk class Disk
    private String kapasitas;
    private int harga;
    private String tipe;
    // Constructor
    public Disk(String kapasitas, int harga, String tipe) {
        this.kapasitas = kapasitas;
        this.harga = harga;
        this.tipe = tipe;
    }
    // Constructor kosong
    Disk(){}
    // Get dan Set
    public String getKapasitas() {
        return kapasitas;
    }
    public void setKapasitas(String kapasitas) {
        this.kapasitas = kapasitas;
    }
    public int getHarga() {
        return harga;
    }
    public void setHarga(int harga) {
        this.harga = harga;
    }
    public String getTipe() {
        return tipe;
    }
    public void setTipe(String tipe) {
        this.tipe = tipe;
    }
    // Fungsi untuk menampilkan isi dari attribute class Disk
    public void printDisk(){
        System.out.println("Disk Type: " + this.tipe);
        System.out.println("Disk Capacity: " + this.kapasitas);
        System.out.println("Disk Price: " + this.harga);
    }
}