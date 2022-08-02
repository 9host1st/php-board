<?php include_once("./inc/session_inc.php"); ?>
<?php include_once("./inc/db.php"); ?>
<?php $id = $_SESSION['id']; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">php-board</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home</a>
            </li>
            <?php 
                if(!isset($id)) {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="./login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./join.php">Join</a>
            </li>
            <?php
                }
            ?>
            <?php
                if(isset($_SESSION['id'])) {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="./write.php">Write</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./api.php?execute=logout">Logout</a>
            </li>
            <li class="nav-item">
                hello, <?php echo $id; ?>!
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>
