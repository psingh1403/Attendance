<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
    echo '<script>window.location.replace("index.php");</script>';
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Attendance System</title>
</head>

<body>
<?php include("adminNavbar.php"); ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="insert-emp.php">
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter User Name" name="username">
                        </div>
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                        </div>
                        <div class="form-group">
                            <label for="phone">Mobile</label>
                            <input type="text" class="form-control" id="phone" placeholder="XXXXXXXXXX" name="phone" maxlength="10">
                        </div>
                        <div class="form-group">
                            <label for="post">Post</label>
                            <input type="text" class="form-control" id="post" placeholder="Cook" name="post">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" placeholder="************" name="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="insertdata">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="add-emp-button float-right mt-2"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">+ Add Employee</button></div>
        <table class="table text-center mt-5 listemp-table-one">
            <?php
            include("../assets/php/dbconnection.php");
            $sql = "SELECT * FROM `employeelogin`";
            $result3 = mysqli_query($conn, $sql);
            ?>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">SNo.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Post</th>
                    <th scope="col">View Report</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result3) > 0) {
                    $count = 0;
                    while ($row = mysqli_fetch_array($result3)) {
                        $count = $count + 1;
                ?>
                        <tr>
                            <th scope="row"><?php echo $count; ?></th>
                            <td><?php echo $row['fname'] . " " . $row['lname']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['post']; ?></td>
                            <td><a href="summaryReport.php?empid=<?php echo $row['sno']; ?>" class="btn btn-success btn-sm" target="_blank">View</a></td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>