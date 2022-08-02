<?php include_once("./inc/session_inc.php"); ?>
<?php include_once("./inc/db.php"); ?>
<?php
    $hit_increase_query = "update board set hit = hit + 1 where idx = {$_GET['idx']}";
    $hit_res = $con -> query($hit_increase_query);
    if(!$hit_res) {
        echo "hit query failed";
        exit();
    }
    $data_query = "select * from board where idx = {$_GET['idx']}";
    $data_res = $con -> query($data_query); 
    if(!$data_res) {
        echo "data query failed";
        exit();
    }
    $data_row = $data_res -> fetch_array();
?>
<html>
<?php include_once("./inc/head.php"); ?>
<?php include_once("./inc/header.php"); ?>
<body>
<div class ="container">
    <table class ="table table-bordered">
        <thead>
            <a href="./api.php?execute=delete&idx=<?php echo $_GET['idx']; ?>">delete this page!</a>
            <br>
            <a href="./edit.php?idx=<?php echo $_GET['idx']; ?>">edit this page!</a>
        </thead>
        <tbody>
            <tr>
                <th>제목 : </th>
                <td><?php echo $data_row['title'];?></td>
            </tr>
            <tr>
                <th>작성 일자 : </th>
                <td><?php echo $data_row['date'];?></td>
            </tr>
            <tr>
                <th>조회수 : </th>
                <td><?php echo $data_row['hit'];?></td>
            </tr>
            <tr>    
                <th>작성자 : </th>
                <td><?php echo $data_row['writer'];?></td>
            </tr>
            <tr>
                <th>내용 : </th>
                <td><?php echo $data_row['content'];?></td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>