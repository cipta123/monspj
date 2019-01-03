

<?php 
include("koneksi.php");
$sql = mysqli_query($conn,"SELECT * FROM pengantar_nominatif where mak = 525115");
 ?>
cari : <input type="text" name="search">

<table style="height: 109px; border-collapse: collapse" border="solid">
<tbody>
<tr>
<td style=" text-align: center; height: 27px;">No</td>
<td style="height: 27px; border-color: black; text-align: center;">Uraian</td>
<td style=" text-align: center; height: 27px;">no SPP</td>
<td style="text-align: center; height: 27px;">MAK</td>
<td style="text-align: center; height: 27px;">Nilai Kotor</td>
<td style=" text-align: center; height: 27px;">Pajak</td>
<td style="text-align: center; height: 27px;">&nbsp;Nilai Bersih</td>
<td style="text-align: center; height: 27px;">tanggal spp</td>

</tr>

<?php  
//variabel awal buat ngitung total
$no = 1;
$jml_bersih=0;//ni buat ngitung total bersih
$jml_kotor=0;//ni buat ngitung total bersih
$jml_pajak=0;//ni buat ngitung total bersih
//variabel awal buat ngitung total


while($row = mysqli_fetch_array($sql))
{
	$jml_bersih++;
	$jml_kotor++;
	$jml_pajak++;
	$total0[$jml_kotor] = $row['jml_kotor'];
	$total1[$jml_pajak] = $row['pajak'];
	$total2[$jml_bersih] = $row['jml_bersih'];
?>
<tr>
<td style= "height: 27px;"><?php echo $no++; ?></td>
<td style=" height: 27px;"><?php echo $row['uraian_kegiatan']; ?></td>
<td style="height: 27px;"><?php echo $row['no_spp']; ?></td>
<td style="height: 27px;"><?php echo $row['mak']; ?></td>
<td style=" height: 27px;"><?php echo $row['jml_kotor']; ?></td>
<td style=" height: 27px;"><?php echo $row['pajak']; ?></td>
<td style=" height: 27px;"><?php echo $row['jml_bersih']; ?></td>
<td style=" height: 27px;"><?php echo $row['tgl_spp']; ?></td>
</tr>
<?php } ?>


<tr >
<td style=" height: 27px;">&nbsp;</td>
<td style=" height: 27px;">Jumlah</td>
<td style="height: 27px;">&nbsp;</td>
<td style="height: 27px;">&nbsp;</td>
<td style=" height: 27px;"><?php echo array_sum($total0); ?></td>
<td style="height: 27px;"><?php echo array_sum($total1); ?></td>
<td style="height: 27px;"><?php echo array_sum($total2); ?></td>
<td style="height: 27px;">&nbsp;</td>
</tr>
</tbody>
</table>