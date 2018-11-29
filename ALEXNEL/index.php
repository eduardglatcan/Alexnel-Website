<?php
ob_start();
include("includes/header.php");
$buffer = ob_get_contents();
ob_end_clean();

$pageTitle = "Alexnel - Development";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $pageTitle . '$3', $buffer);

echo $buffer;
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a href="index.html" class="navbar-brand">Blogen</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2"><a href="index.html" class="nav-link active">Dashboard</a></li>
                <li class="nav-item px-2"><a href="posts.html" class="nav-link">Posts</a></li>
                <li class="nav-item px-2"><a href="categories.html" class="nav-link">Categories</a></li>
                <li class="nav-item px-2"><a href="users.html" class="nav-link">Users</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user"></i>Welcome Brad
                    </a>
                    <div class="dropdown-menu">
                        <a href="profile.html" class="dropdown-item">
                            <i class="fas fa-user-circle"></i>Profile
                        </a>
                        <a href="settings.html" class="dropdown-item">
                            <i class="fas fa-cog"></i>Settings
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="login.html" class="nav-link">
                        <i class="fas fa-user-times"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
<?php


?>

