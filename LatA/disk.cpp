#include <iostream>
#include <string>
using namespace std;
class disk{
    // Attribute
    private:
        string tipe;
        string kapasitas;
        int harga;
    public:
        // Constructor kosong
        disk(){}
        // Constructor
        disk(string type, string capacity, int price){
            this->tipe = type;
            this->kapasitas = capacity;
            this->harga = price;
        }
        // Get dan Set
        void setTipe(string type){
            this->tipe = type;
        }
        string getTipe(){
            return this->tipe;
        }
        void setKapasitas(int capacity){
            this->kapasitas = capacity;
        }
        string getKapasitas(){
            return this->kapasitas;
        }
        void setHarga(int price){
            this->harga = price;
        }
        int getHarga(){
            return this->harga;
        }
        // Fungsi untuk menampilkan isi dari attribute
        void printDisk(){
            cout << "Disk Type: " << this->tipe << endl;
            cout << "Disk Capacity: " << this->kapasitas << endl;
            cout << "Disk Price: " << this->harga << endl;
        }
        // Destructor
        ~disk(){}
};