<?php
    require_once'../connection.php';
    
    if(isset($_POST['submit'])){
		$title=$_POST['title'];
        $description=$_POST['description'];	
        
        $sql = "INSERT INTO posts(title,description)
                VALUES('$title','$description')";
                
        $query = mysqli_query($check,$sql);

		if($query){
			header('location:index.php?post=added');
		}
		else
			echo "error while adding new Post";
    }