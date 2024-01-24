<!DOCTYPE html>
<html lang="en">
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php include_once 'layouts/head.php' ?>

<body>

    <div>
        <?php include_once 'layouts/header.php' ?>
    </div>

    <div style=" position: fixed;"  class="container-fluid">
        <div class="row flex-nowrap">
            <?php include_once "layouts/menu.php" ?>
            <div style="padding-top: 20px;" class="col">
                <?php
                echo $content;
                ?>
            </div>
        </div>
    </div>

    <!-- <div class="col ">
        <?php
        // echo $content;
        ?>
    </div> -->
    <?php
    // include_once 'layouts/footer.php' 
    ?>

</body>

<?php include_once 'layouts/foot.php' ?>

</html>