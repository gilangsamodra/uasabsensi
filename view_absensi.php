<?php include "conn.php";
$kd_mk=$_GET['kd_mk'];
$query=mysql_fetch_array(mysql_query("select * from matakuliah where kd_mk='$kd_mk'"));
	$kelas=mysql_fetch_array(mysql_query("select * from kelas where kd_kelas='$query[kd_kelas]'"));

?>
<div class="post">
	<h2 class="title"><a href="#">View Absensi Matakuliah <?php echo $query['nm_mk'];?> <?php echo $kelas['nama_kelas'];?></a></h2>
	<p class="meta"><em>Sunday, April 26, 2009 7:27 AM Posted by <a href="#">Someone</a></em></p>
	<div class="entry">
		<p>
		<table class="datatable">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Hadir (H)</th>
			<th>Sakit (S)</th>
			<th>Ijin (I)</th>
			<th>Alfa (A)</th>
		</tr>
		<?php
		$kd_mk=$_GET['kd_mk'];
		$tanggal=$_GET['tanggal'];
		
		$query=mysql_query("select * from absensi where kd_mk='$kd_mk' and tanggal='$tanggal'",$koneksi);
		
		while($row=mysql_fetch_array($query)){
			$siswa=mysql_fetch_array(mysql_query("select * from siswa where kd_siswa='$row[kd_siswa]'",$koneksi));
			$keterangan=$row['keterangan'];
			?>
			<tr>
				<td><?php echo $c=$c+1;?></td>
				<td><?php echo $siswa['nama'];?></td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and tanggal='$tanggal' and keterangan='h'",$koneksi);
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
				</td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and tanggal='$tanggal' and keterangan='s'",$koneksi);
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
				</td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and tanggal='$tanggal' and keterangan='i'",$koneksi);
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
				</td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and tanggal='$tanggal' and keterangan='a'",$koneksi);
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
				</td>
			</tr>
			<?php
			
		}
		?>
		</table>
  </div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>