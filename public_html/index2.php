<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="https://satyawp.com/apple-icon-57x57.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Web Feature</title>
</head>
<body>
	<style>
	html{
		position: relative;
	}
	body{
    	margin-bottom: 120px;
		margin-top: 40px;
		background: orange;
	}

	.clock {width:300px; height:250px; margin:0 auto; padding:30px; border:10px solid #333; color:black; background: white; background: url(https://cdn.pixabay.com/photo/2016/04/15/04/02/water-1330252__340.jpg); box-shadow: 10px 20px 15px rgba(0, 0, 0, 0.2);
	}

	#Date {font:Arial; font-size:30px; text-align:center; text-shadow:0 0 5px black; }

	ul {text-align:left; font:Arial; font-size:27px; text-shadow:0 0 5px black; }
	ul li {display:inline ;font:Arial; font-size:27px; text-shadow:0 0 5px black;}
	#point {position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; }
	@-webkit-keyframes mymove
	{
	0% {opacity:1.0; text-shadow:0 0 20px black;}
	50% {opacity:0; text-shadow:none; }
	100% {opacity:1.0; text-shadow:0 0 20px black; }
	}

	@-moz-keyframes mymove
	{
	0% {opacity:1.0; text-shadow:0 0 20px black;}
	50% {opacity:0; text-shadow:none; }
	100% {opacity:1.0; text-shadow:0 0 20px black; }
	}
	#calculator {
		width: 330px;
		height: auto;
		margin: auto;
		padding: 20px 20px 9px;
		background: url(https://cdn.pixabay.com/photo/2017/08/31/04/35/gradient-2699441_960_720.jpg);
		border-radius: 3px;
		box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.2);
	}
	.top span.clear {
		float: left;
	}
	.top .screen {
		height: 40px;
		width: 190px;   
		float: right;   
		padding: 0 10px;   
		background: rgba(0, 0, 0, 0.2);
		border-radius: 3px;
		box-shadow: inset 0px 4px rgba(0, 0, 0, 0.2);
		font-size: 20px;
		line-height: 40px;
		color: white;
		text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
		text-align: right;
		letter-spacing: 1px;
	}

	.keys, .top {overflow: hidden;}
	.keys span, .top span.clear {
		float: left;
		position: relative;
		top: 0;
	   
		cursor: pointer;
	   
		width: 66px;
		height: 36px;
	   
		background: white;
		border-radius: 6px;
		box-shadow: 0px 4px rgba(0, 0, 0, 0.2);
	   
		margin: 0 7px 11px 0;
	   
		color: black;
		line-height: 36px;
		text-align: center;
	   
		user-select: none;
		transition: all 0.2s ease;
	}
	.keys span.operator {
		background: white;
		margin-right: 0;
	}

	.keys span.eval {
		background: black;
		box-shadow: 0px 4px #9da853;
		color: white;
	}

	.top span.clear {
		background: black;
		box-shadow: 0px 4px #708090;
		color: white;
	}

	/* Some hover effects */
	.keys span:hover {
		background: #9c89f6;
		box-shadow: 0px 4px #6b54d3;
		color: white;
	}

	.keys span.eval:hover {
		background: #abb850;
		box-shadow: 0px 4px #717a33;
		color: #ffffff;
	}

	.top span.clear:hover {
		background: #f68991;
		box-shadow: 0px 4px #d3545d;
		color: white;
	}

	.keys span:active {
		box-shadow: 0px 0px #6b54d3;
		top: 4px;
	}

	.keys span.eval:active {
		box-shadow: 0px 0px #717a33;
		top: 4px;
	}

	.top span.clear:active {
		top: 4px;
		box-shadow: 0px 0px #d3545d;
	}	
	
    footer{
		position: absolute;
		bottom: 0;
		width: 100%;
		height: 90px;
		background-color: black;
		padding-top: 10px;
	}

	footer p{
		color: white;
		font-size: 17px;
	}
	table,tr,th{
		position: relative;
		background: linear-gradient(lightcyan, lightgreen);
		font-family: Arial;
		color: black;
		border: 1px solid blue;
		padding: 7px;
		border-collapse: collapse;
		box-shadow: 2px 3px 4px rgba(0, 0, 0, 100.5);
	 }
	 .navbar {
      width: 100%;
      background-color: #555;
      overflow: auto;
      margin-top: -3em;
    }
    .navbar a {
      float: left;
      text-align: center;
      padding: 12px;
      color: white;
      text-decoration: none;
      font-size: 17px;
    }
    .navbar a:hover {
      background-color: #000;
    }
    .active {
    background-color: #4CAF50;
    }
    @media screen and (max-width: 500px) {
        .navbar a {
        float: none;
        display: block;
        }
    }
    iframe[seamless] { 
      display: block;
    }
    iframe{
        width: 340px;
        height: 340px;
    }
    button{
        width: 100px;
        background: linear-gradient(lightcyan, lightyellow);
		border-radius: 6px;
		box-shadow: 0px 4px rgba(0, 0, 0, 0.2);
    }
	</style>
	<div class="navbar">
      <a class="active" href="index2.php"><i class="fa fa-cog fa-spin fa-1x fa-fw"></i>Refresh Page</a> 
      <a href="index.html"><i class="fa fa-fw fa-home"></i>Homepage</a> 
      <a href="project.html"><i class="fa fa-fw fa-book"></i>Programming Project</a>
      <a href="satyatech.html"><i class="fa fa-fw fa-cart-arrow-down"></i>Service & Product</a>
      <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a> 
      <a href="https://wirapermana3.blogspot.com"><i class="fa fa-fw fa-briefcase"></i> Blog</a> 
    </div>
