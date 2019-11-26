<?php
	include '../connection.php';

	if(isset($_POST['btnSubmit'])){

		$name=$_POST['name'];
		$email= $_POST['email'];
		$password= $_POST['password'];
		$confirmPassword= $_POST['confirmPassword'];

		$sql = "INSERT INTO users(name,email,password)
				VALUES('$name','$email','$password')";

		$query = mysqli_query($check,$sql);

		if($query){
			header('location:login.php?registration=success');
		}
		else
			echo "Registration Failed !!";

    }