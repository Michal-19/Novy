<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="sk">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" href="public/css/styl.css">-->
    <link rel="stylesheet" href="/public/css/root.css">
    <script src="/public/js/script.js"></script>
</head>
<body>
<header>
    <div class="logo">Barbaricum</div>
    <div class="icone" onclick="navbarMenu()">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <nav class="nav-bar">
        <ul>
            <li>
                <a href="?c=home" class="active">Domov</a>
            </li>
            <li>
                <a href="?c=foods" class="active">Ponuka jedál</a>
            </li>
            <li>
                <a href="" class="active">Ponuka nápojov</a>
            </li>
            <li>
                <?php if ($auth->isLogged()) { ?>
                    <a href="?c=auth&a=logout" class="active">Log out</a>
                <?php } else { ?>
                    <a href="?c=auth&a=login" class="active">Log in</a>
                <?php } ?>
            </li>
        </ul>
    </nav>
</header>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
</body>
</html>