<center>
	<p style="border: 6px solid black; padding: 3px; display: block; width:300px; height:60px; background-color: #00BFFF; text-align: center;">
	<marquee onmouseout="this.start()" onmouseover="this.stop()"><font size="5"><b>DATE & TIME<b></font></marquee></p>
	<div class="clock">
	<div id="Date"></div>
	<ul>
	<br>
	<li id="hours"></li>
	<li id="point">:</li>
	<li id="min"></li>
	<li id="point">:</li>
	<li id="sec"></li>
	</ul>
	</div>
</center>
	<br>
<center>
	<p style="border: 6px solid blue; padding: 3px; display: block; width:300px; height:60px; background-color: yellow; text-align: center;">
<marquee onmouseout="this.start()" onmouseover="this.stop()"><font size="5"><b>SIMPLE CALCULATOR<b></font></marquee></p>
</center>
<center>	
	<div id="calculator">
    <!-- Screen and clear key -->
    <div class="top">
        <span class="clear">C</span>
        <div class="screen"></div>
    </div>   
	<div class="keys">
        <!-- operators and other keys -->
        <span>7</span>
        <span>8</span>
        <span>9</span>
        <span class="operator">+</span>
        <span>4</span>
        <span>5</span>
        <span>6</span>
        <span class="operator">-</span>
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span class="operator">/</span>
        <span>0</span>
        <span>.</span>
        <span class="eval">=</span>
        <span class="operator">x</span>
    </div>
	</div>
</center>
	<br>
	<center>
	<p style="border: 6px solid red; padding: 3px; display: block; width:300px; height:60px; color:white; background-color: black; text-align: center;">
	<marquee onmouseout="this.start()" onmouseover="this.stop()"><font size="5"><b>SIMPLE CRUD (DATABASES)<b></font></marquee></p>
</center>
<center>
    <br>
    <button onclick="window.location='add.php';"><b class="fa fa-fw fa-plus"></b></button><br><br>
	<div class="table-responsive">          
    <table class="table"  border=1>
    <thead>
    <tr>
        <th><center>Name</th>
        <th><center>Photo</th>
        <th><center>Identity Code (NIM/NIS/NIK)</th>
        <th><center>Gender</th>
        <th><center>Phone Number</th>
        <th><center>Address</th>
        <th colspan="2"><center>Action</th>
    </tr>
         <?php
      // Load file koneksi.php
      include "koneksi.php";
      $query = "SELECT * FROM siswa"; // Query untuk menampilkan semua data siswa
      $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
      while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$data['nama']."</td>";
        echo "<td><img src='img/".$data['foto']."' width='100' height='100'></td>";
        echo "<td>".$data['nis']."</td>";
        echo "<td>".$data['jenis_kelamin']."</td>";
        echo "<td>".$data['telp']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td><a href='edit.php?nis=".$data['nis']."'>Change</a></td>";
        echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Delete</a></td>";
        echo "</tr>";
      }
      ?>
      </table>
    </div>
</center>
<center>
	<p style="border: 6px solid red; padding: 3px; display: block; width:300px; height:60px; color:black; background-color: pink; text-align: center;">
	<marquee onmouseout="this.start()" onmouseover="this.stop()"><font size="5"><b>MOVIE TRAILERS<b></font></marquee></p>
</center>
<center>
   <iframe src="https://www.youtube.com/embed/videoseries?list=PLtCqvtXOM9InBJf3PhaVvyYhmpgD_2PJX" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</video>
</center>
<center>
	<p style="border: 6px solid gray; padding: 3px; display: block; width:300px; height:60px; color:black; background-color: lightyellow; text-align: center;">
	<marquee onmouseout="this.start()" onmouseover="this.stop()"><font size="5"><b>SPOTIFY<b></font></marquee></p>
</center>
<center>
   <iframe src="https://open.spotify.com/embed/user/spotify/playlist/37i9dQZF1DXa2EiKmMLhFD" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
