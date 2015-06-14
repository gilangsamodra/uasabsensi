<?php include "cek_session.php"; ?>
<div class="post">
	<h2 class="title"><a href="#">Pilih Matakuliah</a></h2>
									<p class="meta"><em>Sunday, April 26, 2009 7:27 AM Posted by <a href="#">Someone</a></em></p>
	<div class="entry">
		<p>
		<table class="datatable">
		<tr>
			<th>No</th><th>Matakuliah</th><th>Dosen</th><th>Jumlah Mahasiswa</th><th>Aksi</th>
		</tr>
		<?php 
		include "conn.php";
		$kelas=mysql_query("select * from matakuliah order by nm_mk asc ",$koneksi);
		
		//untuk mencari jumlah
		echo "Jumlah Matakuliah : ".$jumlah_mk=mysql_num_rows($kelas);
		echo " >> Jumlah Siswa : ".$jumlah_siswa=mysql_num_rows(mysql_query("select * from siswa ",$koneksi));
		echo "<br><br>";
		
		while($row=mysql_fetch_array($kelas)){
			//mencari jumlah matakuliah di masing-masing kelas
			$siswa=mysql_query("select * from siswa where kd_mk='$row[kd_mk]'",$koneksi);
			$jumlah=mysql_num_rows($siswa);
			?>
			<tr>
				<td align="center"><?php echo $c=$c+1; ?></td>
				<td align="center"><?php echo $row['nm_mk']; ?></td>
				<td align="center"><?php echo $row['dosen']; ?></td>
				<td align="center"><?php echo $jumlah;?> Orang</td>
				<td align="center"><a href="?page=input_absensi&kd_mk=<?php echo $row['kd_mk'];?>">Absensi</a>
				<a href="?page=input_jurnal&kd_mk=<?php echo $row['kd_mk'];?>">Jurnal</a>
			</td>
			</tr>
			<?php
		}
		?>
		</table>
		</p>
  </div>
</div>

