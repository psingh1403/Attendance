<?php 

include("../assets/php/dbconnection.php");
$user_id = $_POST['user_ID'];
$sql = "SELECT * FROM `attendance` WHERE userid = {$user_id} ORDER BY date asc";
$result = mysqli_query($conn,$sql) or die("sql query faild");
$output = "";
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $output .=  "<tr>
        <th>{$row["date"]}</th>
        <td>{$row["Attendancesymbole"]}</td>
        </tr>";
    }
    echo $output;
    mysqli_close($conn);
}else{
    echo "<h2>No record Found.</h2>";
}

?>