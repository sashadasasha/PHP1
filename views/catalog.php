<<<<<<< HEAD

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

=======
Привет <?=$name?><br>
Каталог
<?php
var_dump($catalog);

?>
>>>>>>> 1918310b142db09b6c326d076b154dd0f49094c0
