# belajar-crud-laravel-dasar
 Belajar Crud laravel dasar
 Dokumen laravel :
 https://laravel.com/ laravel yang digunakan <br>
 <p>
    Pastikan komputer telah terinstall composer <br> 
    versi php min 8 untuk laravel 10 <br>
    versi php min 7.5 untuk laravel 8 <br>

 </p>

# Pehami MVC
<b>Model </b> : Bagian yang bertugas untuk menyiapkan, mengatur, memanipulasi, dan mengorganisasikan data yang ada di database. <br>
<b>View </b> : Bagian yang bertugas untuk menampilkan informasi dalam bentuk Graphical User Interface (GUI).<br>
<b>Controller </b> :Bagian yang bertugas untuk menghubungkan serta mengatur model dan view agar dapat saling terhubung. <br>

# Pembuatan Projek
<h3>Persiapan Database</h3>
nama database : crud_laravel <br>
nama tabel : tb_barang <br/>

<b>Struktur Tabel</b><br/>
id_barang : int 11 auto increment primary key<br/>
nama_barang : varchar 100<br/>
jumlah_stok : int 11<br/>
harga_barang : int 11<br/>
jenis_barnag : varchar 100 atau enum('minuman', 'makanan')<br/>

<h3>Alur pembuatan projek MVC</h3>
Siapkan Controller dan Model <br>
php artisan make:controller BarangController --resource --mode=Barang <br>
akan ada file baru di controller dan model

<h3>Sambungkan ke database</h3>
setting file .env untuk menyambungkan ke database <br>
https://laravel.com/docs/10.x/database


<h3>Read / menampikan</h3>
<ol>
    <li>setting route arahkan controller pada funtion index</li>
    <li>setting controller pada funtion index lalu tambahkan view yang diinginkan</li>
    <li>Buat view</li>
</ol>

<h3>Create / Tambah</h3>
<p><b>Menampilkan halaman form tambah</b></p>
<ol>
    <li>setting route arahkan controller pada funtion create</li>
    <li>setting controller pada funtion index lalu tambahkan view yang diinginkan</li>
    <li>Buat view</li>
</ol>
<p><b>Fungsi tambah ke database</b></p>
<ol>
    <li>setting route arahkan controller pada funtion store</li>
    <li>setting controller pada funtion index lalu tambahkan fungsi tambah sesuai dengan kolom yang sudah di setting</li>
</ol>
<h3>Update / Ubah</h3>
<h3>Delete / Hapus</h3>



