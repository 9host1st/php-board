<?php include_once("./inc/session_inc.php"); ?>
<?php include_once("./inc/db.php"); ?>

<?php
    if(!isset($_SESSION['id'])) {
        echo "<script>alert('You're not Logged!');</script>";
        echo "<script>location.href='./index.php'</script>";
    }
?>
<html>
<?php include_once("./inc/head.php"); ?>
<?php include_once("./inc/header.php"); ?>
<body>
<form method="post" action="./api.php?execute=write">
    <div class="w-75 p-3" style="float:none; margin:0 auto; text-align:center">
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" placeholder="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control" placeholder="content" name="content" rows=5></textarea>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
</form>
</body>
</html>