<?php  
include("koneksi.php");

$no_spp = $_POST['no_spp'];
$ur_keg = $_POST['ur_keg'];
$mak = $_POST['mak'];
$jml_kot=$_POST['jml_kot'];
$jml_bersih=$_POST['jml_bersih'];
$pajak2 =$_POST['pajak2'];
$tgl_spp = $_POST['tgl_spp'];

$sql = "INSERT INTO pengantar_nominatif(`no_spp`, `uraian_kegiatan`,`mak`, `jml_kotor`,`pajak`,`jml_bersih`,`tgl_spp`)
VALUES ('".$no_spp."', '".$ur_keg."','".$mak."', '".$jml_kot."','".$pajak2."','".$jml_bersih."','".$tgl_spp."')";
$run_sql = mysqli_query($conn,$sql);

if ($run_sql) {
	echo "1";
}else{
	echo "2";
}