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
			$hadir=mysql_query("insert into jurnal(tgl_jurnal,kd_kelas,kd_mk,materi,ver_dosen,pk) values('$tgl_jurnal','$kd_kelas','$kd_mk','$materi','$ver_dosen','$pk')",$koneksi);
		}
		
		?>
		<script language="javascript">document.location.href="?page=view_absensi&kd_kelas=<?php echo $kd_kelas;?>&tanggal=<?php echo $tanggal;?>";</script>
		<?php 
	}
	
	else if(!empty($_POST['sakit'])){
		//parameter
		$kd_siswa=$_POST['sakit'];
		$jumlah=count($kd_siswa);
	
	
		for($i=0;$i<$jumlah;$i++){
			$hadir=mysql_query("insert into absensi(kd_siswa,kd_kelas,keterangan,tanggal,selesai) values('$kd_siswa[$i]','$kd_kelas','s','$tanggal','yes')",$koneksi);
		}
		
		?>
		<script language="javascript">document.location.href="?page=view_absensi&kd_kelas=<?php echo $kd_kelas;?>&tanggal=<?php echo $tanggal;?>";</script>
		<?php 
	}
	
		<script language="javascript">document.location.href="?page=view_absensi&kd_kelas=<?php echo $kd_kelas;?>&tanggal=<?php echo $tanggal;?>";</script>
		<?php 
	}
	
	if(!empty($_POST['alfa'])){
		//parameter
		$kd_siswa=$_POST['alfa'];
		$jumlah=count($kd_siswa);
	
	
		for($i=0;$i<$jumlah;$i++){
			$hadir=mysql_query("insert into absensi(kd_siswa,kd_kelas,keterangan,tanggal,selesai) values('$kd_siswa[$i]','$kd_kelas','a','$tanggal','yes')",$koneksi);
		}
		
		?>
		<script language="javascript">document.location.href="?page=view_absensi&kd_kelas=<?php echo $kd_kelas;?>&tanggal=<?php echo $tanggal;?>";</script>
		<?php 
	}
}else{
	unset($_POST['selesai']);
	?><script language="javascript">document.location.href="?page=input_absensi&kd_kelas=<?php echo $kd_kelas;?>&tanggal=<?php echo $tanggal;?>";</script><?php
}
?>