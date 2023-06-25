<?php
// kode untuk menyimpan data ke database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // ambil data yang diisi pada form
  $nama = $_POST['nama'];
  $nama_panggilan = $_POST['nama_panggilan'];
  $nomor_hp = $_POST['nomor_hp'];
  $alamat = $_POST['alamat'];
  $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
  $pengalaman = $_POST['pengalaman'];
  $universitas = $_POST['universitas'];
  $jurusan = $_POST['jurusan'];
  $departemen = $_POST['departemen'];

  // ambil data file CV yang diunggah
  $nama_cv = $_FILES['cv']['name'];
  $ukuran_cv = $_FILES['cv']['size'];
  $tipe_cv = $_FILES['cv']['type'];
  $tmp_cv = $_FILES['cv']['tmp_name'];

  // lakukan validasi dan proses simpan data ke database
  // ...

  // set status sukses atau gagal pada parameter query string
  if ($sukses_simpan_data) {
    header('Location: proses_form.php?status=sukses');
  } else {
    header('Location: proses_form.?status=gagal');
  }
}

// kode untuk menampilkan form HTML
if (isset($_GET['status'])) {
  if ($_GET['status'] == 'sukses') {
    echo '<p class="sukses">Data berhasil disimpan!</p>';
  } else if ($_GET['status'] == 'gagal') {
    echo '<p class="gagal">Terjadi kesalahan saat menyimpan data.</p>';
  }
}
?>