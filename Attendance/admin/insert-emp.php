<?php 

include("dbconnection.php");
if (isset($_POST['insertdata'])) {
    $username =  $_POST['username'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $phone = $_POST['phone'];
    $post = $_POST['post'];
    $password =  $_POST['password'];

    $sql = "INSERT INTO `employeelogin`(`username`, `fname`, `lname`, `mobile`, `post`, `password`) VALUES ('{$username}','{$firstname}','{$lastname}','{$phone}','{$post}','{$password}')";
    $result3 = mysqli_query($conn, $sql);
    if ($result3) {
        echo '<script>window.location.replace("../../admin/listEmployee.php");</script>';
    } else {
        echo '<script>alert("unable to insert the data.");</script>';
    }
}

?>
