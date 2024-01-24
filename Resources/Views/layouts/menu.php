<!-- ============================ COMPONENT MENU   ================================= -->
<div style="background: rgba(236, 233, 233, 0.705);" class="col-auto col-md-3 col-xl-2 px-sm-2 px-0  " id="dropdown-example">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <div class="dropdown pb-4">
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>

        <!-- <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
        </a> -->
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link align-middle px-0">
                    <i class="bi bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/calendar" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Dars jadvali</span></a>
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-house-door"></i> <span class="ms-1 d-none d-sm-inline">Home</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/students" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Talabalar</span> </a>
            </li>
            <li>
                <a href="/groups" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-layers"></i> <span class="ms-1 d-none d-sm-inline">Guruhlar</span></a>
            </li>
            <li>
                <a href="/teachers" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-mortarboard"></i> <span class="ms-1 d-none d-sm-inline">O'qituvchilar</span></a>
            </li>
            <li>
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-coin"></i> <span class="ms-1 d-none d-sm-inline">Moliya</span></a>
            </li>
            <li>
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-person-gear"></i> <span class="ms-1 d-none d-sm-inline">Profil</span></a>
            </li>
        </ul>
        <hr>
    </div>
</div>
<!-- ============================ COMPONENT MENU END   ================================= -->