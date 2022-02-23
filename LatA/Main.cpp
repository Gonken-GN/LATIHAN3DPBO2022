#include <iostream>
#include <string>
using namespace std;
// Memanggil kelas pc
#include "pc.cpp"
int main (){
    // Proses memasukkan data untuk setiap class
    ram tforce("1 TB", 1000000);
    cpu intel("Intel", 2000000);
    disk sumsang("SSD", "556 GB", 1000000);
    // Class yang telah dibuat sebelumnya dimasukkan menjadi data untuk class pc
    pc mangUjang(tforce, intel, sumsang, (tforce.getPrice() + intel.getHarga() + sumsang.getHarga()));
    
    mangUjang.printPC();
    return 0;
}