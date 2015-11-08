<html>
<head>
	<title>Delete a Course</title>
	<link rel = "stylesheet" type= "text/css" href = "/assets/css/style.css"/>
</head>
	<body>
		<h1>Are you sure you want to delete the following course?</h1>
		<div class = "content">	
			<p>Name: <?= $name ?></p>
			<p>Description: <?= $description?> </p>		
		</div id = "button">
			<button id = "No"><a href = "/"> No </a></button>
			<button id = "destroy"><a href = "/done/<?=$id?>"> Yes! I want to delete this</a></button>
		</div>
	</body>
</html>