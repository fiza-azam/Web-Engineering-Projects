<!DOCTYPE html>
<html>
<head>
	<title>File Handling</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<style type="text/css">
	body{
		margin-left: 20px;
	}

	form button{
		width: 200px;
	}
</style>

<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" 
		enctype="multipart/form-data">
		<h1>File Handling</h1><br>
		<button type="read" name="read" class="btn btn-info btn-lg">Read</button>
		<button type="button" name="writeModal" class="btn btn-info btn-lg" data-toggle="modal" data-target="#writingModal">Write</button><br><br>
		<button type="copy" name="copy" class="btn btn-warning btn-lg">Copy</button>
		<button type="button" name="renameModal" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#renameModal">Rename</button><br><br>
		<button type="delete" name="delete" class="btn btn-danger btn-lg" 
		style="margin-left: 100px;">Delete</button>
	</form>

	<!-- Modal for writing -->
	<div class="modal fade" id="writingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	      <form method="get">
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Write Your Text Here</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textArea"></textarea>

		    <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button write" name="write" class="btn btn-primary">Save</button>
	      </div>
		  </div>
		</form>
	      </div>
	    </div>
	  </div>
	</div>

		<!-- Modal for renaming -->
	<div class="modal fade" id="renameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	      <form method="get">
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Write Your Text Here</label>
		    <input class="form-control" type="text" name="newName" placeholder="Enter Name...">

		    <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button rename" name="rename" class="btn btn-primary">Rename</button>
	      </div>
		  </div>
		</form>
	      </div>
	    </div>
	  </div>
	</div>

<?php
	//File Reading
	if(isset($_POST['read'])){
			$files = scandir("uploads");
			$name = $files[2];
			$myfile = fopen("uploads/".$name, "r") or die("Unable to open file!");
			echo fread($myfile,filesize("uploads/".$name));
			fclose($myfile);
	}

	//File Writing
	if(isset($_GET['write'])){
		//getting the text to write
		$text = $_GET['textArea']."\n";

		$files = scandir("uploads");
		$name = $files[2];
		$myfile = fopen("uploads/".$name, "w") or die("Unable to open file!");
		fwrite($myfile, $text);
		fclose($myfile);
	}

	//File Copying
	if(isset($_POST['copy'])){
		$count = 0;
		$count = $count + 1;
		$files = scandir("uploads");
		$name = $files[2];
		$str = trim($name, ".txt");
		echo "$str";
		copy("uploads/".$name, "uploads/".$str.$count.".txt");
	}

	//File Renaming
	if(isset($_GET['rename'])){
		//getting the text to write
		$text = $_GET['newName'];
		$text = trim($text, ".txt");
		echo($text);
		$files = scandir("uploads");
		$name = $files[2];
		rename("uploads/".$name, "uploads/".$text.".txt");
	}

	//File Deletion
	if(isset($_POST['delete'])){
		$files = scandir("uploads");
		$name = "uploads/".$files[2];
		unlink($name);
	}


	
?>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>