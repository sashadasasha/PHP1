<<<<<<< HEAD
<h2>Новости</h2>
<? foreach ($news as $item): ?>

    <p><a href="/newspage/<?=$item['id']?>"><?=$item['prev']?></a></p>

<?endforeach;?>


=======
Новости<br>
<?foreach ($news as $value):?>
<p><a href='/newscontent/?id=<?=$value['id']?>'><?=$value['prev']?></a></p>
<? endforeach;?>
>>>>>>> 1918310b142db09b6c326d076b154dd0f49094c0
