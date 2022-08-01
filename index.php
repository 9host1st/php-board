<?php
    session_start();
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
                    echo "</li>";
                }
            ?>
        </ul>
    </div>
</nav>
<table class="table table-striped">
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
            include_once("./db.php");
            $query = "select * from `table` order by idx asc"; 
            $res = $con -> query($query);
            while($row = $res -> fetch_array()) {
        ?>
        <tr>
            <td><?php echo $row['idx']; ?></td>
            <td><a href="./view.php?idx=<?php echo $row['idx']; ?>"><?php echo $row['title']; ?></a></td>
            <td><?php echo $row['writer']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['hit']; ?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
