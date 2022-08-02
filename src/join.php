<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>php-board</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">php-board</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./login.php">Login</a>
            </li>
        </ul>
    </div>
</nav>
<div class="input-group justify-content-center">
    <form action="./join-chk.php" method="post">
        <!-- Email input -->
        <div class="form-outline">
            <input type="text" id="form2Example1" class="form-control" name="id"/>
            <label class="form-label" for="form2Example1">id</label>
        </div>

        <!-- Password input -->
        <div class="form-outline">
            <input type="password" id="form2Example2" class="form-control" name="pw"/>
            <label class="form-label" for="form2Example2">pw</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
