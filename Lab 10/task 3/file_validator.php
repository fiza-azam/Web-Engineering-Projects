<!DOCTYPE html>
<html>
<head>
	<title>File Validator</title>
</head>
<body>

	<h1>Upload File</h1>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"
		enctype="multipart/form-data">
		<input type="file" name="file">
		<br><br>
		<input type="submit" name="submit" value="Upload">
	</form>

	<?php
		if(isset($_POST["submit"])){
			if(is_uploaded_file($_FILES['file']['tmp_name'])){
			fileCheck();
			}
		}

		function fileCheck(){
			$target_dir = "uploads/";
			$target_file = $target_dir.basename($_FILES['file']['name']);
			$uploadOk = 0;
			$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Allow certain file formats
			if(($fileType == "jpg" || $fileType == "png" || $fileType == "pdf") && 
				($_FILES["file"]["size"] <= 2000000)) {
			    $uploadOk = 1;
			}
			else{
				$uploadOk == 0;
			}

			//check if uploadOK==1 then uploaf file to the server
			if ($uploadOk == 1) {
			    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
			    $fileName = basename($_FILES["file"]["name"]);
			    $message = $fileName." is Uploaded";
			    echo "<script type='text/javascript'>alert('$message');</script>";
			} 
			else{
				$message = "Wrong File";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			
		}
	?>

</body>
</html>