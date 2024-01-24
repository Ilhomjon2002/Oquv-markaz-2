<?php

?>

<!-- <div class="float-start">
    <h1>Talabalar</h1>
</div> -->

<?php
var_dump(__DIR__);
// include "/register";
include __DIR__."/../components/offacanvas-component/offacanvas-component.php";
// include 'E:/php proektlar/Oquv markaz/good/Resources/Views/components/offacanvas-component/offacanvas-component.php';
?>


<div class="container justify-content-between">
    <div class="float-start">
        <h1>Talabalar</h1>
    </div>



    <!-- ============================ ADD STUDENT   ================================= -->
    <div class="float-end">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Yangisini qo'shish</button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                ...
            </div>
        </div>
    </div>

    <!-- ============================ ADD STUDENTS END   ================================= -->
    <br><br>
    <hr>
</div>


<!-- <hr> -->
<!-- ============================ COMPONENT DASHBOARD   ================================= -->
<!-- <div class="min-vw-1 mh-100 bg-dark border">salom</div> -->
<div
class="p-10"
>
    <table class="table table-hover">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Phone number</th>
                <th scope="col">Gender</th>
            </tr>
        </thead>

        <tbody>
            <?php
            // var_dump($users);
            // die;
            foreach ($users as $user) : ?>
                <tr>
                    <th scope="row"><?php echo "$user[id]"; ?></th>
                    <td><?php echo "$user[first_name]"; ?></td>
                    <td><?php echo "$user[last_name]"; ?></td>
                    <td><?php echo "$user[phone_number]"; ?></td>
                    <td><?php echo "$user[gender]"; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- ============================ COMPONENT DASHBOARD END   ================================= -->