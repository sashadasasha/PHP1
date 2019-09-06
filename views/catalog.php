<div class = "catalog">
<?foreach ($goods as $good): ?>
<div>
    <a href="/api/catalogItem/" >
    <b class="nameItem" id="<?=$good['id']?>"><?=$good['name']?></b><br>
    <img id="<?=$good['id']?>" width="150" src="/img/<?=$good['image']?>" class="imgItem" alt=""></a><br>
    Цена: <?=$good['price']?><br>
    <button class="buy" id="<?=$good['id']?>">Купить</button><hr>
</div>
<? endforeach; ?>

</div>
<div class="modalWindow">
</div>