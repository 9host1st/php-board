<?php include_once("./inc/session_inc.php"); ?>
<?php include("./inc/db.php"); ?>
<?php
    $query = "select * from board order by idx asc;";
    $res = $con -> query($query);
?>
<html>
<?php include_once("./inc/head.php"); ?>
<?php include_once("./inc/header.php"); ?>
<table class="table table-stripped">
    <thead>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>날짜</th>
            <th>조회수</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($rows = $res -> fetch_array()) {
        ?>
        <tr>
            <td><?php echo $rows['idx']; ?></td>
            <td><a href="./view.php?idx=<?php echo $rows['idx']; ?>"><?php echo $rows['title']; ?></a></td>
            <td><?php echo $rows['writer']; ?></td>
            <td><?php echo $rows['date']; ?></td>
            <td><?php echo $rows['hit']; ?></td>
        </tr>
        <?php
            }
        ?> 
    </tbody>
</table>
<script src="./js/bootstrap.min.js"></script>
</html>