<div class="navbar-brand-box">
    <!-- Dark Logo-->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="17">
        </span>
    </a>
    <!-- Light Logo-->
    <a href="index.html" class="logo logo-light">
        <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="assets/images/logo-light.png" alt="" height="17">
        </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
        id="vertical-hover">
        <i class="ri-record-circle-line"></i>
    </button>
</div>
<div id="scrollbar">
    <div class="container-fluid">

        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarProduct" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="sidebarProduct">
                    <i class="ri-dashboard-2-line"></i> <span data-key="t-product">Sản phẩm</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarProduct">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{route("admin.product.create")}}" class="nav-link" data-key="t-analytics">
                                Danh sách sản phẩm 
                            </a>
                        </li>
                            <a href="{{route("admin.product.create")}}" class="nav-link" data-key="t-analytics">
                                Thêm sản phẩm mới
                            </a>
                        </li>
                    </ul>
                </div>
            </li> <!-- end Dashboard Menu -->
            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarCategories" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="sidebarCategories">
                    <i class="ri-dashboard-2-line"></i> <span data-key="t-Categories">Danh mục</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarCategories">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{route("admin.category.index")}}" class="nav-link" data-key="t-analytics">
                               Danh sách danh mục  
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("admin.category.create")}}" class="nav-link" data-key="t-analytics">
                               Thêm mới danh mục  
                            </a>
                        </li>
                    </ul>
                </div>
            </li> <!-- end Dashboard Menu -->
        </ul>
    </div>
    <!-- Sidebar -->
</div>

<div class="sidebar-background"></div>