<?php
	require_once'../connection.php';
    
    $sql="SELECT * FROM posts";
    $result=mysqli_query($check,$sql);
    $row=mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <body id="page-top">

        <?php include 'navbar.php'; ?>

        <div id="wrapper">

            <!-- Sidebar -->
            <?php include 'sidebar.php'; ?>

            <div id="content-wrapper">
                <div class="container-fluid">
                    <!-- contents-->
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        if($row>0){ ?>
                            <tr>
                                <td><?php $row[0] ?></td>
                                <td><?php $row[1] ?></td>
                                <td><?php $row[2] ?></td>
                                <td>
                                    <a href ="">Edit</a>
                                    <a href ="">Delete</a>
                                </td>
                            </tr>
                        <?php }else{
                            echo "<h1> No data Available</h1";
                        } ?>
                        </tbody>
                    </table>
                </div>
                <!-- Sticky Footer -->
                <?php include 'footer.php'; ?>
            </div>
        </div>
        <!-- /#wrapper -->
        <script src="js/sb-admin.min.js"></script>
    </body>
</html>