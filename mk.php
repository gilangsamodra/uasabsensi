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
			<td></td><td><input type="submit" value="Simpan" /></td>
		</tr>
		</table>
		</form>
		
		<?php 
		include "conn.php";
		
		//untuk input
		if(isset($_POST['nm_mk'])){
			$nm_mk=strtoupper($_POST['nm_mk']);
			
			$query=mysql_query("insert into matakuliah(nm_mk) values('$nm_mk')",$koneksi);
			
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
		<tr><th>Kode Matakuliah</th><th>Matakuliah</th></tr>
		<?php
		while($row=mysql_fetch_array($view)){
		?>
		<tr><td><?php echo $c=$c+1;?></td><td><?php echo $row['nm_mk'];?></td></tr>
		<?php
		}
		?>
		</table>
				
		</p>
  	</div>
</div>


