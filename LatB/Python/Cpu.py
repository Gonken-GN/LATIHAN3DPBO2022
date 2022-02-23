class Cpu():
    # Constructor untuk class Cpu
    def __init__(self):
        # Attribute-attribute untuk class Cpu
        self.nama = ""
        self.harga = 0
    # Get dan Set tiap attribute
    def setNama(self, nama):
        self.nama = nama
    def getNama(self):
        return self.nama
    def setHarga(self, harga):
        self.harga = harga
    def getHarga(self):
        return self.harga
    # Fungsi untuk menampilkan isi attribute dari class Cpu
    def printCpu(self):
        print("CPU Name: " + str(self.nama))
        print("CPU Price: " + str(self.harga))