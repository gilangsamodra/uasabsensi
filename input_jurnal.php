<?php 
	include "conn.php";
	$kd_mk=$_GET['kd_mk'];
	$query=mysql_fetch_array(mysql_query("select * from matakuliah where kd_mk='$kd_mk'"));
	$kls=mysql_fetch_array(mysql_query("select * from kelas where kd_kelas='$query[kd_kelas]'"));
?>
<div class="post">
	<h2 class="title"><a href="#">Jurnal <?php echo $query['nm_mk'];?> <?php echo $kls['nama_kelas'];?></a></h2>
	<p class="meta"><em>Posted by <a href="#">kelompok 3</a></em></p>
	<div class="entry">
		<p>
		<form action="?page=proses1" method="post" name="postform">
		<input type="hidden" value="<?php echo $query['kd_mk'];?>" name="kd_mk"/>
		<table>
		<tr>
			<td width="24%" align="left" colspan="6">Tanggal : <input type="text" name="tanggal"  value="<?php if(empty($_POST['tgl'])){ echo $tanggal;}else{ echo "$_POST[tgl]$_GET[tgl]"; }?>" size="11"><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal);return false;" ><img name="popcal" align="absmiddle" src="calender/calbtn.gif" width="34" height="29" border="0" alt=""></a></td>
		</tr>
		<tr>
			<td>Materi</td>
			<td>	<input type="text" size="20" name="materi" /></td>
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
		<td>Matakuliah</td>
			<td>
			<select name="matakuliah">
			<option value="0" selected="selected">Pilih MK</option>
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
			<td>VerIifikasi Dosen
			<?php
				echo "<input type=checkbox name=hadir[] value=$row[kd_dosen] id='$no'>";
				$no++;
				?>
				Verifikasi PK 

			<?php
				echo "<input type=checkbox name=hadir[] value=$row[pk] id=$no>";
				$no++;
				?>
			</td>
			</tr>
			
			<table class="datatable">
		
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Materi</th>
			<th>Verifikasi Dosen</th>
			<th>Verfikasi PK</th>
		</tr>
		<?php
		
		$no=0;
		
		$query=mysql_query("select * from jurnal where kd_mk='$kd_mk'");
		while($row=mysql_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $c=$c+1;?></td>
			<td><?php echo $row['tgl_jurnal'];?></td>
			<td><?php echo $row['materi'];?></td>
				<td><?php echo $row['ver_dosen'];?></td>
			<td><?php echo $row['pk'];?></td>
			
		</tr>
		<?php
		}
		
		
		?>
		</table>
			<br />
		<input type="checkbox" name="selesai" value="yes" />Tandai Kelas Selesai
		<br /><br />
		<input type="submit" value="Input" />
		</form>
	
		</form>
		</p>
  </div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
