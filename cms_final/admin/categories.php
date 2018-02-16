<!-- Header -->
<?php include "includes/admin_header.php"; ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>




    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>

                    <div class="col-xs-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input class="form-control" type="text" name="cat_title" id="cat_title" placeholder="Please Add Category">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>
                    </div> <!-- Add Category Form -->

                    <div class="col-xs-6">
                    <?php
                        $query = "SELECT * FROM categories";
                        $select_categories = mysqli_query($connection, $query);
                    ?>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Title</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($select_categories)) {
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];

                                    // Output Category Title Links from Database
                                    echo"<tr>";
                                        echo "<td>{$cat_id}</td>";
                                        echo "<td>{$cat_title}</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    <!--  Footer  -->
<?php include "includes/admin_footer.php"; ?>