<html>
	<head>
		<title> Salary details </title>
	</head>
	<body>
		<form method="post" action="./pgm40_action.php">
			<label> Basic salary
				<input type="number" name="basic">
			</label><br/><br/>
			<label> Dearness allowance
				<input type="number" min="0" max="100" name="da">
			</label><br/><br/>
			<label> Home rent allowance
				<input type="number" min="0" max="100" name="hra">
			</label><br/><br/>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
