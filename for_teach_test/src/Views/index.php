<?php

use App\Service\User;

require '../../vendor/autoload.php';

$user = new User();

session_start();

if (isset($_POST['account']) && isset($_POST['password'])) {
    $data = $user->userLogin($_POST['account'], $_POST['password']);
    if ($data) {
        $_SESSION['user'] = $data['account'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>留言板</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="navbar-brand fs-3 text-center">留言板</div>
        </div>
    </nav>
</header>

<body>
    <div class="container">
        <div class="row">
            <form class="col-4" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">帳號</span>
                    <input name="account" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">密碼</span>
                    <input name="password" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <input type="submit" class="btn btn-primary" value="登入">
            </form>
        </div>
        <div><?php var_dump($_SESSION) ?></div>
    </div>
</body>

</html>