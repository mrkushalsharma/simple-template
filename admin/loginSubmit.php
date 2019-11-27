<?php
	require_once'../connection.php';
    
    if(isset($_POST['submit'])){
		$email=$_POST['email'];
        $password=$_POST['password'];	
        
        $sql="SELECT * FROM users WHERE email='$email' AND password='$password' ";
        $result= mysqli_query($check, $sql);
        $data=mysqli_num_rows($result);
        if($data>0){
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION["loggedin_user"] = $row['id'];
            $x=$_SESSION["loggedin_user"];
            header('location:index.php');
        }
        else{
            header('location:login.php?msg=wrong');
        }
    }