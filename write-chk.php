<?php
    include_once("./db.php");
    session_start();
    $title = $_POST['title'];
    $content = $_POST['content'];
    $hit = 0;
    $writer = $_SESSION['id'];
    $date = date_create() -> format('Y-m-d');

    $query = "insert into `table` (`title`, `content`, `writer`, `date`, `hit`, `idx`) values ('{$title}', '{$content}', '{$_SESSION['id']}', '{$date}', {$hit}, NULL)";
    echo $query;
    $res = $con -> query($query);
    
    if($res) {
        echo "<script>alert('Write success!');</script>";
        echo "<script>location.href='./index.php'</script>";
    } else {
        echo "<script>alert('Write Fail!');</script>";
        echo "<script>location.href='./index.php'</script>";
    }

?>