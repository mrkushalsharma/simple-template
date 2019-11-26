<?php

// Initialize the session
session_start();
$_SESSION['loggedin_user'] =null;

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Register</title>

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="POST" action="registerSubmit.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
                  <label for="name">Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required="required">
                    <label for="email">Email address</label>
                </div>
              </div>
            </div>
          </div>
         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
          <button class="btn btn-primary btn-block" name="submit" type="submit" value="Register">Register</button> 
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
