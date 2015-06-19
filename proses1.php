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
		$hadir=mysql_query("insert into jurnal(tgl_jurnal,kd_kelas,kd_mk,materi,ver_dosen,pk,selesai_jurnal) values('$tgl_jurnal','$kd_kelas','$kd_mk','$materi','yes','yes','yes')",$koneksi);
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