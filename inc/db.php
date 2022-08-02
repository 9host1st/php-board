<?php
    $HOST = "localhost";
    $USER = "root";
    $PW = "apmsetup";
    $DB = "gosegu";
    $con = new mysqli($HOST, $USER, $PW, $DB);
    if($con -> connect_errno) {
        printf("Connection Failed: %s\n", $con->connect_error());
        exit(1);
    }
?>