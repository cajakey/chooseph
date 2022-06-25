<?php
    $server = "localhost";
    $user = "xdizhfxe_conn";
    $pass = "nM1(VqKwkb8N";
    $db_name = "xdizhfxe_bsit4b";
    $conn = mysqli_connect($server, $user, $pass, $db_name);
    if(!$conn){
        echo "Database connection error" . mysqli_connect_error();
    }
?>
