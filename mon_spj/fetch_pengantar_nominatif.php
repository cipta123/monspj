<?php
$conn = mysqli_connect("localhost", "root", "", "mon_spj");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
   $query = "
	SELECT * FROM pengantar_nominatif 
	WHERE no_spp LIKE '%".$search."%'
	OR uraian_kegiatan LIKE '%".$search."%' 
	OR tgl_spp LIKE '%".$search."%'
	OR mak LIKE '%".$search."%'
	";

	// $query = "
	// SELECT * FROM tbl_customer 
	// WHERE CustomerName LIKE '%".$search."%'
	// OR Address LIKE '%".$search."%' 
	// OR City LIKE '%".$search."%' 
	// OR PostalCode LIKE '%".$search."%' 
	// OR Country LIKE '%".$search."%'
	// ";
}
else
{
	$query = "
	SELECT * FROM pengantar_nominatif ORDER BY id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<table style="height: 109px; border-collapse: collapse" border="solid">
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
                 </tr>';
//variabel awal buat ngitung total
$no = 1;
$jml_bersih=0;//ni buat ngitung total bersih
$jml_kotor=0;//ni buat ngitung total bersih
$jml_pajak=0;//ni buat ngitung total bersih
//variabel awal buat ngitung total


	while($row = mysqli_fetch_array($result))
	{

	$jml_bersih++;
	$jml_kotor++;
	$jml_pajak++;
	$total0[$jml_kotor] = $row['jml_kotor'];
	$total1[$jml_pajak] = $row['pajak'];
	$total2[$jml_bersih] = $row['jml_bersih'];


		$output .= '
			<tr>
			<td style= "height: 27px;">'.$no++.'</td>
			<td style=" height: 27px;"> '.$row["uraian_kegiatan"].'</td>
			<td style="height: 27px;">'.$row["no_spp"].'</td>
			<td style="height: 27px;">'.$row["mak"].'</td>
			<td style=" height: 27px;">'.$row["jml_kotor"].'</td>
			<td style=" height: 27px;">'.$row["pajak"].'</td>
			<td style=" height: 27px;">'.$row["jml_bersih"].'</td>
			<td style=" height: 27px;">'.$row['tgl_spp'].'</td>
			</tr>
		';
	}
	$output .= '
	<tr >
		<td style=" height: 27px;">&nbsp;</td>
		<td style=" height: 27px;">Jumlah</td>
		<td style="height: 27px;">&nbsp;</td>
		<td style="height: 27px;">&nbsp;</td>
		<td style="height: 27px;">'.array_sum($total0).'</td>
		<td style="height: 27px;">'.array_sum($total1).'</td>
		<td style="height: 27px;">'.array_sum($total2).'</td>
		<td style="height: 27px;">&nbsp;</td>
	</tr>
';
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>