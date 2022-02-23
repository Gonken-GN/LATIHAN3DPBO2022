class Disk():
    # Constructor
    def __init__(self):
        # Attribute-attribute untuk class Disk
        self.tipe = ""
        self.kapasitas = ""
        self.harga = 0
    # Get dan Set Attribute
    def setTipe(self, tipe):
        self.tipe = tipe
    def getTipe(self):
        return self.tipe
    def setKapasitas(self, kapasitas):
        self.kapasitas = kapasitas
    def getKapasitas(self):
        return self.kapasitas
    def setHarga(self, harga):
        self.harga=  harga
    def getHarga(self):
        return self.harga
    # Fungsi untuk menampilkan isi dari setiap attribute
    def printDisk(self):
        print("Disk Type: " + str(self.tipe))
        print("Disk Capacity: " + str(self.kapasitas))
        print("Disk Price: " + str(self.harga))