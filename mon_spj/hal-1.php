<!DOCTYPE html>
<html>
<head>
	<title>Halamanan awal</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<form action="" method="POST" id="frm_pengantar_nominatif">
  No SPP:
  <input type="text" name="no_spp" id="no_spp" >
  <br> <br>
  Uraian Kegiatan:
  <input type="text" name="ur_keg" id ="ur_keg" >
  <br> <br> 
   MAK:
  <select id="sel_mak">
  <option value="525115">Transport</option>
  <option value="525111">Honor</option>
  <option value="525111">Lembur</option>
  <option value="525113">Gaji Non PNS (TKT)</option>
  <option value="525113">Gaji Pramubakti</option>
  <option value="525112">UM Non PNS</option>
  <option value="51129">UM PNS</option>
</select>
  <br> <br>
   Jumlah Kotor:
  <input type="text" name="jml_kot" id="jml_kot">
  
  %:
  <input type="text" name="pajak" id="pajak">
  <br> <br>
  Pajak:
  <input type="text" name="pajak2" id="pajak2">
  <br> <br>
   Jumlah Bersih:
  <input type="text" name="jml_bersih" id="jml_bersih">
  <br> <br>
  status:
  <select id="status">
  <option value="0">sedang verifikasi</option>
  <option value="1">sudah verifikasi</option>
  <option value="2">dicairkan</option>
  <option value="3">Sudah dibayarkan</option>
  <br>
</select>
  <input type="submit" value="proses" id="proses">
</form> 


<script type="text/javascript">
$(document).ready(function(){

 $("#jml_kot,#pajak").keyup(function(){
   var a = $("#jml_kot").val();
    var b = $("#pajak").val();
    var c = parseInt(a) * (parseInt(b) / 100);
    var d = parseInt(a) - parseInt(c) ;
    $("#pajak2").val(c);
    $("#jml_bersih").val(d);
});

 $('#proses').click(function(e){
 	e.preventDefault();

var no_spp = $("#no_spp").val();
var ur_keg=$("#ur_keg").val();
var mak = $("#sel_mak").val();
var jml_kot=$("#jml_kot").val();
var jml_bersih=$("#jml_bersih").val();
var pajak =$("#pajak").val();
var pajak2 =$("#pajak2").val();
var tgl_spp = $("#tgl_spp").val();



// AJAX code to send data to php file.
    $.ajax({
        type: "POST",
        url: "insert-data.php",
        data: {no_spp:no_spp,
            	ur_keg:ur_keg,
            	mak: mak,
        	  jml_kot:jml_kot,
        	  jml_bersih:jml_bersih,
        	  pajak2 : pajak2,
        	  tgl_spp : tgl_spp
     },
       dataType: "JSON",
        success: function(data) {
         //$("#message").html(data);
       // $("p").addClass("alert alert-success");
    	console.log(data);
      	alert(data);
  
        },
        error: function(err) {
        alert(err);
        }
    });
  });
 });
</script>
</body>
</html>