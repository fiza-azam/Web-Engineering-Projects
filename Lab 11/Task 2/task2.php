<!DOCTYPE html>
<html>
<head>
	<title>Load Data</title>
</head>
<body>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" 
		enctype="multipart/form-data">
		<h1>File Handling</h1>
		<input type="file" name="file">
		<br><br>
		<input type="submit" name="submit" value="Upload" class="btn btn-success"><br><br>
	</form>

<?php
	if (isset($_POST['submit'])) {
		$fileName = basename($_FILES["file"]["name"]);
		// Create connection
		$conn=new mysqli("localhost","root","", "test");
		//Check connection
		if($conn->connect_error){
			die("Connection failed:".$conn->connect_error);
		}
		$sql = "LOAD DATA INFILE'". $fileName ."'INTO TABLE data FIELDS ENCLOSED BY '' LINES TERMINATED BY '\n' (Roll_Numbers);";
		$result = $conn->multi_query($sql) or die("<br> Problem inserting rows". $conn->error."<br>");
		echo "Rows inserted";
	}
?>

</body>
</html>