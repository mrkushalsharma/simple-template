<?php
	require_once '../connection.php';
	if(isset($_POST['submit'])){

		$name=$_POST['name'];

		$email= $_POST['email'];
		$password= $_POST['password'];
		$confirmPassword= $_POST['confirmPassword'];
		if($password != $confirmPassword){
			echo "Password Wrong !!";
			die();
		}
		$sql = "INSERT INTO users(name,email,password)
				VALUES('$name','$email','$password')";

		$query = mysqli_query($check,$sql);

		if($query){
			header('location:login.php?registration=success');
		}
		else
			echo "Registration Failed !!";

    }