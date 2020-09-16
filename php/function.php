<?php
 function crud(){
 	insertT(); 
        deleteT();
        editT();

 }
function insertT(){
 if(!empty($_GET['items'])){
 	$insert = new insert($_GET['items']);
		 	if($insert->insertTask()){
		 		echo "<div class=' col-md-9 alert alert-success alert-dismissible fade show' role='alert'>
		  			<strong>Holy guacamole!</strong> You have Inserted Task Succesfully
		  			</div>";

 	}else{
	echo '<div class=" col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Holy guacamole!</strong> insert task error
		            </div>';
 	}
  }
}

function deleteT(){
 if(!empty($_GET['delete'])){
 	$delete = new delete($_GET['delete']);
		 	if($delete->deleteTask()){
		 		echo "<div class=' col-md-9 alert alert-warning alert-dismissible fade show' role='alert'>
		  			<strong>Holy guacamole!</strong> You have deleted Task Succesfully
		  			</div>";

 	}else{
	echo '<div class=" col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Holy guacamole!</strong> delete task error
		            </div>';
 	}
  }
}

  function editT(){
 if(!empty($_GET['edit'])){
 	$edit = new edit($_GET['edit']);
		 	if($edit->editTask()){
		 		echo "<div class=' col-md-9 alert alert-warning alert-dismissible fade show' role='alert'>
		  			<strong>Holy guacamole!</strong> You have deleted Task Succesfully
		  			</div>";

 	}else{
	echo '<div class=" col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Holy guacamole!</strong> delete task error
		            </div>';
 	}
  }
}


	function viewTable(){
		$view = new view();
		$view->viewData();
        $view->viewCompleteData();
	}

?>