<?php include "cek_session.php"; ?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Absensi Online -- Ri32.Wordpress.Com</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" /></head>
<body background=ketintang.jpg>
	<div id="logo">
		<h1>	 <img src="unesa.PNG"width="60"; height="60"; _float=left; margin =40px; />
		<a href="#" >Jurnal Matakuliah</a></h1>

		<a href="#" ><marquee>Teknik Informatika Universitas Negeri Surabaya</marquee></a>
		<p>&nbsp;</p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
			<li><a href="?page=home">Home</a></li>
			<li><a href="?page=kelas">Kelas</a></li>
			<li><a href="?page=siswa">Siswa</a></li>
			<li><a href="?page=mk">Matakuliah</a></li>
			<li><a href="?page=absensi">Absensi dan Jurnal</a></li>
			<li><a href="?page=rekap_absensi">Rekap</a></li>
				 <a href=baru.html>Tentang Jurusan</a>
				<li><a href="logout.php" onclick="return confirm('Apakah Anda yakin?')">Logout</a></li>
			</ul>
		</div>
		<!-- end #menu -->

	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
		<div id="content">
		<?php include "isi.php";?>
		</div>
		<!-- end #content -->
		
	
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div id="footer">
		<p>Copyright (c) 2015 kelompok 3.</p>
		
  <marquee>
    <img src="kelompok3.jpg"width="50"; height="50"; _float=left; margin =20px; />
		</marquee>
	</div>
	<!-- end #footer -->
</body>
</html>
