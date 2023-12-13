<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Upload Page </title>
	
	<!-- css style  -->
	<link rel="stylesheet" href="css\style.css?rnd=32">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	
</head>

<body>
	
	<div class="wrapper">
		<header> File Uploader </header>
		
		<form action="#">
			<input type="file" class="file-input" name="file" hidden>
			<i class="fas fa-cloud-upload-alt"></i>
			<p> Browser File to Upload </p>
		</form>
		
		<section class="progress-area">
			
		</section>
		
		<section class="uploaded-area">

		</section>
	
	</div>
	
	<script src="js/script.js"></script>
	
</body>

</html>