<?php
$notify = '';
$notifyClass = '';

if(isset($_POST['submit'])){
    // Membuat variabl untuk menerima data dari form
    $email = $_POST['email'];
    $name = $_POST['name'];
  $city = $_POST['city'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($city) && !empty($name) && !empty($subject) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $notify = 'Email Anda salah. Silakan ketikan alamat email yang benar.';
            $notifyClass = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = '_mainaccount@satyawp.com'; // Ganti dengan alamat email yang Anda inginkan
            $emailSubject = 'Pesan website dari '.$name;
            $htmlContent = '<h2>Via Form Kontak Website</h2>
                <h5>Nama</h5>'.$name.'</p>
        <h5>Kota</h5>'.$city.'</p>
                <h5>Email</h5><p>'.$email.'</p>
                <h5>Subject</h5><p>'.$subject.'</p>
                <h5>Pesan</h5><p>'.$message.'</p>';

            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Header tambahan
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Kirim email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $notify = 'Pesan Anda sudah terkirim dengan sukses !';
                $notifyClass = 'succdiv';
            }else{
                $notify = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $notifyClass = 'errordiv';
            }
        }
    }else{
        $notify = 'Harap mengisi semua field data';
        $notifyClass = 'errordiv';
    }
}
?>
<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <link rel="shortcut icon" href="https://satyawp.com/apple-icon-57x57.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Satya's Web - Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Rochester' rel='stylesheet'>
    	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    	'<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<style>
	html{
    position: relative;
  }
  body{
      margin-bottom: 120px;
          font-family: 'Montserrat';
    margin-top: 40px;
    background: linear-gradient(lightblue, lightgreen);
  }
  .navbar-default{
    font-family: Arial; 
    font-size: 15px; 
    background-color: #E6E6FA;
    border: 2px solid black;
    box-shadow: 10px 10px 20px rgba(1, 0, 0, 100.5);
  }
