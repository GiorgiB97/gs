<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		foreach ($_POST as $val) {
			$val = test_input($val);
		}
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	echo "Hello ".$_POST["nm"]."<br>"."Your email is ".$_POST["em"]."<br>";

	$cars = array
	  	(
			array("Volvo",22,18),
			array("BMW",15,13),
			array("Saab",5,2),
			array("Land Rover",17,15)
	  	);
	echo $cars[0][2]."<br>";
	$rows = count($cars);
	echo "<table style='border:1px solid red'>";
	for ($row = 0; $row < $rows; $row++) {
	    $cols = count($cars[$row]);
	    echo "<tr>";
	    for($col = 0; $col < $cols; $col++ ) {
	    	echo "<td style='border:1px solid red'>".$cars[$row][$col]."</td>";
	    }
	    echo "</tr>";
	    echo "<br>";
	}
	echo "</table>";
	echo "Today is " . date("l") . "<br>";
	date_default_timezone_set("Georgia/New_York");
	echo "The time is " . date("h:i:sa");
 ?>