<?php

#Задание 1

$i = 0;

while ($i <= 100) {
    echo $i % 3 === 0 ? $i. " " : false;
    
    $i++;
}

echo "<br>";

# FizzBuzz вариация для тренировки

$i = 0; 

while ($i <= 100) {
	  if ( $i % 3 === 0) { 
		  if ($i % 5 === 0) {
		    echo "FizzBuzz <br>";
      } else {
		    echo "Fizz <br>";	
			}
	  }	elseif ($i % 5 === 0) {
		  echo"Buzz <br>";
	    } else {
		    echo $i. "<br>";
      }
      
    $i++;
  }

  echo "<br>";

 # Задание 3
 
 $townsAndRegions = [
   "Московская область" => ["Москва", "Зеленоград", "Клин"],
   "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
   "Рязанская область" => ["Рязань", "Кораблино", "Михайлов"]
 ];

 foreach ($townsAndRegions as $region => $value) {
    echo "{$region}:<br>";
    for ($i = 0; $i < count($value) - 1; $i++) {
      echo $value[$i]. ", "; 
    }
    echo $value[count($value)-1]. "<br>";
 }
 
 #  Задание 4

 $alphabet = [
  'а' => 'a',   'б' => 'b',   'в' => 'v',
  'г' => 'g',   'д' => 'd',   'е' => 'e',
  'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
  'и' => 'i',   'й' => 'y',   'к' => 'k',
  'л' => 'l',   'м' => 'm',   'н' => 'n',
  'о' => 'o',   'п' => 'p',   'р' => 'r',
  'с' => 's',   'т' => 't',   'у' => 'u',
  'ф' => 'f',   'х' => 'h',   'ц' => 'c',
  'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
  'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
  'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
];

$string1 = "Тестовая строка видна издалека. Хорошо? Да!";

function translit (string $str, array $alph) {

  $result = ' ';
  $array1 = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
  
  foreach ($array1 as $val) {
  foreach ($alph as $key => $v) {
    if (preg_match('/\s|\.|\!|\?/', $val)){
      $result .= $val;
      break;
    } elseif (mb_strtolower($val) === $val) {
      $result .= $alph[$val];
      break;
    } else {
      $result .= mb_strtoupper($alph[mb_strtolower($val)]);
      break;
    }
  }
}
return $result. "<br>";
}

echo translit($string1, $alphabet);


 # Задание 7

 for ($i = 0; $i <=9; $i++) echo $i;
 