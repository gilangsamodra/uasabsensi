<?php include "cek_session.php"; ?>
<div class="post">
	<h2 class="title"><a href="#">Pilih Kelas</a></h2>
									<p class="meta"><em>Sunday, April 26, 2009 7:27 AM Posted by <a href="#">Someone</a></em></p>
	<div class="entry">
		<p>
		<table class="datatable">
		<tr>
			<th>No</th><th>Nama Kelas</th><th>Jumlah Matakuliah</th><th>Matakuliah</th>
		</tr>
		<?php 
		include "conn.php";
		$kelas=mysql_query("select * from kelas order by nama_kelas asc ",$koneksi);
		
		//untuk mencari jumlah
		echo "Jumlah Kelas : ".$jumlah_kelas=mysql_num_rows($kelas);
		echo " >> Jumlah Matakuliah : ".$jumlah_mk=mysql_num_rows(mysql_query("select * from matakuliah ",$koneksi));
		echo "<br><br>";
		
		while($row=mysql_fetch_array($kelas)){
			//mencari jumlah matakuliah di masing-masing kelas
			$matakuliah=mysql_query("select * from matakuliah where kd_kelas='$row[kd_kelas]'",$koneksi);
			$jumlah=mysql_num_rows($matakuliah);
			?>
			<tr>
				<td align="center"><?php echo $c=$c+1; ?></td>
				<td align="center"><?php echo $row['nama_kelas']; ?></td>
				<td align="center"><?php echo $jumlah;?> MK</td>
				<td align="center"><a href="?page=jurnal&kd_kelas=<?php echo $row['kd_kelas'];?>">Pilih Matakuliah</a></td>
			</tr>
			<?php
		}
		?>
		</table>
		</p>
  </div>
</div>

