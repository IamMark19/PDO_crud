<?php
class view extends config{
	public function viewData(){
        $con=$this->con();
        $sql="SELECT * FROM `tbl_todolist` WHERE `status` = 'PENDING' ";
        $data=$con->prepare($sql);
        $data->execute(); 
        $result= $data->fetchAll(PDO::FETCH_ASSOC);
       
        echo "<h3 class='mb-4'>Pending Task</h3>
        <table class='table table-dark table-striped table-sm'>
        <thead> 
        		<tr>
        			<th>Task Item</th>
        			<th>Action</th>
        			</tr>
        </thead> 
        <tbody>";
        foreach ($result as $data) {
        	echo "<tr>";
        	echo "<td>$data[item]</td>
        	<td>
        	<a class='btn btn-info btn-sm' href='index.php?edit=$data[id]'>mark as completed </a>
        	<a class='btn btn-danger btn-sm' href='index.php?delete=$data[id]'>Delete </a>
        	</td>";
        	echo "</tr>";
        }
		echo"</tbody>
        </table>";
    }

    public function viewCompleteData(){
        $con=$this->con();
        $sql="SELECT * FROM `tbl_todolist` WHERE `status` = 'COMPLETED' ";
        $data=$con->prepare($sql);
        $data->execute(); 
        $result= $data->fetchAll(PDO::FETCH_ASSOC);
       
        echo "<h3 class='mb-4 mt-4'>Complete Task</h3>
        <table class='table table-dark table-striped table-sm'>
        <thead> 
        		<tr>
        			<th>Task Item</th>
        			<th>Date Completed</th>
        			</tr>
        </thead>
        <tbody>";
        foreach ($result as $data) {
        	echo "<tr>";
        	echo "<td>$data[item]</td>
        	<td>
        	$data[date_completed]
        	</td>";
        	echo "</tr>";
        }
		echo"</tbody>
        </table>";
    }

}
?> 