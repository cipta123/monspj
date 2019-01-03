
<?php  
$namaServer = "127.0.0.1"; // via TCP/IP
$namaUser = "root";
$password = "";
$nama_db = "mon_spj";
// membuat koneksi
$conn = mysqli_connect($namaServer, $namaUser, $password, $nama_db );

// Check koneksi
if (!$conn) {
     die("Koneksi Error: " . mysqli_connect_error());
}
//echo "Berhasil koneksi";
