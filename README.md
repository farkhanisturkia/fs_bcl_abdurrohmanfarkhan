# About Role and Login

Terdapat 3 Role yaitu :
- kantor
- lapangan
- client

Gunakan php artisan migrate:fresh --seed untuk menggunakan akun user 3 role ini :
- kantor 
-- Email : zalfa@gmail.com
-- pass  : password

- lapangan 
-- Email : farkhan@gmail.com
-- pass  : password

- client
-- Email : valent@gmail.com
-- pass  : password

# About Fitur

## kantor 

### Dashboard
### Data Pengiriman
--- Melihat [pengirim, Nomor pengiriman, Tanggal pengiriman, Lokasi asal pengiriman, Lokasi tujuan pengiriman, Status pengiriman (tertunda, dalam perjalanan, telah tiba), Detail barang yang dikirim]
--- Data Pengirim akan di inputkan Auto berdasarkan user yang login dengan role lapangan dan melakukan pengisian data pengiriman
### Data Armada
--- Melihat / Menambahkan / Mengedit / Menghapus [Nomor armada, Jenis Armada, Ketersediaan Armada (Tersedia, Tidak tersedia), Kapasitas Armada]
--- Data ketersediaan dari suatu armada akan Auto berubah menjadi Tidak tersedia ketika user dengan role client melakukan login dan memesan dengan jenis armada tersebut
### Data Pemesanan
--- Melihat [pemesan, Jenis Armada, Tanggal pemesanan, Detail barang yang dikirim]
--- Data pemesan akan di inputkan Auto berdasarkan user yang login dengan role client dan melakukan pemesanan

## lapangan 

-- Data Pengiriman : Melihat / Menambahkan / Mengedit / Menghapus [Nomor pengiriman, Tanggal pengiriman, Lokasi asal pengiriman, Lokasi tujuan pengiriman, Status pengiriman (tertunda, dalam perjalanan, telah tiba), Detail barang yang dikirim]
-- pass  : password

- client
-- Email : valent@gmail.com
-- pass  : password