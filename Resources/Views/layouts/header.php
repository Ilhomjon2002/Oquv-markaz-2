<?php

?>
<header style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
    <nav style="background: rgba(236, 233, 233, 0.705);" class="navbar navbar-expand-lg bg-body-tertiary">
        <!-- <div class="container-fluid"> -->
        <!-- <a class="navbar-brand" href="#"></a> -->
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
        <div class="container-fluid">
            <form name="search" method="get" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="right-side">
                <?php echo $_SESSION['first_name'] . ""; ?>
                <?= $_SESSION['last_name']; ?>
                <!-- <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> -->
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <!-- <span class="d-none d-sm-inline mx-1"></span> -->
                <!-- </a> -->
                <br>
                
                <div>
                    <a class="logout"  href="/logout" >
                        Logout<i class="fs-4 bi-box-arrow-in-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </nav>


</header>