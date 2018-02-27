<!DOCTYPE html>
<html>
<head>
	<title>MOnths yey</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	$year = date('y');
	$feb;
	if ($year % 4 ==0) {
		$feb = 29;
	} else {
		$feb = 28;
	}
	 
	$months = [
		"January" => 31,
		"February" => $feb,
		"March" => 31,
		"April" => 30,
		"May" => 31,
		"June" => 30,
		"July" => 31,
		"August" => 31,
		"September" => 30,
		"October" => 31,
		"November" => 30,
		"December" => 31
	];
	function press($montharrays){
		foreach ($montharrays as $month => $days) {
			$montharrays = ucfirst($month);
			echo "<option value='$montharrays'>$montharrays </option>";
		}
	}

	?>
	<div class="container-fluid">
		<div class="jumbotron text-center woo">
			<form action="months.php" method="post">
			<div class="form-group">
				<h1>Choose your Month</h1>
				<span class="form-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
				<select class="Form-control" name="month_dropdown">
					<?php 
					press($months);
					?>
				</select>

			</div>
			<input class="btn btn-success" type="submit" name="submit">	
		</form>
		
	</div>
		</div>
		
	<?php 
		if (isset($_POST['submit'])){
			$monthSelected = $_POST['month_dropdown'];
			$date = $months[$monthSelected];

			if ($monthSelected !== "February") {
				echo "<h1> This month of $monthSelected  has $date days</h1>";
			}
			 else {
			 	if ($date==29) {
			 		echo "<h1>This is a leap year</h1>";
			 	}
			 	else{
			 		echo "<h1>Its $monthSelected lets celebrate</h1>";
			 	}

			}

		}

	 ?>

</body>
</html>