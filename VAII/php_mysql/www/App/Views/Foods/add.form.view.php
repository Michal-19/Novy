<link rel="stylesheet" href="/public/css/addEditFood.css">
<script src="/public/js/script.js"></script>
<form method="post" action="?c=foods&a=store" name="crud-food" onsubmit=" return validateFoodForm()">
    <?php /** @var Food $data */
    use App\Models\Food;
    if ($data->getId()) { ?>
        <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
    <?php } ?>
    <label>
        Jedlo :
        <br><input type="text" name="text" value="<?php $data->getName() ?>"><br>
        Cena :
        <br><input type="number" name="price" value="<?php $data->getPrice() ?>">
    </label>
    <br><input id="submit-button" type="submit" value="Pridať">
</form>
