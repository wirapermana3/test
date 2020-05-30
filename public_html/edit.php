<html>
<head>
  <title>SIMPLE CRUD (DATABASES)</title>
   <link rel="shortcut icon" href="https://satyawp.com/apple-icon-57x57.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <style>
	html{
	    position: relative;
	}
	body{
    	margin-bottom: 120px;
		margin-top: 40px;
		background: linear-gradient(lightblue, lightpink);
	}
	table,tr,th{
		position: relative;
		background: linear-gradient(lightblue, lightyellow);
		font-family: Arial;
		color: black;
		border: 1px solid blue;
		padding: 7px;
		border-collapse: collapse;
		box-shadow: 2px 3px 4px rgba(0, 0, 0, 100.5);
	 }
	 textarea{
	     width: 400px;
	     height: 100px;
	 }
	 h1{
	     font-family: Tahoma;
	 }
    </style>
<body>
  <center><h1>Edit Data</h1></center>
  <?php
  include "koneksi.php";
  $nis = $_GET['nis'];
  $query = "SELECT * FROM siswa WHERE nis='".$nis."'";
  $sql = mysqli_query($connect, $query);   
  $data = mysqli_fetch_array($sql); 
  ?>
  <center>
  <form method="post" action="proses_ubah.php?nis=<?php echo $nis; ?>" enctype="multipart/form-data">
  <table cellpadding="8" class="table-responsive">
  <tr>
    <td>Name</td>
    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
  </tr>
   <tr>
    <td>Identity Code</td>
    <td><input type="text" name="nis" value="<?php echo $data['nis']; ?>"></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>
    <?php
    if($data['jenis_kelamin'] == "Laki-laki"){
      echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
      echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
    }else{
      echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
      echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
    }
    ?>
    </td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
  </tr>
  <tr>
    <td>Photo</td>
    <td>
      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
      <input type="file" name="foto">
    </td>
  </tr>
  </table>
  <hr>
  <input type="submit" value="Ubah">
  <a href="index2.php"><input type="button" value="Batal"></a>
  </form>
  </center>
   <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>