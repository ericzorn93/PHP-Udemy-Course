<?php

        include "db.php";
        include "functions.php";

        readRows();

?>

<?php include "includes/header.php"; ?>


<div class="container">
    <div class="col-xs-6">
        <pre>
            <?php readRows(); ?>
        </pre>
    </div>
</div>




<?php include "includes/footer.php"; ?>