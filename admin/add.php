<?php
    require_once'../connection.php';

    require_once'checkSession.php';
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
                    <form action="addPost.php" method="POST">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" require/>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" require></textarea>
                        </div>
                        <button class="btn btn-primary " name="submit" type="submit" value="addPost">Add Post</button> 
                    </form>
                </div>
                <!-- Sticky Footer -->
                <?php include 'footer.php'; ?>
            </div>
        </div>
        <!-- /#wrapper -->
        <script src="js/sb-admin.min.js"></script>
    </body>
</html>