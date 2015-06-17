<?php include "cek_session.php"; ?>
<div class="post">
	<h2 class="title"><a href="#">Pilih Matakuliah</a></h2>
									<p class="meta"><em>Posted by <a href="#">kelompok 3</a></em></p>
	<div class="entry">
		<p>
		<table class="datatable">
		<tr>
			<th>No</th><th>Matakuliah</th><th>Dosen</th><th>Jumlah Mahasiswa</th><th>Aksi</th>
		</tr>
		

		<?php 
		include "conn.php";
		$kd_kelas=$_GET['kd_kelas'];
		$matakuliah=mysql_query("select * from matakuliah where kd_kelas='$kd_kelas' order by nm_mk asc ",$koneksi);
		
		//untuk mencari jumlah
		echo "Jumlah Matakuliah : ".$jumlah_mk=mysql_num_rows($matakuliah);
		echo " >> Jumlah Siswa : ".$jumlah_siswa=mysql_num_rows(mysql_query("select * from siswa ",$koneksi));
		echo "<br><br>";
		
		
		while($row=mysql_fetch_array($matakuliah)){
			//mencari jumlah siswa masing2 mk
			$kd_dosen=$_GET['kd_dosen'];
			$siswa=mysql_query("select * from siswa where kd_mk='$row[kd_mk]'",$koneksi);
			$jumlah=mysql_num_rows($siswa);
			?>
			
			<tr>
			
				<td align="center"><?php echo $c=$c+1; ?></td>
				<td align="center"><?php echo $row['nm_mk']; ?></td>
				<td align="center"><?php echo $row['kd_dosen']; ?></td>
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

