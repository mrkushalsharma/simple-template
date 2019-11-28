<?php
    require_once'../connection.php';
    
    require_once'checkSession.php';

    $sql="SELECT * FROM posts";
    $result = mysqli_query($check,$sql);
    $rowNumber = mysqli_num_rows($result);
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
                    <table class="table">
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
                        if($rowNumber > 0){ 
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr>
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["title"] ?></td>
                                <td><?php echo $row["description"] ?></td>
                                <td>
                                    <a href="editPost.php?id=<?php echo $row["id"]?>">Edit</a>
                                    <a href ="editPost.php?id=<?php echo $row["id"]?>">Delete</a>
                                </td>
                            </tr>
                        <?php 
                            }
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