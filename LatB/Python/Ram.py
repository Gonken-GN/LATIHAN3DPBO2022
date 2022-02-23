class Ram():
    # Constructor
    def __init__(self):
        # Attribute-attribute
        self.kapasitas = ""
        self.harga = 0
    # Get dan Set
    def setKapasitas(self, kapasitas):
        self.kapasitas = kapasitas
    def getKapasitas(self):
        return self.kapasitas
    def setHarga(self, harga):
        self.harga = harga
    def getHarga(self):
        return self.harga
    # Fungsi untuk menampilkan isi dari attribute
    def printRam(self):
        print("RAM Capacity: " + str(self.kapasitas))
        print("RAM Price: " + str(self.harga))