</center>
<footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p> Copyright &copy; 2019 | By <i class="glyphicon
        					glyphicon-thumbs-up"></i> Satya Wira Permana 
        				</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
           <div style="text-align: center;">
                    <a href="https://www.facebook.com/wira.permana.39" target="_blank" title="Like/Follow"><img border="0" src="https://2.bp.blogspot.com/-hTavmcqNx3g/WBK6fgkhUBI/AAAAAAAAGxs/9wdu_ZoY6EEfPOkLBzL-BAt6S5gl1N0XwCLcB/s1600/facebook.png" style="border: medium none; position: relative;" / /></a>
                    <a href="https://www.instagram.com/wirapermana35/?hl=id" target="_blank" title="Follow Me"><img border="0" src="https://1.bp.blogspot.com/-n-UoYMNVNtw/WBK6gZ5-wRI/AAAAAAAAGx4/nNj-MfNaTyQCwrgm9L1q1LqbbmIQGKFpQCLcB/s1600/instagram.png" style="border: medium none; position: relative;" / /></a>
                    <a href="https://www.youtube.com/channel/UC1FUA3bkaAcjNyPfnaIGyXA?view_as=subscriber" target="_blank" title="Subscribe"><img border="0" src="https://4.bp.blogspot.com/-a8d1vICdBxQ/WBK6hLfNOOI/AAAAAAAAGyA/rBE-mtZFsMMdiSmDNwo0nB9ipFgM27cGwCLcB/s1600/youtube.png" style="border: medium none; position: relative;" / /></a>
               </div>
          </div>
            <!-- Live Chat Widget powered by https://keyreply.com/chat/ -->
            <!-- Advanced options: -->
            <!-- data-align="left" -->
            <!-- data-overlay="true" -->
            <script data-align="left" data-overlay="false" id="keyreply-script" src="//keyreply.com/chat/widget.js" data-color="#E4392B" data-apps="JTdCJTIyd2hhdHNhcHAlMjI6JTIyKzYyODk1Mzc5MTgxMDQwJTIyLCUyMnNtcyUyMjolMjIwODk1Mzc5MTgxMDQwJTIyLCUyMnBob25lJTIyOiUyMjA4OTUzNzkxODEwNDAlMjIsJTIydGVsZWdyYW0lMjI6JTIyQHdpcmFwZXJtYW5hMyUyMiwlMjJmYWNlYm9vayUyMjolMjJ3aXJhLnBlcm1hbmEuMzklMjIsJTIyZW1haWwlMjI6JTIyd2lyYXBlcm1hbmEzQGdtYWlsLmNvbSUyMiU3RA=="></script>
        </div>
      </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    	$(document).ready(function() {
	var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Desember",];
	var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

	var newDate = new Date();
	newDate.setDate(newDate.getDate());
	$('#Date').html(dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

	setInterval( function() {
	var seconds = new Date().getSeconds();
	$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);

	setInterval( function() {
	var minutes = new Date().getMinutes();
	$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
	},1000);

	setInterval( function() {
	var hours = new Date().getHours();
	$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
	}, 1000);
	});
	
	var keys = document.querySelectorAll('#calculator span');
	var operators = ['+', '-', 'x', '÷'];
	var decimalAdded = false;
	for(var i = 0; i < keys.length; i++) {
    keys[i].onclick = function(e) {
        var input = document.querySelector('.screen');
        var inputVal = input.innerHTML;
        var btnVal = this.innerHTML;
       
        if(btnVal == 'C') {
            input.innerHTML = '';
            decimalAdded = false;
        }
       
        else if(btnVal == '=') {
            var equation = inputVal;
            var lastChar = equation[equation.length - 1];
            equation = equation.replace(/x/g, '*').replace(/÷/g, '/');
            if(operators.indexOf(lastChar) > -1 || lastChar == '.')
                equation = equation.replace(/.$/, '');
           
            if(equation)
                input.innerHTML = eval(equation);
               
            decimalAdded = false;
        }
       
        else if(operators.indexOf(btnVal) > -1) {
            var lastChar = inputVal[inputVal.length - 1];
            if(inputVal != '' && operators.indexOf(lastChar) == -1) 
                input.innerHTML += btnVal;           
            else if(inputVal == '' && btnVal == '-') 
                input.innerHTML += btnVal;
            if(operators.indexOf(lastChar) > -1 && inputVal.length > 1) {
                input.innerHTML = inputVal.replace(/.$/, btnVal);
            }           
            decimalAdded =false;
        }       
        else if(btnVal == '.') {
            if(!decimalAdded) {
                input.innerHTML += btnVal;
                decimalAdded = true;
            }
        }
        else {
            input.innerHTML += btnVal;
        }
        e.preventDefault();
		} 
	}
	if (window!= top) top.location.href = location.href;
</script>
</body>
</html>