<?php
// Start the session and get the data
session_start();
session_unset();
session_destroy();
header("location: ../../admin/index.php");
exit;
?>