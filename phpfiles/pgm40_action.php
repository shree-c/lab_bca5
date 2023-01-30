<?php
  $server = "localhost";
  $password = "";
  $username = "root";
  $dbname = "test";
  $conn = mysqli_connect($server, $username, $password, $dbname);

  if (!$conn) {
    echo "couldn't connect to database";
  } else {
	if (isset($_POST['basic']) && isset($_POST['da']) && isset($_POST['hra'])) {
		$basic = intval($_POST['basic']);
		$da = intval($_POST['da']);
		$hra = intval($_POST['hra']);
		echo "<h2>basic: $basic    dearness allowance: $da   house rent allowance: $hra </h2>";
		$total = $basic + ($da / 100) * $basic + ($hra / 100) * $basic;
		echo "total salary = " . $total . "</br>";
		$sql = "INSERT INTO emp_salary (basic, da, hra) VALUES ('$basic', '$da', '$hra')";
		if (mysqli_query($conn, $sql)) {
			echo "added values to the database ";
			echo '<a href="pgm40.php"> go back </a>';
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	} else {
		echo "needed fields doesn't exist";
	}
  }
?>
