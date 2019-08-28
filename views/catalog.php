
<div class = "catalog">
<? foreach ($goods as $item): ?>

<div class = "catalog_item"> <img src="/img/<?=$item['image']?>" id="<?=$item['id']?>"> <h2><?=$item['name']?></h2>
   <p><?=$item['short_desc']?></p>
   <p><?=$item['price']?> $</p>
   </div>
<?endforeach;?>
</div>
<div class="modalWindow">
</div>

