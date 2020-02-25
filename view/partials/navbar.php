<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <!-- logo -->
    <a class="navbar-brand" href="/index.php">
        <img src="https://www.geeksforgeeks.org/wp-content/uploads/gfg_transparent_white_small.png" alt="logo"
            style="width:40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/index.php"><b>Home</b></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/view/club/view_club.php">Club</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/view/league/view_league.php">League</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/view/cup/view_cup.php">Cup</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/view/club_league/view_clubleague.php">Club-League</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/view/national_team/view_national_team.php">National Team</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>

    <!-- navbar right -->
    <div class="nav-item">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown active" style="margin-right: 10px">
                <a class=" nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <?php echo htmlspecialchars($_SESSION["username"]); ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/view/login/welcome.php">Detail</a>
                    <a href="/view/login/reset-password.php" class="dropdown-item">Reset Password</a>
                    <div class="dropdown-divider"></div>
                    <a href="/view/login/logout.php" class="dropdown-item">Sign Out</a>
                </div>
            </li>
            <li>
                <div class="md-form mt-0">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="tableSearch">
                </div>
            </li>
        </ul>
    </div>
</nav>