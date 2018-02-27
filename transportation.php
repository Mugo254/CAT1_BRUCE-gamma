<!DOCTYPE html>
<html>
<head>
	<title>Transportation</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$meansoftransport = ["Automobile", "jet", "train", "ferry"];
		if (isset($_POST['submit'])) {
		$fuzz= $_POST['text'];
		$replace= str_replace(",", "", $fuzz);
		$add = explode(" ", $replace);
		

		
	foreach ($add as $key => $value) {
			array_push($meansoftransport, $value);

		}


		}

		echo "<h4>This is a list of some common means of transportation:</h4>";
		echo "<ol>";
		foreach ($meansoftransport as $key => $value) {
			echo "<li>$value</li>";
		}
		echo "</ol>";

	?>

	<div class="container ping">
		<div class="jumbotron text-center yui">
			<form role="form" method="post" action="transportation.php">
				<div class="form-group">
					<label for="add"> Add transportations..</label><br>
					<input type="text" name="text" placeholder="Your Transporation">
				</div>
				<input class="btn btn-info" type="submit" name="submit">
			</form>
		</div>
	</div>


	<?php
	
	?>
</body>
</html>
