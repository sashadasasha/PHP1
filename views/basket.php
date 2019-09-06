<h2>Корзина</h2>

<?foreach ($basket as $item):?>
    <div id="item_<?=$item['basket_id']?>">
        <?=$item['name']?> <br>
        <img src="/img/<?= $item['image'] ?>" width="150">
        <br>
        <button class="delete" id="<?=$item['basket_id']?>">Удалить</button>
        <br>
        Цена: <?=$item['price']?>  <br>
    </div>
<?endforeach;?>
<br>

Общая стоимость: <span id="summ"><?=$summ?></span><br>
<h2>Оформите заказ</h2>
<? if ($allow):?>
<form action="/order/" method="post" class="formOrder">
    <input placeholder="<?=$user?>" type="text" name="name" id="orderLogin">
    <input placeholder="<?=$tel?>" type="text" name="phone" id="orderTel">
    <input placeholder="Адрес доставки" type="text" name="adres" id="orderAdr">
    <input type="button" value="Оформить">
</form>

<? else: ?>
<form action="/order/" method="post" class="formOrder">
    <input placeholder="Ваше имя" type="text" name="name" id="orderLogin">
    <input placeholder="Телефон" type="text" name="phone" id="orderTel">
    <input placeholder="Адрес доставки" type="text" name="adress" id="orderAdr">
    <input type="button" value="Оформить">
</form>

<?endif;?>

<div class = "infoMes"></div>
