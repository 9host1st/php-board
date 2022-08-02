<?php
    include_once("./db.php");
    session_start();
    $query1 = "select * from `table` where idx={$_GET['idx']}";
    $res1 = $con -> query($query1);
    $hit = $res1 -> fetch_array();
    $hit = $hit['hit'];
    $query2 = "update `table` set hit = hit + 1 where idx={$_GET['idx']}";
    $con -> query($query2);
    $query3 = "select * from `table` where idx={$_GET['idx']}";
    $res2 = $con -> query($query3);
    $data = $res2 -> fetch_array();
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>php-board</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="./index.php">php-board</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Search</a>
            </li>
            <?php 
                if(!isset($_SESSION['id'])) {
                    echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link\" href=\"./login.php\">Login</a>";
                    echo "</li>";
                } else {
                    echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link\" href=\"./write.php\">Write</a>";
                    echo "</li>";
                    echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link\" href=\"./logout.php\">Logout</a>";
                    echo "</li>";
                    echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link\" href=\"./logout.php\">hello,{$_SESSION['id']}</a>";
                }   
            ?>
        </ul>
    </div>
</nav>
<div class ="container">
    <table class ="table table-bordered">
        <thead>
            <a href="./delete.php?idx=<?php echo $_GET['idx']; ?>">delete this page!</a>
            <br>
            <a href="./edit.php?idx=<?php echo $_GET['idx']; ?>">edit this page!</a>
        </thead>
        <tbody>
            <tr>
                <th>제목 : </th>
                <td><?php echo $data['title'];?></td>
            </tr>
            <tr>
                <th>작성 일자 : </th>
                <td><?php echo $data['date'];?></td>
            </tr>
            <tr>
                <th>조회수 : </th>
                <td><?php echo $data['hit'];?></td>
            </tr>
            <tr>    
                <th>작성자 : </th>
                <td><?php echo $data['writer'];?></td>
            </tr>
            <tr>
                <th>내용 : </th>
                <td><?php echo $data['content'];?></td>
            </tr>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
