<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "lowongan_kerja";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$nama = $_POST['nama'];
$nama_panggilan = $_POST['nama_panggilan'];
$nomor_hp = $_POST['nomor_hp'];
$alamat = $_POST['alamat'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$pengalaman = $_POST['pengalaman'];
$universitas = $_POST['universitas'];
$jurusan = $_POST['jurusan'];
$departemen = $_POST['departemen'];

// Proses direktori uploads
$target_dir = "uploads/";
if(!is_dir($target_dir)){
   mkdir($target_dir);
}

// Proses file CV
$target_file = $target_dir . basename($_FILES["cv"]["name"]);
move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file);

// Masukkan data ke dalam database
$sql = "INSERT INTO pelamar (nama, nama_panggilan, nomor_hp, alamat, pendidikan_terakhir, pengalaman, universitas, jurusan, departemen, cv) 
        VALUES ('$nama', '$nama_panggilan', '$nomor_hp', '$alamat', '$pendidikan_terakhir', '$pengalaman', '$universitas', '$jurusan', '$departemen', '$target_file')";
if (mysqli_query($conn, $sql)) {
  echo "Pendaftaran berhasil";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
<a href="view_pelamar.php">Lihat Data Pelamar</a>

// Tutup koneksi ke database
mysqli_close($conn);
?>
