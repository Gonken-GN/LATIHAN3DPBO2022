public class Pc{
    // Attribut untuk class Pc
    // Class-class yang telah dibuat dijadikan sebagai composition atau attribut class Pc
    private Ram RAM;
    private Cpu CPu;
    private Disk DISK;
    private int total_price;
    // Constructor
    Pc(){}
    //class dan attribute yang telah dibuat dijadikan sebagai parameter
    public Pc(Ram rAM, Cpu cPu, Disk dISK, int total_price) {
        RAM = rAM;
        CPu = cPu;
        DISK = dISK;
        this.total_price = total_price;
    }
    // Get dan Set
    public Ram getRAM() {
        return RAM;
    }
    public void setRAM(Ram rAM) {
        RAM = rAM;
    }
    public Cpu getCPu() {
        return CPu;
    }
    public void setCPu(Cpu cPu) {
        CPu = cPu;
    }
    public Disk getDISK() {
        return DISK;
    }
    public void setDISK(Disk dISK) {
        DISK = dISK;
    }
    public int getTotal_price() {
        return total_price;
    }
    public void setTotal_price(int total_price) {
        this.total_price = total_price;
    }
    // Fungsi untuk menampilkan isi dari attribute dan composite
    public void printPc(){
        System.out.println("Spesifikasi Komputer Mang Ujang: ");
        RAM.printRam();
        CPu.printCpu();
        DISK.printDisk();
        System.out.println("Total Price: " + this.total_price);
    }
}