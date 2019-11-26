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
                            <tr>
                                <td>1</td>
                                <td>this is title</td>
                                <td>This is Description</td>
                                <td>
                                    <a href ="">Edit</a>
                                    <a href ="">Delete</a>
                                </td>
                            </tr>
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