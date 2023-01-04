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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <title>Attendance System</title>
</head>

<body>
    <?php include("adminNavbar.php"); ?>

    <?php
    $userID = 0;
    if (isset($_GET['empid'])) {
        $userID = $_GET['empid'];
    }
    ?>

    <div class="container">
        <div class="add-emp-button mt-2 text-center">
            <h4>Report</h4>
        </div>
        <span style="float:right;"><input type="button" class="btn btn-success btn-sm" id="loadtable" value="Refresh Table"></span>
        <table class="table text-center mt-1 listemp-table-two">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody id="table-data">

            </tbody>
        </table>

        <div class="reportForm">
            <form class="form-inline mt-5" action="" method="post">
                <div class="form-group mb-2">
                    <label for="datepicker1">Date From: </label>
                    <input type="text" class="form-control ml-4" id="datepicker1" name="startdate">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="datepicker2">To: </label>
                    <input type="text" class="form-control ml-4" id="datepicker2" name="enddate">
                </div>
                <button type="submit" class="btn btn-primary mb-2" id="findData" name="findData">Find</button>
            </form>
        </div>
        <div class="add-emp-button mt-2 text-center">
            <h4>Summary Report</h4>
        </div>
        <div class="attentanceDateData">
            <table class="table text-center mt-5 listemp-table-one">
                <?php
                include("../assets/php/dbconnection.php");                
                if (isset($_POST['findData']) and $_POST['startdate'] and $_POST['enddate']) {
                    $user_id = $userID;
                    $startdate = $_POST['startdate'];
                    $enddate = $_POST['enddate'];
                    $sql = "select sum(if(Attendancesymbole='P',1,0)) as Present, sum(if(Attendancesymbole='A',1,0)) as Absent, sum(if(Attendancesymbole='HF',1,0)) as halfday, sum(if(Attendancesymbole='SL',1,0)) as sickleave, sum(if(Attendancesymbole='HO',1,0)) as Holiday, sum(if(Attendancesymbole='PL',1,0)) as payleave, sum(if(Attendancesymbole='F',1,0)) as Festival, count(Attendancesymbole) as total from attendance where userid = {$user_id} AND date >= '{$startdate}' AND date <= '{$enddate}'";
                    $result = mysqli_query($conn, $sql) or die("sql query faild");
                    $row = mysqli_fetch_assoc($result);

                ?>
                    <tbody id="attendance-table-data-count">
                        <tr>
                            <td>P</td>
                            <td>Present</td>
                            <td><?php echo $row['Present']; ?></td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>Absent</td>
                            <td><?php echo $row['Absent']; ?></td>
                        </tr>
                        <tr>
                            <td>HF</td>
                            <td>Half day</td>
                            <td><?php echo $row['halfday']; ?></td>
                        </tr>
                        <tr>
                            <td>SL</td>
                            <td>Sick Leave</td>
                            <td><?php echo $row['sickleave']; ?></td>
                        </tr>
                        <tr>
                            <td>H0</td>
                            <td>Holiday</td>
                            <td><?php echo $row['Holiday']; ?></td>
                        </tr>
                        <tr>
                            <td>F</td>
                            <td>Festival</td>
                            <td><?php echo $row['Festival']; ?></td>
                        </tr>
                        <tr>
                            <td>PL</td>
                            <td>Pay Leave</td>
                            <td><?php echo $row['payleave']; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><?php echo $row['total']; ?></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

    <!-- jQuery datepicker plugin -->
    <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $("#loadtable").on("click", function(e) {
                var userid = <?php echo $userID; ?>;
                $.ajax({
                    url: "data-table-load.php",
                    type: "POST",
                    data: {
                        user_ID: userid
                    },
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });
            });
        });

        $(function() {
            $("#datepicker1").datepicker({
                dateFormat: "dd/mm/yy"
            });
        });

        $(function() {
            $("#datepicker2").datepicker({
                dateFormat: "dd/mm/yy"
            });
        });
    </script>


</body>

</html>

<!-- SELECT COUNT("A") FROM `attendance` WHERE userid=1 AND Attendancesymbole = "A" AND date >= '01/01/23' AND date <= '31/01/23'; -->