<?php
    session_start();
    include_once("./db.php");
    $query = "select * from `table` where idx={$_GET['idx']}";
    $res = $con -> query($query);
    $data = $res -> fetch_array();
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>php-board</title>
</head>
<body>
<form method="post" action="./edit-chk.php?idx=<?php echo $_GET['idx'] ?>">
    <div class="w-75 p-3" style="float:none; margin:0 auto; text-align:center">
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" placeholder="<?php echo $data['title'] ?>" name="title">
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control" placeholder="<?php echo $data['content']; ?>" name="content" rows=5></textarea>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>