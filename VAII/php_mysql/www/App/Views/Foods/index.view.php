<?php /** @var \App\Core\IAuthenticator $auth */ ?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/public/css/ponukaJedal.css">
</head>
<body>
<h1 id="nadpis">Ponuka jedál</h1>
<h4 class="nadpis-druhu-jedla">Pizza</h4>
<?php
use App\Models\Food;
/** @var Food[] $data */
foreach ($data as $food) { ?>
    <div class="jedlo-element"><?php echo $food->getName() ?><br>
        <div>Cena : <?php echo $food->getPrice() ?>€</div>
        <?php if ($auth->isLogged()) { ?>
            <a href="?c=foods&a=delete&id=<?php echo $food->getId() ?>" class="btn btn-danger">Delete</a>
            <a href="?c=foods&a=edit&id=<?php echo $food->getId() ?>" class="btn btn-warning">Upraviť</a>
        <?php } ?>
    </div>
<?php } ?>
<?php if ($auth->isLogged()) { ?>
    <div class="add-button">
        <a href="?c=foods&a=add" class="btn btn-success">Pridať</a>
    </div>
<?php } ?>
</body>
</html>

