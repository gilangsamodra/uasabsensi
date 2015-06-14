<?php 
	include "conn.php";
	$kd_kelas=$_GET['kd_kelas'];
	$query=mysql_fetch_array(mysql_query("select * from kelas where kd_kelas='$kd_kelas'"));
?>
<div class="post">
	<h2 class="title"><a href="#">Jurnal Matakuliah <?php echo $query['nama_kelas'];?></a></h2>
	<p class="meta"><em>Sunday, April 26, 2009 7:27 AM Posted by <a href="#">Someone</a></em></p>
	<div class="entry">
		<p>
		<form action="?page=proses" method="post" name="postform">
		<input type="hidden" value="<?php echo $query['kd_mk'];?>" name=""/>
		<table class="datatable">
	
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Materi</th>
			<th>Verivikasi Dosen</th>
			<th>Verivikasi PK</th>
		</tr>
		<?php
		//penting nech buat kasih nilai awal cekbox
		$no=0;
		
		$query=mysql_query("select * from matakuliah where kd_mk='$kd_mk'");
		while($row=mysql_fetch_array($query)){
		?>
		<tr>
		</tr>
		<?php
		}
		
		echo "
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>";
		?>
		</table>
		<br />
		<input type="checkbox" name="selesai" value="yes" />Tandai Kelas Selesai
		<br /><br />
		<input type="submit" value="Submit" />
		</form>
		</p>
  </div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
