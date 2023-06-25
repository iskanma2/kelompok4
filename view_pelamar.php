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

// Query untuk mengambil data pelamar
$sql = "SELECT * FROM pelamar";
$result = mysqli_query($conn, $sql);

// Tutup koneksi ke database
mysqli_close($conn);
?>

<!-- Tampilkan data dalam tabel -->
<table>
  <thead>
    <tr>
      <th>Nama</th>
      <th>Nama Panggilan</th>
      <th>Nomor HP</th>
      <th>Alamat</th>
      <th>Pendidikan Terakhir</th>
      <th>Pengalaman</th>
      <th>Universitas</th>
      <th>Jurusan</th>
      <th>Departemen</th>
      <th>CV</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Loop untuk menampilkan data pelamar dalam tabel
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['nama'] . "</td>";
      echo "<td>" . $row['nama_panggilan'] . "</td>";
      echo "<td>" . $row['nomor_hp'] . "</td>";
      echo "<td>" . $row['alamat'] . "</td>";
      echo "<td>" . $row['pendidikan_terakhir'] . "</td>";
      echo "<td>" . $row['pengalaman'] . "</td>";
      echo "<td>" . $row['universitas'] . "</td>";
      echo "<td>" . $row['jurusan'] . "</td>";
      echo "<td>" . $row['departemen'] . "</td>";
      echo "<td><a href='" . $row['cv'] . "'>Download CV</a></td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
