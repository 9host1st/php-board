<?php
    include_once("./db.php");
    $query = "delete from `table` where idx={$_GET['idx']}";
    $res = $con -> query($query);

    if($res) {
        echo "<script>alert('delete success!');</script>";
        echo "<script>location.href='./index.php'</script>";
    } else {
        echo "<script>alert('delete fail!');</script>";
        echo "<script>location.href='./index.php'</script>";
    }
?>