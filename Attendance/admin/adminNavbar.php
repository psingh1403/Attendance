<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <dic class="container">
        <h3><a class="nav-link active" style="color:#fff !important;" href="#">Attendance - Admin</a></h3>
    </dic>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            <!-- <li class="nav-item active">
                <h3><a class="nav-link active" href="#">Attendance - Admin</a></h3>
            </li> -->
            <?php
            if (isset($_SESSION['user_id'])) {
            ?>
                <li class="nav-item active mt-2 mr-4">
                    <a class="nav-link btn btn-success btn-sm" href="summaryReport.php">Summary</a>
                </li>
                <li class="nav-item active mt-2">
                    <a class="nav-link btn btn-danger btn-sm" href="../assets/php/logout.php">Logout</a>
                </li>

            <?php
            } ?>
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li> -->
        </ul>
    </div>
</nav>