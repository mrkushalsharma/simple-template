<?php
	require_once'../connection.php';
    
    if(isset($_POST['submit'])){
		$email=$_POST['email'];
        $password=$_POST['password'];	
        
        $sql="SELECT * FROM users WHERE email='$email' AND password='$password' ";
        $result=$check->query($sql);
        $row=$result->num_rows;
        $data=$result->fetch_assoc();
        //print_r($data);
        if($row>0){
            session_start();
            $_SESSION["loggedin_user"] = $data['id'];
            $x=$_SESSION["loggedin_user"];
            header('location:index.php');
        }
        else{
            header('location:login.php?msg=wrong');
        }
    }