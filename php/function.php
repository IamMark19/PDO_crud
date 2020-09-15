<?php
 
function insertT(){
 if(!empty($_GET['items'])){
 	$insert = new insert($_GET['items']);
 	if($insert->insertTask()){
 		echo " task inserted succesfully";
 	}else{
 		echo "task failed";
 	}
  }
}
?>