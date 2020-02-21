<!DOCTYPE html>
<html>
<head lang="en">
	<title>File Handling</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<style type="text/css">
	body{
		margin-left: 20px;
	}
</style>
<body>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" 
		enctype="multipart/form-data">
		<h1>File Handling</h1>
		<input type="file" name="file">
		<br><br>
		<input type="submit" name="submit" value="Upload" class="btn btn-success"><br><br>
		<!-- <button type="read" name="read" class="btn btn-info">Read</button>
		<input type="write" name="write" value="Write" class="btn btn-info"><br><br>
		<input type="copy" name="copy" value="Copy" class="btn btn-warning">
		<input type="rename" name="rename" value="Rename" class="btn btn-warning"><br><br>
		<input type="delete" name="delete" value="Delete" class="btn btn-danger" 
		style="margin-left: 100px;"> -->
	</form>

	<?php

		$uploadOk = 0;
		if(isset($_POST['submit'])){
			$fileName = basename($_FILES["file"]["name"]);
			if(is_uploaded_file($_FILES['file']['tmp_name'])){
			fileCheck();
			header("Location:file_handling2.php");
			// echo $uploadOk;
			// define("uploadOk", $uploadOk);
			}
		}
		// echo constant("uploadOk");

		function fileCheck(){
			global $fileName;
			global $uploadOk;			
			$target_dir = "uploads/";
			$target_file = $target_dir.basename($_FILES['file']['name']);
			$uploadOk = 0;
			$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Allow certain file formats
			if($fileType == "txt"){
			    $uploadOk = 1;
			}
			else{
				$uploadOk == 0;
			}

			//check if uploadOK==1 then uploaf file to the server
			if ($uploadOk == 1) {
			    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
			    //$fileName = basename($_FILES["file"]["name"]);
			    $message = $fileName." is Uploaded";
			    //echo "<script type='text/javascript'>alert('$message');</script>";
			} 
			else{
				$message = "Wrong File";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			
		}
	?>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>