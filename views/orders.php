<? if (is_admin()): ?>
Оформленные заказы

<div class = "orders">
<?foreach ($orders as $order): ?>
<div>
<a href="/api/orderItem/"><b class="orderItem" id="<?=$order['id']?>"><?=$order['login']?>  - Имя </b></a>
<p><?=$order['tel']?> Телефон </p>
<p><?=$order['address']?> Почта </p>

</div>
<? endforeach; ?>

</div>
<div class="modalWindow">
</div>

<? else: ?>

Запрещено просматривать страницу

<? endif; ?>