<!DOCTYPE html>
<html>
<head>
	<title>search</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
search 	
<input type="text" name="search_text" id="search_text">
<button id="proses">cari</button>
<div id="result"></div>

<script>
$(document).ready(function(){
	//load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch_pengantar_nominatif.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#proses').click(function(){
		var search = $("#search_text").val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>


</body>
</html>