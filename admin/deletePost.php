<?php
    require_once'../connection.php';
    $id = $_GET['id'];
    $sql="DELETE FROM posts WHERE id='$id'";
    $result = mysqli_query($check, $sql);
    if ($result) {
        echo "Record deleted successfully";
        header('location:index.php?msg=success');
    } else {
        echo "Error deleting record";
        header('location:index.php?msg=error');
    }