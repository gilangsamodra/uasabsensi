<?php 
include "conn.php";
$kd_mk=$_POST['kd_mk'];
$tanggal=$_POST['tanggal'];

if(isset($_POST['selesai'])){

	if(!empty($_POST['hadir'])){
		//parameter
		$kd_siswa=$_POST['hadir'];
		$jumlah=count($kd_siswa);
	
		for($i=0;$i<$jumlah;$i++){
			$hadir=mysql_query("insert into absensi(kd_siswa,kd_mk,keterangan,tanggal,selesai) values('$kd_siswa[$i]','$kd_mk','h','$tanggal','yes')",$koneksi);
		}
		
		?>
		<script language="javascript">document.location.href="?page=view_absensi&kd_mk=<?php echo $kd_mk;?>&tanggal=<?php echo $tanggal;?>";</script>
		<?php 
	}
	
	if(!empty($_POST['sakit'])){
		//parameter
		$kd_siswa=$_POST['sakit'];
		$jumlah=count($kd_siswa);
	
	
		for($i=0;$i<$jumlah;$i++){
			$hadir=mysql_query("insert into absensi(kd_siswa,kd_mk,keterangan,tanggal,selesai) values('$kd_siswa[$i]','$kd_mk','s','$tanggal','yes')",$koneksi);
		}
		
		?>
		<script language="javascript">document.location.href="?page=view_absensi&kd_mk=<?php echo $kd_mk;?>&tanggal=<?php echo $tanggal;?>";</script>
		<?php 
	}
	
	if(!empty($_POST['ijin'])){
		//parameter
		$kd_siswa=$_POST['ijin'];
		$jumlah=count($kd_siswa);
	
	
		for($i=0;$i<$jumlah;$i++){
			$hadir=mysql_query("insert into absensi(kd_siswa,kd_mk,keterangan,tanggal,selesai) values('$kd_siswa[$i]','$kd_mk','i','$tanggal','yes')",$koneksi);
		}
		
		?>
		<script language="javascript">document.location.href="?page=view_absensi&kd_mk=<?php echo $kd_mk;?>&tanggal=<?php echo $tanggal;?>";</script>
		<?php 
	}
	
	if(!empty($_POST['alfa'])){
		//parameter
		$kd_siswa=$_POST['alfa'];
		$jumlah=count($kd_siswa);
	
	
		for($i=0;$i<$jumlah;$i++){
			$hadir=mysql_query("insert into absensi(kd_siswa,kd_mk,keterangan,tanggal,selesai) values('$kd_siswa[$i]','$kd_mk','a','$tanggal','yes')",$koneksi);
		}
		
		?>
		<script language="javascript">document.location.href="?page=view_absensi&kd_mk=<?php echo $kd_mk;?>&tanggal=<?php echo $tanggal;?>";</script>
		<?php 
	}
}else{
	unset($_POST['selesai']);
	?><script language="javascript">document.location.href="?page=input_absensi&kd_mk=<?php echo $kd_mk;?>&tanggal=<?php echo $tanggal;?>";</script><?php
}
?>