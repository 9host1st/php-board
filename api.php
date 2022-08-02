<?php
    include("./inc/db.php");
    include("./inc/session_inc.php");
    function user_login($id, $pw) {
        global $con;
        $login_query = "select * from `users` where id='{$id}' and pw='{$pw}'";
        $login_res = $con -> query($login_query); 
        if (!$login_res) {
            echo "<script>alert('Login Failed..');</script>";
            echo "<script>location.href='./index.php'</script>";
        } else {
            $_SESSION['id'] = $id;
            echo "<script>alert('Login Success!');</script>";
            echo "<script>location.href='./index.php'</script>";
        }
    }

    function user_join($id, $pw) {
        global $con;
        $join_query = "insert into `users` (id, pw) values ('{$id}', '{$pw}')";
        $join_res = $con -> query($join_query);
        if (!$join_res) {
            echo "<script>alert('Join Failed..');</script>";
            echo "<script>location.href='./index.php'</script>";
        } else {
            echo "<script>alert('Join Success!');</script>";
            echo "<script>location.href='./index.php'</script>";
        }
    }

    function write($title, $content) {
        global $con;
        if(empty($title)) {
            echo "<script>alert('not empty title');</script>";
            echo "<script>location.href='./index.php'</script>";
            exit();
        }
        $writer = $_SESSION['id'];
        $date = date_create() -> format('Y-m-d');
        $write_query = "insert into board (title, content, writer, date, hit, idx) values ('{$title}', '{$content}', '{$writer}', '{$date}', 0, NULL)";
        $write_res = $con -> query($write_query);
        if(!$write_res) {
            echo "<script>alert('Write Failed..');</script>";
            echo "<script>location.href='./index.php'</script>";
        } else {
            echo "<script>alert('Write Success!');</script>";
            echo "<script>location.href='./index.php'</script>";
        }
    }

    function edit($title, $content, $idx) {
        global $con;
        if(empty($title)) {
            echo "<script>alert('not empty title');</script>";
            echo "<script>location.href='./index.php'</script>";
            exit();
        }
        $date = date_create() -> format('Y-m-d');
        $edit_query = "update board set title='{$title}', content='{$content}', date='{$date}' where idx = {$idx}";
        $edit_res = $con -> query($edit_query);
        if(!$edit_res) {
            echo "<script>alert('Edit Failed..');</script>";
            echo "<script>location.href='./index.php'</script>";
        } else {
            echo "<script>alert('Edit Success!');</script>";
            echo "<script>location.href='./index.php'</script>";
        }
    }

    function user_logout() {
        session_destroy();
        echo "<script>alert('Logout Success!');</script>";
        echo "<script>location.href='./index.php'</script>";
    }

    function user_delete($idx) {
        global $con;
        $delete_query = "delete from board where idx={$idx}";
        $delete_res = $con -> query($delete_query);
        if(!$delete_res) {
            echo "<script>alert('Delete Failed..');</script>";
            echo "<script>location.href='./index.php'</script>";
        } else {
            echo "<script>alert('Delete Success!');</script>";
            echo "<script>location.href='./index.php'</script>";
        }
    }

    $param = $_GET['execute'];
    if($param == 'login') user_login($_POST['id'], $_POST['pw']);
    else if($param == 'logout') user_logout();
    else if($param == 'join') user_join($_POST['id'], $_POST['pw']);
    else if($param == 'edit') edit($_POST['title'], $_POST['content'], $_GET['idx']);
    else if($param == 'write') write($_POST['title'], $_POST['content']);
    else if($param == 'delete') user_delete($_GET['idx']);
    else { die("what happend?"); }
?>