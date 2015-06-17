<?php include "cek_session.php"; ?>
<div class="post">
	<h2 class="title"><a href="#">Halaman Siswa</a></h2>
	<p class="meta"><em>Sunday, April 26, 2009 7:27 AM Posted by <a href="#">Someone</a></em></p>
	<div class="entry">
		<p>
		

		
		<form name="siswa" action="?page=siswa" method="post">
		<table>
		<tr>
			<td>Nama</td><td><input type="text" size="20" name="nama" /></td>
		</tr>
		<tr>
			<td>Telp</td><td><input type="text" size="20" name="telp" /></td>
		</tr>
		<tr>
			<td>Alamat</td><td><input type="text" size="20" name="alamat" /></td>
		</tr>
		<tr>
			<td>Matakuliah</td>
			<td>
			<select name="matakuliah">
			<option value="0" selected="selected">Pilih Matakuliah</option>
			<?php 
			include "conn.php";
			
			$query=mysql_query("select * from matakuliah order by nm_mk asc",$koneksi);
			
			while($row=mysql_fetch_array($query))
			{
				?><option value="<?php  echo $row['kd_mk']; ?>"><?php  echo $row['nm_mk']; ?></option><?php 
			}
			?>
			</select>	
			</td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="Simpan" /></td>
		</tr>
		</table>
		</form>
		
		<?php 
		//untuk input
		if(isset($_POST['nama'])){
			$nama=ucwords($_POST['nama']);
			$telp=$_POST['telp'];
			$alamat=$_POST['alamat'];
			$kd_mk=$_POST['matakuliah'];
			
			$query=mysql_query("insert into siswa(nama, telp, alamat, kd_mk) values('$nama','$telp','$alamat','$kd_mk')",$koneksi);
			
			if($query){
				echo "<br>";
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} 
		}else{
			unset($_POST['nama']);
		}
		
		//untuk menampilkan
		$view=mysql_query("select * from siswa order by kd_mk asc");
		?>
		<br />
		<table class="datatable">
		<tr><th>No</th><th>Nama</th><th> Telp</th><th>Alamat</th><th>Matakuliah</th></tr>
		<?php
		while($row=mysql_fetch_array($view)){
		$nm_mk=mysql_fetch_array(mysql_query("SELECT nm_mk FROM matakuliah WHERE kd_mk='$row[kd_mk]'"));	
		?>
		<tr><td><?php echo $c=$c+1;?></td>
		<td><?php echo $row['nama'];?></td>
		<td><?php echo $row['telp'];?></td>
		<td><?php echo $row['alamat'];?></td>
		<td><?php echo $nm_mk['nm_mk'];?></td></tr>
		<?php
		}
		?>
		</table>
		
		</p>
	</div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>