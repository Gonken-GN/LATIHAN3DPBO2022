#include <iostream>
#include <string>
using namespace std;
class ram{
    // Attribute
    private:
        string kapasitas;
        int price;
    public:
    //Constructor kosong
    ram(){
    }
    // Constructor
    ram(string capacity, int harga){
        this->kapasitas = capacity;
        this->price = harga;
    }
    // Get dan Set
    void setKapasitas(string capacity){
        this->kapasitas = capacity;
    }
    string getKapasitas(){
        return this->kapasitas;
    }
    void setPrice(int harga){
        this->price = harga;
    }
    int getPrice(){
        return this->price;
    }
    // Fungsi untuk menampilkan isi dari tiap attribute
    void printRam(){
        cout << "RAM Capacity: " << this->kapasitas << endl;
        cout << "RAM Price: " << this->price << endl;
    }
    // Destructor
    ~ram(){}
};