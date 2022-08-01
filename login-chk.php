<?php
    session_start();
    include_once("./db.php");
    $query = "select * from `users` where id='{$_POST['id']}' and pw='{$_POST['pw']}'";  
    echo $query;
    $res = $con -> query($query);
    $row = $res -> fetch_array();
    if(isset($_SESSION['id'])) {
        echo "<script>location.href='./index.php'</script>";
    }
    if($row) {
        $_SESSION['id'] = $row['id'];
        echo "<script>alert('Login success!');</script>";
        echo "<script>location.href='./index.php'</script>";
    } else {
        echo "<script>alert('Invalid ID or PW!');</script>";
        echo "<script>location.href='./index.php'</script>";
    }
?>