public class Ram{
    // attribute class Ram
    private String kapasitas;
    private int harga;
    // Constructor
    public Ram(){}
    public Ram(String kapasitas, int harga) {
        this.kapasitas = kapasitas;
        this.harga = harga;
    }
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
    // Fungsi untuk menampilkan isi dari attribute class Ram
    public void printRam(){
        System.out.println("Kapasitas Ram: " + this.kapasitas);
        System.out.println("Harga Ram: " + this.harga);
    }   
}