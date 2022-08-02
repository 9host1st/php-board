<?php
    header("Content-Type: text/html;charset=utf-8");
    include_once("./db.php");
    session_start();
    $query = "select * from `table` where idx={$_GET['idx']}";
    echo $query;
    $res = $con -> query($query);
    $data = $res -> fetch_array();
    $writer = $_SESSION['id'];
    $content = $_POST['content'];
    $title = $_POST['title'];
    $hit = $data['hit'];
    $date = date_create() -> format('Y-m-d');
    $query2 = "update `table` set `title`='{$title}', `content`='{$content}', `date`='{$date}', `writer`='{$writer}', `hit`='{$hit}' where `idx`={$_GET['idx']}";
    echo $query2;
    $res2 = $con -> query($query2);
    if($res2) {
        echo "<script>alert('Edit success!');</script>";
        echo "<script>location.href='./index.php';</script>";
    } else {
        echo "<script>alert('Edit Fail');</script>";
        echo "<script>locatiojn.href='./index.php';</script>";
    }
?>