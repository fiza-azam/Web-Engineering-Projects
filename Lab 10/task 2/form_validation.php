<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
</head>
<body>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" 
		enctype="multipart/form-data">
		<label>Name:
			<input type="text" name="name">
		</label><br><br>

		<label>Email:
			<input type="Email" name="email" required>
		</label> <br><br>

		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$email = $_POST["email"];
			validate_email($email);
		}

		function validate_email($email){
			
			$firstchar = substr($email, 0, 1);
			if(!(is_numeric($firstchar)) && !(strlen($email) > 20) && 
				(substr($email,-4) == '.com' || substr($email,-7) =='.edu.pk' 
				|| substr($email,-7) == '.co.uk')){
					
					header("Location: validate_access.php");
			}
			else{
				$message = "Wrong Email";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
	?>

</body>
</html>