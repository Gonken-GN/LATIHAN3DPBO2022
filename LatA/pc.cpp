#include <iostream>
#include <string>
using namespace std;
// class yang akan dijadikan composite
#include "ram.cpp"
#include "disk.cpp"
#include "cpu.cpp"
class pc{
    // Attribute
    private:
        ram RAM;
        cpu CPU;
        disk DISK;
        int total_price;
    public:
        // Constructor kosong
        pc(){}
        // Constructor
        pc(ram a, cpu b, disk c, int total){
            this->RAM = a;
            this->CPU = b;
            this->DISK = c;
            this->total_price = total;
        }

        // Setter
        void setRam(ram a){ this->RAM = a; }
        void setCpu(cpu b){ this->CPU = b; }
        void setDisk(disk c){ this->DISK = c;}
        void setTotal(int total){ this->total_price = total;}
        // Getter
        ram getRam(){ return this->RAM; }
        cpu getCpu(){ return this->CPU; }
        disk getDisk(){ return this->DISK; }
        int getTotal(){ return this->total_price;}
        void printPC(){
            this->RAM.printRam();
            this->CPU.printCpu();
            this->DISK.printDisk();
            cout << "Total Price: " << this->total_price << endl;
        }
        ~pc(){}
};