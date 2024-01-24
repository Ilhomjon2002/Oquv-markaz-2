<?php

?>
<!-- ============================ COMPONENT DASHBOARD   ================================= -->
<div style="padding-right: 200px;">
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
            <?php foreach ($teachers as $teacher) : ?>
                <tr>
                    <th scope="row"><?php echo "$teacher[id]"; ?></th>
                    <td><?php echo"$teacher[first_name]"; ?></td>
                    <td><?php echo"$teacher[last_name]"; ?></td>
                    <td><?php echo"$teacher[phone_number]"; ?></td>
                    <td><?php echo"$teacher[gender]"; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- ============================ COMPONENT DASHBOARD END   ================================= -->

<!-- ============================ ADD TEACHERS   ================================= -->
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Yangi o'qituvchi qo'shish</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        ...
    </div>
</div>
<!-- ============================ ADD TEACHERS END   ================================= -->