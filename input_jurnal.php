<?php 
	include "conn.php";
	$kd_mk=$_GET['kd_mk'];
	$query=mysql_fetch_array(mysql_query("select * from jurnal where kd_mk='$kd_mk'"));
?>
<div class="post">
	<h2 class="title"><a href="#">Jurnal <?php echo $query['nama_kelas'];?></a></h2>
	<p class="meta"><em>Posted by <a href="#">kelompok 3</a></em></p>
	<div class="entry">
		<p>
		<form action="?page=proses" method="post" name="postform">
		<input type="hidden" value="<?php echo $query['kd_mk'];?>" name="kd_mk"/>
		<table class="datatable">
		<tr>
			<td width="24%" align="left" colspan="6">Tanggal : <input type="text" name="tanggal"  value="<?php if(empty($_POST['tgl'])){ echo $tanggal;}else{ echo "$_POST[tgl]$_GET[tgl]"; }?>" size="11"><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal);return false;" ><img name="popcal" align="absmiddle" src="calender/calbtn.gif" width="34" height="29" border="0" alt=""></a></td>
		</tr>
		<tr>
			<th>No</th>
			<th>Materi</th>
			<th>Verifikasi Dosen</th>
			<th>Verfikasi PK</th>
			<th>Jumlah Mahasiswa</th>
		</tr>
		<?php
		
		$no=0;
		
		$query=mysql_query("select * from jurnal where kd_mk='$kd_mk'");
		while($row=mysql_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $c=$c+1;?></td>
			<td><?php echo $row['materi'];?></td>
			<td align="center">
				<?php
				echo "<input type=checkbox name=hadir[] value=$row[kd_dosen] id='$no'>";
				$no++;
				?>
			</td>
			<td align="center">
				<?php
				echo "<input type=checkbox name=hadir[] value=$row[pk] id=$no>";
				$no++;
				?>
			</td>
			
		</tr>
		<?php
		}
		
		echo "
			<tr>
				<td></td>
				<td></td>
				<td align=center>
				<input type='button' name='pilih' onclick='for (i=0;i<$no;i++){document.getElementById(i).checked=true;}' value='Check All'>
				</td>
				<td align=center>
				<input type='button' name='pilih' onclick='for (i=0;i<$no;i++){document.getElementById(i).checked=false;}' value='Uncheck All'>
				</td>
				<td></td>
				<td></td>
			</tr>";
		?>
		</table>
		<br />
		<input type="checkbox" name="selesai" value="yes" />Tandai Kelas Selesai
		<br /><br />
		<input type="submit" value="Input" />
		</form>
		</p>
  </div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
