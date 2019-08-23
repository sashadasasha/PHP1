Галерея<br>


<?foreach ($img as $value):?>
<a href='/image/?id=<?=$value['id']?>'><img src="/gallery_img/small/<?=$value['image']?>"></a>

<?endforeach;?>
