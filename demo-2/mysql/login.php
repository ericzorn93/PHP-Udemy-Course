<?php

    if (isset($_POST["submit"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];


        $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

        if ($connection) {
            echo "We are connected";
        } else {
            die("Database connection failed.");
        }


    }

?>

<?php include "includes/header.php"; ?>


<div class="container">
    <div class="col-xs-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <input type="submit" value="Submit" class="btn btn-primary" name="submit">
        </form>
    </div>
</div>



<?php include "includes/footer.php"; ?>