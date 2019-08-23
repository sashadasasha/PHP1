Новости<br>
<?foreach ($news as $value):?>
<p><a href='/newscontent/?id=<?=$value['id']?>'><?=$value['prev']?></a></p>
<? endforeach;?>