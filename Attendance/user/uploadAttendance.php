<?php
session_start();
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
    <?php include("userNavbar.php"); ?>

    <table class="table userAtt-table">
        <thead class="thead-dark text-center">
            <tr>
                <th scope="col"><button class="button-temp"><- Back</button></th>
                <th scope="col"><span id="dayName"></span> <br><span id="completedate"></span></th>
                <th scope="col"><button class="button-temp">Next -></button></th>
            </tr>
            <tr>
                <?php
                include("../assets/php/dbconnection.php");
                $res = mysqli_query($conn, "SELECT * FROM `employeelogin`");
                if (mysqli_num_rows($res) > 0) {
                    $row = mysqli_fetch_array($res);

                ?>
                    <th scope="col"></th>
                    <th scope="col"><?php echo $row['fname']; ?></th>
                    <th scope="col"></th><?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <th scope="row">1</th> -->
                <td></td>
                <td>
                    <form class="text-center" method="post">
                        <div class="presentTable">
                            <table class="table text-center">
                                <tr>
                                    <div class="form-check">
                                        <td>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Present" checked>
                                        </td>
                                        <td>
                                            P
                                        </td>
                                        <td>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Present
                                            </label>
                                        </td>
                                    </div>
                                </tr>

                                <tr>
                                    <div class="form-check">
                                        <td>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Absent">
                                        </td>
                                        <td>
                                            A
                                        </td>
                                        <td>
                                            <label class="form-check-label" for="exampleRadios2">
                                                Absent
                                            </label>
                                        </td>
                                    </div>
                                </tr>

                                <tr>
                                    <div class="form-check">
                                        <td>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Half day">
                                        </td>
                                        <td>
                                            HF
                                        </td>
                                        <td>
                                            <label class="form-check-label" for="exampleRadios3">
                                                Half day
                                            </label>
                                        </td>
                                    </div>
                                </tr>

                                <tr>
                                    <div class="form-check">
                                        <td>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Sick Leave">
                                        </td>
                                        <td>
                                            SL
                                        </td>
                                        <td>
                                            <label class="form-check-label" for="exampleRadios3">
                                                Sick Leave
                                            </label>
                                        </td>
                                    </div>
                                </tr>

                                <tr>
                                    <div class="form-check">
                                        <td>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Holiday">
                                        </td>
                                        <td>
                                            HO
                                        </td>
                                        <td>
                                            <label class="form-check-label" for="exampleRadios3">
                                                Holiday
                                            </label>
                                        </td>
                                    </div>
                                </tr>

                                <tr>
                                    <div class="form-check">
                                        <td>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Festival">
                                        </td>
                                        <td>
                                            F
                                        </td>
                                        <td>
                                            <label class="form-check-label" for="exampleRadios3">
                                                Festival
                                            </label>
                                        </td>
                                    </div>
                                </tr>

                                <tr>
                                    <div class="form-check">
                                        <td>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Pay Leave">
                                        </td>
                                        <td>
                                            PL
                                        </td>
                                        <td>
                                            <label class="form-check-label" for="exampleRadios3">
                                                Pay Leave
                                            </label>
                                        </td>
                                    </div>
                                </tr>
                            </table>
                        </div>
                        <!-- <a href="" class="btn btn-primary btn-md" name="attenbutton">Save</a> -->
                        <!-- <a href="../index.php" class="btn btn-primary btn-md">Home</a> -->
                        <button type="submit" class="btn btn-primary btn-md" name="attenbutton">save</button>
                    </form>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>


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

    <script>
        const date = new Date();
        let day = date.getDate();
        let month = date.toLocaleString('default', {
            month: 'long'
        });
        let year = date.getFullYear();
        const weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        var fieldNameElement = document.getElementById('dayName');
        var r = weekdays[date.getDay()];
        fieldNameElement.innerHTML = r;
        let currentDate = `${day} ${month} ${year}`;
        var comdate = document.getElementById('completedate');
        comdate.innerHTML = currentDate;
    </script>
</body>

</html>

<?php

include("../assets/php/dbconnection.php");

if (isset($_POST["attenbutton"])) {
    $user_id = $_SESSION['user_id'];
    $day = date("l");
    $date = date("d/m/y");
    $atten = $_POST['exampleRadios'];
    $sql1 = "SELECT * FROM `attendance` WHERE userid = $user_id and date = '$date'";
    $result = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0) {
        echo '<script>alert("you have already updated your Attendance.");</script>';
    } else {
        $sql = "INSERT INTO `attendance`(`userid`, `Attendancesymbole`, `date`, `day`) VALUES ({$user_id},'{$atten}','{$date}','{$day}')";
        $result3 = mysqli_query($conn, $sql);
        if ($result3) {
            echo '<script>alert("Attendance uploaded successfully");</script>';
        } else {
            echo '<script>alert("try again after sometime");</script>';
        }
    }
}

?>