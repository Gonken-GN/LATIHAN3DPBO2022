# Proses memanggil semua class yang telah dari dibuat (Mengimpor class)
from Ram import Ram
from Cpu import Cpu
from Disk import Disk
from Pc import Pc
# Proses memasukkan data untuk class Ram
tforce = Ram()
tforce.setKapasitas("16 GB")
tforce.setHarga(1000000)
# Proses memasukkan data untuk class Cpu
intel = Cpu()
intel.setNama("Intel Core I-5")
intel.setHarga(2000000)
# Proses memasukkan data untuk class Disk
sumsang = Disk()
sumsang.setTipe("SSD")
sumsang.setKapasitas("556 GB")
sumsang.setHarga(1000000)
# Proses memasukkan data untuk class Pc
# Data untuk class Pc didapat dari class-class yang telah dibuat sebelumnya
ujang = Pc()
ujang.setRam(tforce)
ujang.setCpu(intel)
ujang.setDisk(sumsang)
ujang.setTotal_price()
ujang.printPc()
