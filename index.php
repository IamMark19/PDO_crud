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
     <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    
     <script type="text/javascript" src="bootstrap/js/bootstap.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark shadow">
    	<span class="navbar-brand mb-0 h1">To-do-list Apps</span>
    </nav>
    <div class="container mt-5">
    	<?php crud();?>
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
		<?php viewTable(); ?>
    </div>
</body>
</html>