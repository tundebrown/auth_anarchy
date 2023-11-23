<!-- Sidebar -->
<nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <div class="sidebar-header">
            <div class="sidebar-brand">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="https://storage.googleapis.com/anarchy-game-anarchy_1141183825/static/images/logo_with_glow.png" width="100%" alt="" srcset="">
                </a>
            </div>
        </div>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="registered_users.php">Registered For Mints</a></li>
        <li><a href="contact_list.php">Contact Message</a></li>
        <li><a href="redirect.php">Redirect URL</a></li>
        <li class="dropdown">
            <a href="#works" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownUser2">Edit <span class="caret"></span></a>
            <ul class="dropdown-menu animated fadeInLeft" role="menu" aria-labelledby="dropdownUser2">
                <div class="dropdown-header">Website CRUD</div>
                <li><a href="#pictures">About</a></li>
                <li><a href="#videos">Team</a></li>
                <li><a href="#books">Advisors</a></li>
                <li><a href="#books">Social Links</a></li>
            </ul>
        </li>
    </ul>



    <div class="dropup" style="position:absolute; bottom:4%; left:4%;">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://storage.googleapis.com/anarchy-game-anarchy_1141183825/static/images/avater.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Admin</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="logout.php?logout=true">Sign out</a></li>
        </ul>
    </div>
</nav>