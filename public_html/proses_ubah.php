<?php
include "koneksi.php";
$nis = $_GET['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
if(isset($_POST['ubah_foto'])){
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  $fotobaru = date('dmYHis').$foto;
  $path = "crud/img/".$fotobaru;
  if(move_uploaded_file($tmp, $path)){ 
    $query = "SELECT * FROM siswa WHERE nis='".$nis."'";
    $sql = mysqli_query($connect, $query); 
    $data = mysqli_fetch_array($sql); 
    if(is_file("crud/img/".$data['foto'])) 
      unlink("crud/img/".$data['foto']);
    $query = "UPDATE siswa SET nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', telp='".$telp."', alamat='".$alamat."', foto='".$fotobaru."' WHERE nis='".$nis."'";
    $sql = mysqli_query($connect, $query);
    if($sql){ 
      header("location: index2.php"); 
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='edit.php'>Kembali Ke Form</a>";
    }
  }else{

    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='edit.php'>Kembali Ke Form</a>";
  }
}else{ 
  $query = "UPDATE siswa SET nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', telp='".$telp."', alamat='".$alamat."' WHERE nis='".$nis."'";
  $sql = mysqli_query($connect, $query);
  if($sql){
    header("location: index2.php");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='edit.php'>Kembali Ke Form</a>";
  }
}
?>