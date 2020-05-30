<html>
<head>
    <title>Add Users</title>
    <link rel="shortcut icon" href="https://satyawp.com/apple-icon-57x57.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Akronim" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Sedgwick Ave' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
</head>
<style>
		html{
	    position: relative;
	}
	body{
    	margin-bottom: 120px;
		margin-top: 40px;
		background: linear-gradient(WhiteSmoke, LightYellow);
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
	     font-family: Kalam;
	 }
</style>

<body>
    <center>
    <div>
      <a href="index2.php"><i class="fa fa-fw fa-arrow-left"></i>Go Back</a> 
    </div>
    <h1>Add Data</h1>
    </center>
    <center>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Identity Code</td>
    <td><input type="text" name="nis"></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
    </td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><input type="text" name="telp"></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <tr>
    <td>Photo</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  <hr>
  <input type="submit" value="Simpan">
  </form>
    </center>
</body>
</html>