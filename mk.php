<?php include "cek_session.php"; ?>
<div class="post">
	<h2 class="title"><a href="#">Halaman Matakuliah</a></h2>
	<p class="meta"><em>Posted by <a href="#">kelompok 3</a></em></p>
	<div class="entry">
		<p>
		
		<form action="?page=mk" method="post">
		<table>
		<tr>
			<td>Matakuliah</td><td><input type="text" size="20" name="nm_mk" /></td>
		</tr>
		<tr>
		<td>Kelas</td>
			<td>
			<select name="kelas">
			<option value="0" selected="selected">Pilih Kelas</option>
			<?php 
			include "conn.php";
			
			$query=mysql_query("select * from kelas order by nama_kelas asc",$koneksi);
			
			while($row=mysql_fetch_array($query))
			{
				?><option value="<?php  echo $row['kd_kelas']; ?>"><?php  echo $row['nama_kelas']; ?></option><?php 
			}
			?>
			</select>	
			</td>
		</tr>
		<tr>
		<td>Dosen</td>
			<td>
			<select name="dosen">
			<option value="0" selected="selected">Pilih Dosen</option>
			<?php 
			include "conn.php";
			
			$query=mysql_query("select * from dosen order by nama_dosen asc",$koneksi);
			
			while($row=mysql_fetch_array($query))
			{
				?><option value="<?php  echo $row['kd_dosen']; ?>"><?php  echo $row['nama_dosen']; ?></option><?php 
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
		include "conn.php";
		
		//untuk input
		if(isset($_POST['nm_mk'])){
			$nm_mk=strtoupper($_POST['nm_mk']);
				$kd_kelas=$_POST['kelas'];
				$kd_dosen=$_POST['dosen'];
			
			$query=mysql_query("insert into matakuliah(nm_mk,kd_kelas,kd_dosen) values('$nm_mk','$kd_kelas','$kd_dosen')",$koneksi);
			
			if($query){
				echo "<br>";
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} 
		}else{
			unset($_POST['nm_mk']);
		}
		
		//untuk menampilkan
		$view=mysql_query("select * from matakuliah order by nm_mk asc");
		?>
		<br />
		<table class="datatable">
		<tr>
		<th>Kode Matakuliah</th>
		<th>Matakuliah</th>
		<th>Kelas</th>
		<th>Dosen</th>
		</tr>
		<?php
		while($row=mysql_fetch_array($view)){
				$nama_dosen=mysql_fetch_array(mysql_query("SELECT nama_dosen FROM dosen WHERE kd_dosen='$row[kd_dosen]'"));	
					$nama_kelas=mysql_fetch_array(mysql_query("SELECT nama_kelas FROM kelas WHERE kd_kelas='$row[kd_kelas]'"));	
		?>
		<tr>
		<td><?php echo $c=$c+1;?></td>
		<td><?php echo $row['nm_mk'];?></td>
		<td><?php echo $nama_kelas['nama_kelas'];?></td>
		<td><?php echo $nama_dosen['nama_dosen'];?></td>
		</tr>
		<?php
		}
		?>
		</table>
				
		</p>
  	</div>
</div>


