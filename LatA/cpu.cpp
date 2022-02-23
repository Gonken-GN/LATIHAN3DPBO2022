#include <iostream>
#include <string>
using namespace std;
class cpu{
    // Attribute
    private:
        string nama;
        int harga;
    public:
        //Constructor kosong
        cpu(){}
        // Constructor
        cpu(string name, int price){
            this->nama = name;
            this->harga = price;
        }
        // get dan Set
        void setNama(string name){
            this->nama = name;
        }
        string getNama(){
            return this->nama;
        }
        void setHarga(int price){
            this->harga = price;
        }
        int getHarga(){
            return this->harga;
        }
        // Fungsi untuk menampilkan isi attribute cpu
        void printCpu(){
            cout << "CPU Name: " << this->nama << endl;
            cout << "CPU Price: " << this->harga << endl;
        }
        // Destructor
        ~cpu(){}
};