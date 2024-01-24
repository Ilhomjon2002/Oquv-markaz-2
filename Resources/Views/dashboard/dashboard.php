<!-- ============================ COMPONENT DASHBOARD   ================================= -->
<div class="container text-center">
    <div class="row gy-3">
        <div class="col-6">
            <div style="border-radius: 7px; background: darkgrey;" class="p-3 border ">
                <h4> <?php
                // die;
                 echo $students . "  "; 
                 ?>Students</h4>
            </div>
        </div>
        <div class="col-6">
            <div style="border-radius: 7px;" class="p-3 border bg-light">
                <h4>Lids</h4>
            </div>
        </div>
        <div class="col-6">
            <div style=" border-radius: 7px;" class="p-3 border bg-light">
                <h4>Teachers</h4>
            </div>
        </div>
        <div class="col-6">
            <div style="border-radius: 7px;" class="p-3 border bg-light inline">
                <i class="bi bi-currency-dollar">
                    <h4>Group</h4>
                </i>
            </div>
        </div>
    </div>
</div>
<!-- ============================ COMPONENT DASHBOARD END   ================================= -->

<!-- ============================ ADD STUDENT   ================================= -->
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Yangi lid qo'shish</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        ...
    </div>
</div>
<!-- ============================ ADD STUDENTS END   ================================= -->