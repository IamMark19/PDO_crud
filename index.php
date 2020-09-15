<?php 
require_once 'php/init.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
     <script type="text/javascript" src="bootstrap/js/bootstap.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark shadow">
    	<span class="navbar-brand mb-0 h1">To-do-list App</span>
    </nav>
    <div class="container mt-5">
    	<?php insertT(); ?>
     	<form action="" method="get">
    		<div class="row">
    			<div class="col-md-9 form-group">
    				<input class="form-control" type="text" name="items" placeholder="Insert a new task" required>
    			</div>
    			<div class="col-md">
    				<input class="btn btn-success" type="submit" value="add task"/>
    			</div>
    		</div>
    	</form>
    	
    </div>
</body>
</html>