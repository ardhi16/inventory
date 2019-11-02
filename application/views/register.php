<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= site_url('media/css/bootstrap.min.css') ?>">
</head>

<body>
    <h1>Register</h1>

    <form action="" method="post">
        <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" type="text" name="username" id="username" placeholder="input username">
        </div>
        <div class="form-group">
            <label for="">passoword</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="input password">
        </div>
        <div class="form-group">
            <label for="">Fullname</label>
            <input class="form-control" type="text" name="fullname" id="fullname" placeholder="input fullname">
        </div>

        <button class="btn btn-primary" type="submit">Register</button>
        <a href="<?= site_url('auth') ?>">Login</a>
    </form>


    <script src="<?= site_url('media/js/jquery.min.js') ?>"></script>
    <script src="<?= site_url('media/js/bootstrap.min.js') ?>"></script>
</body>

</html>