a:hover { 
    text-decoration: none; opacity: .65; 
}
a{
    -webkit-transition: .2s;
    -o-transition: .2s;
    transition: .2s;
}
  @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
    -o-font-smoothing: antialiased;
    font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
  }

  #contact input[type="text"],
  #contact input[type="email"],
  #contact input[type="tel"],
  #contact input[type="url"],
  #contact textarea,
  #contact button[type="submit"] {
    font: 400 22px/16px "Roboto", Helvetica, Arial, sans-serif;
  }

  #contact {
    background: url(https://i.ytimg.com/vi/oBqqI6NMeaM/maxresdefault.jpg);
    padding: 25px;
    margin: 150px 0;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }

  #contact h3 {
    display: block;
    color: white;
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 10px;
  }

  #contact h4 {
    margin: 5px 0 15px;
    color: white;
    display: block;
    font-size: 13px;
    font-weight: 400;
  }

  fieldset {
    border: medium none !important;
    margin: 0 0 10px;
    min-width: 100%;
    padding: 0;
    width: 100%;
  }

  #contact input[type="text"],
  #contact input[type="email"],
  #contact input[type="tel"],
  #contact input[type="url"],
  #contact textarea {
    width: 100%;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;
  }

  #contact input[type="text"]:hover,
  #contact input[type="email"]:hover,
  #contact input[type="tel"]:hover,
  #contact input[type="url"]:hover,
  #contact textarea:hover {
    -webkit-transition: border-color 0.3s ease-in-out;
    -moz-transition: border-color 0.3s ease-in-out;
    transition: border-color 0.3s ease-in-out;
    border: 1px solid black;
  }

  #contact textarea {
    height: 100px;
    max-width: 100%;
    resize: none;
  }

  #contact button[type="submit"] {
    cursor: pointer;
    width: 100%;
    border: none;
    background: blue;
    color: white;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 15px;
    box-shadow: 6px 5px 3px rgba(0, 0, 0, 0.5);
  }

  #contact button[type="submit"]:hover {
    background: #43A047;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
  }

  #contact button[type="submit"]:active {
    box-shadow: inset 0 6px 3px rgba(0, 0, 0, 0.5);
  }

  .copyright {
    text-align: center;
  }

  #contact input:focus,
  #contact textarea:focus {
    outline: 0;
    border: 1px solid #aaa;
  }

  ::-webkit-input-placeholder {
    color: #888;
  }

  :-moz-placeholder {
    color: #888;
  }

  ::-moz-placeholder {
    color: #888;
  }

  :-ms-input-placeholder {
    color: #888;
  }

  .notify {
    padding: 10px;
    background-color: #FFD76E;
    margin-bottom: 10px;
    border-radius: 3px;
    font-weight: bold;
  }
  .teks{
      font-family: Lobster;
    color: black;
    font-size: 1em;
    text-shadow: 12px 11px 10px (0, 0, 0, 0.5);
  }
  @media screen and (max-width: 600px) {
      iframe {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
      }
    }
    	footer{
		position: absolute;
		bottom: 0;
		width: 100%;
		height: 100px;
		background: linear-gradient(orange, yellow) ;
		padding-top: 10px;
	    box-shadow: 800px 800px 800px rgba(0, 0, 0, 100.5);
	}

	footer p{
		color: black;
		font-size: 20px;
	}
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand page-scroll" href="#home">
         <img src="/apple-icon-57x57.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link page-scroll" href="index.html">Homepage</a>
            </li>
                      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Project</a>
                <div class="dropdown-menu">
                  <a class="nav-link page-scroll" href="index2.php">Web Feature</a>
                  <a class="nav-link page-scroll" href="project.html">Programming Project</a>
                  <a class="nav-link page-scroll" href="satyatech.html">Service & Product</a>
             </li>
             <li class="nav-item">
              <a class="nav-link page-scroll" href="#contact">Contact Me</a>
            </li>
          </ul>
          <audio src="Endgame.mp3" autoplay controls></audio>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="btn btn-outline-danger" href="http://wirapermana3.blogspot.com/">Go To Satya's Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <div class="container">
        <form id="contact" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <?php if(!empty($notify)){ ?>
                <p class="notify <?php echo !empty($notifyClass)?$notifyClass:''; ?>"><?php echo $notify; ?></p>
            <?php } ?>
            <center><h3>Contact Me</h3><center>
            <h4>Pengunjung bisa menghubungi saya dengan mengisikan isian form dibawah ini</h4>
            <fieldset>
                <input placeholder="Nama Anda" type="text" name="name" tabindex="1" required autofocus>
            </fieldset>
      <select id="kota" name="city" class="form-control">
                            <option>-- Pilih Kota Anda --</option>
                            <option>Bandung</option>
                            <option>Jakarta</option>
                            <option>Serang</option>
                            <option>Yogyakarta</option>
                            <option>Semarang</option>
                            <option>Surabaya</option>
            </select>
      <br>
            <fieldset>
                <input placeholder="Email Anda" type="text" name="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Subject (optional)" type="text" name="subject" tabindex="4" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Ketikan pesan Anda" name="message" tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Mengirim pesan">Kirim</button>
            </fieldset>
        </form>
    </div>
    <!-- akhir contact --> 
  <center>
  <p style="border: 6px solid black; padding: 3px; display: block; width:200px; height:90px; background-color: white; text-align: center;">
  <font size="4" align="center"><b>More Contact Information</b>
  <ol><a href="https://goo.gl/maps/9Sjkz6jrs462" class="teks">
  Batujajar Barat, Bandung, Indonesia, 40561</a></ol>
  <ol><a href="tel:+62895379181040" class="teks">+62-895-3791-81040</a></ol>
  <ol><a href="mailto:wirapermana3@gmail" class="teks">wirapermana3@gmail.com</a></ol>
  </font></p>
  </center>
  <center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.94023368913!2d107.48600171547064!3d-6.922242218583061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e544d34b1c41%3A0x574cb0fe48c25531!2sBatujajar+Bar.%2C+Batujajar%2C+Kabupaten+Bandung+Barat%2C+Jawa+Barat!5e0!3m2!1sid!2sid!4v1555511774456!5m2!1sid!2sid" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  </center>

    <!-- awal footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p><b>Copyright &copy; 2019 | By <i class="glyphicon
        					glyphicon-thumbs-up"></i> Satya Wira Permana 
        				</b></p>
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
        </div>
      </div>
    </footer>
   <script data-align="left" data-overlay="false" id="keyreply-script" src="//keyreply.com/chat/widget.js" data-color="#E4392B" data-apps="JTdCJTIyd2hhdHNhcHAlMjI6JTIyKzYyODk1Mzc5MTgxMDQwJTIyLCUyMnNtcyUyMjolMjIwODk1Mzc5MTgxMDQwJTIyLCUyMnBob25lJTIyOiUyMjA4OTUzNzkxODEwNDAlMjIsJTIydGVsZWdyYW0lMjI6JTIyQHdpcmFwZXJtYW5hMyUyMiwlMjJmYWNlYm9vayUyMjolMjJ3aXJhLnBlcm1hbmEuMzklMjIsJTIyZW1haWwlMjI6JTIyd2lyYXBlcm1hbmEzQGdtYWlsLmNvbSUyMiU3RA=="></script>
    <!-- akhir footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
     <script>
         $('.page-scroll').on('click', function(e) {
        	var tujuan = $(this).attr('href');	
        	var elemenTujuan = $(tujuan);
        	$('html , body').animate({
        	scrollTop: elemenTujuan.offset().top - 50
        	}, 1250, 'easeInOutExpo');
        	e.preventDefault();
        });
        $(window).scroll(function(){
        	var wScroll = $(this).scrollTop();
        	$('.jumbotron img').css({
        	'transform':'translate(0px, '+ wScroll/0+'%)'
        	});
        	
        	$('.jumbotron h1').css({
        	'transform':'translate(0px, '+ wScroll/0+'%)'
        	});
        	
        	$('.jumbotron p').css({
        	'transform':'translate(0px, '+ wScroll/0+'%)'
        	});
        });
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>