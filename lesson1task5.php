<?php

$a = 111;
$b = 222;

echo "a = $a <br> b = $b <br>";

$a = $a ^ $b; //Как сделать в одну строку, я не знаю)

$b = $b ^ $a;

$a = $a ^ $b;

echo "a = $a <br> b = $b";

