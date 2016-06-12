<!DOCTYPE html>
<html lang="en">

<head>
	<title>TSU | StudNoPicView</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/pace.css">
	<script src="dist/js/jquery-latest.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/js/pace.min.js"></script>
	<script language="javascript">
	$(function() {
        $(this).bind("contextmenu", function(e) {
            e.preventDefault();
        });
    });
</script>

<script language="javascript">
function isNumber(evt) {
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
	}
	return true;
}
</script>

</head>
<body oncontextmenu="return false">

<h1 class="text-center"> TSU | PicViewr </h1>
<p class="text-center" style="color: red;">/ Just a side project with ♥ <br>&nbsp&nbspCoded with boringness by "Kiyen" /</p>
<hr></hr>
<div class="text-center">
<form method="POST" action="" class="text-center">
<input type="tel" name="numero" onkeypress="return isNumber(event)" class="text-center" pattern=".{10,}" minlength="10" maxlength="10" placeholder="Type your 10 digit Student Number" style="position: relative; top: 2px; height: 45px; width: 250px;" required title="Enter a 10 digit Student Number">
<button type="submit" class="btn btn-success" style="font-size: 20px;" >GO<i class="glyphicon glyphicon-chevron-right"></i></button>
</br>
</br>

<?php
include 'quotes.php';
error_reporting(0);
$dir = "get_image/";

$student = $_POST['numero'];
$link = "https://student.tsu.edu.ph/picture.ashx?studentno=";
$final = $link.$student;
$laklak = $dir.$student;
if($student == ""){

}

else if($student == "2012101501"){
	echo "Invalid";
}

else if(file_exists($laklak)){
	echo "<div class='container jumbotron text-center'>";
	echo "<img class='text-center img-responsive' src='$laklak' style='display: block; margin: 0 auto;' />";
	echo "<br>";
	echo "<a class='btn btn-danger' href='$laklak' download='$student.png' ><i class='glyphicon glyphicon-download-alt' style='font-size: 20px;'></i></a>";
	echo "</div>";
	
	echo "<footer class='footer' style='background-color: white;'><div class='container'><h3 class='text-center'>";
	echo "<span style='color: brown;'>Random Motivational:</span>";
	echo "$random";
	echo "</h3></div></footer>";
	
}
else{
	copy($final, $dir.$student);
	echo "<div class='container jumbotron text-center'>";
	echo "<img class='text-center img-responsive' src='$laklak' style='display: block; margin: 0 auto;' />";
	echo "<br>";
	echo "<a class='btn btn-success' href='$laklak' download='$student.png' ><i class='glyphicon glyphicon-download-alt' style='font-size: 20px;'></i></a>";
	echo "</div>";
	
	echo "<footer class='footer text-center' style='background-color: white;'><div class='container text-center'><h3 class='text-center'>";
	echo "<span style='color: brown;'>Random Motivational:</span>";
	echo "$random";
	echo "</h3></div></footer>";
	
	
}
?>


</div>
</div>
</div>
</form>
</br>
</br>

	
</body>
</html>

