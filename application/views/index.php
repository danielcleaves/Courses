<html>
<head>
	<title>Courses</title>
	<meta charset ="UTF-8">
	<meta name = "description" content = "Ninja Gold Game">
	<meta name = "author" comtent = "Daniel Cleaves">
	<meta name = "viewport" content = "width-device-width, initial-scale = 1.0">
	<link rel = "stylesheet" type= "text/css" href = "/assets/css/stylesheet.css"/>
	
</head>

	<body>
		<h1>Add a new course</h1>
		<form action = "add" method = "post">
			<div id = "name">
				<h2>Name:</h2><input type = 'text' name = "name">
			</div>
			<div id = "description">
				<h2>Description:</h2><input type = 'text' name = "description">
			</div>
			<input id = "btn" type = 'submit' value = 'Add'/>
		</form>

		
		<table>
			<h1>Courses</h1>
			<thead>
				<tr>
					<th>Course Name</th>
					<th>Description</th>
					<th>Date Added</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($show as $course) { ?>
				<tr>
					<td><?= $course['name'] ?></td>
					<td><?= $course['description'] ?></td>
					<td><?= $course['created_at'] ?></td>
					<td> <button><a href = "/destroy/<?=$course['id'] ?>"> Remove</a></button></td>
				</tr>
				<?php } ?>
				</tbody>
		</table>


	</body>
</html>