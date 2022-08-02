<?php
    if(isset($_SESSION['id'])) {
        echo "<script>alert('You already Logged!');</script>";
        echo "<script>location.href='./index.php'</script>";
    }
?>
<?php include_once("./inc/session_inc.php"); ?>
<?php include_once("./inc/db.php"); ?>
<html>
<?php include_once("./inc/head.php"); ?>
<?php include_once("./inc/header.php"); ?>
<form action="./api.php?execute=join" method="post">
    <div class="form-outline mb-4">
        <input type="text" class="form-control" name="id">
        <label class="form-label">id</label>
    </div>
    <div class="form-outline mb-4">
        <input type="password" class="form-control" name="pw">
        <label class="form-label">pw</label>
    </div>
    <button type="submit" class="btn btn-primary btn-block mb-4">Join in</button>
</form>
</html>
