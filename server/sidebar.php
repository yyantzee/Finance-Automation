        <ul class="navbar-nav bg-black sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="logo.svg" alt="" class="h-10">
                </div>
                <div class="sidebar-brand-text mx-2 text-xl">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if ($page == "Home") echo "active"; ?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-chart-line"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?php if ($page == "Inbox") echo "active"; ?>">
                <a class="nav-link collapsed" href="tables.php">
                    <i class="fas fa-envelope"></i>
                    <span>Inbox</span>
                </a>
            </li>

            <li class="nav-item <?php if ($page == "Resolved") echo "active"; ?>">
                <a class="nav-link collapsed" href="resolved.php">
                    <i class="fas fa-envelope-open"></i>
                    <span>Resolved</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item <?php if ($page == "Career") echo "active"; ?>">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-user-tie"></i>
                    <span>Career</span>
                    <span class=" bg-white text-black px-2 rounded-lg font-bold">Coming Soon</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ACCOUNT
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?php if ($page == "Setting") echo "active"; ?>">
                <a class="nav-link collapsed" href="setting.php">
                    <i class="fas fa-cog"></i>
                    <span>Account Setting</span>
                </a>

                <!-- Nav Item - Charts -->

                <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>