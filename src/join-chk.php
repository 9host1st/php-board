<?
    include_once("./db.php");
    $query = "insert into users (id, pw) values ('{$_POST['id']}', '{$_POST['pw']}')";
    $res = $con -> query($query);
    if($res) {
        echo "<script>alert('Join success!');</script>";
        echo "<script>location.href='./index.php'</script>";
    } else {
        echo "<script>alert('Join Failed!');</script>";
        echo "<script>location.href='./index.php'</script>";    
    }
?>