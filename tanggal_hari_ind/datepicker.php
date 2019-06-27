<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ilmudetil.css">
	
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css"/>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/moment-with-locales.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	
	<script src="assets/js/bootstrap-datetimepicker.js"></script>
	
	
</head>
<body>
				</div>
				<div class="form-group">
					<div class="input-group date" id="tgl4">
						<input type="text" class="form-control" placeholder="Rabu, 21 Desember 2018"/>	
							<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
					</div>
				</div>
<script>
$(function() {
  // defualt script for datetimepicket
   
  $('#tgl3').datetimepicker({
	   locale:'id',
	   format:'ddd,DD/MMM/YYYY'
   });
  $('#tgl4').datetimepicker({
	   locale:'id',
	   format:'dddd,DD MMMM YYYY'
   });
   
   
  
    

});

</script>	
	
</body>
</html>
