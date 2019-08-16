<?php

#Задание 1

$i = 0;

while ($i <= 100) {
    echo $i % 3 === 0 ? $i. " " : false;
    
    $i++;
}

echo "<br>";

# FizzBuzz вариация для тренировки (наверно, это совсем не оптимальное решение для собеседований))

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
   "Московская область" => ["Москва", "Зеленоград", "Клин","Дубна","Коломна"],
   "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
   "Рязанская область" => ["Рязань", "Кораблино", "Михайлов"],
   "Владимирская область" => ["Ковров", "Владимир","Суздаль"]
 ];

 foreach ($townsAndRegions as $region => $value) {
    echo "{$region}:<br>";
    for ($i = 0; $i < count($value) - 1; $i++) {
      echo $value[$i]. ", "; 
    }
    echo $value[count($value)-1]. "<br><br>";
 }

 echo " ВАРИАНТ 2 <br><br>";

 #Задание 3 Вариант 2

 foreach ($townsAndRegions as $region => $value) 
 {
  echo "{$region}:<br>";
   $townInString = implode (', ', $value);
   echo $townInString. "<br>";
 }


 #  Задание 4
$string1 = "Тестовая строка видна издалека. Хорошо? Да!";

function translit (string $str) {

  $alph = [
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
  
  $result = ' ';
  $array1 = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
  
  foreach ($array1 as $val) {
  foreach ($alph as $key => $v) {
    if (preg_match('/\s|\.|\!|\?|\_|\-|\,/', $val)){
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

echo translit($string1);

#Задание 5

$string = "Тестовая строка видна издалека. Хорошо? Да!";

function withoutSpace (string $str) {

 return preg_replace('/\s/','_', $str). "<br>";

}

echo withoutSpace($string);

# Задание 6

$menu =[
  "Марки авто" => ["Отечественные машины" => ["Гранта","X-cross","Веста"],
                    "Иномарки" => ["Kia" => ["Rio","Ceed", "Sportage"],
                                "Renault" => ["Logan","Sandero","Kaptur"]
                      ]
                  ] 
];

function menuGenerate (array $list) {
  foreach ($list as $key => $value){
    if (gettype($key) == "string"){
    echo "<ul>{$key}";
    }
    if (gettype($value) == "string") {
    echo "<li>$value</li>";
    
    } elseif (gettype($value) == "array") {
      menuGenerate ($value);
      echo "</ul>";
    } 
  }
}

echo menuGenerate($menu);

 # Задание 7

 for ($i = 0; $i <=9; $i++) echo $i;

 echo "<br><br>";

 # Задание 8 (Специально сделала несколько городов с буквой К в разных частях массива)
 
 $townsAndRegions = [
  "Московская область" => ["Москва", "Зеленоград", "Клин","Дубна","Коломна"],
  "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
  "Рязанская область" => ["Рязань", "Кораблино", "Михайлов"],
  "Владимирская область" => ["Ковров", "Владимир","Суздаль"]
];

foreach ($townsAndRegions as $region => $value) 
 {
  echo "{$region}:<br>";
  foreach($value as $town)
  if(preg_match('/^(?!К{1})/', $town)){
    $indexArr = array_keys($value, $town);
    foreach ($indexArr as $index){
      array_splice($value, $index, 1);
    }
  }
  $townInString = implode (', ', $value);
  echo $townInString. "<br>";
 }


 # Задание 9

 
 $string = "Куд-куда, куд-куда, вы откуда и куда?";

 function stringTransform (string $str) {
 
  $withoutSpace = preg_replace('/\s/','_', $str);


  $alph = [
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
 
  $result = ' ';
  $array1 = preg_split('//u', $withoutSpace, -1, PREG_SPLIT_NO_EMPTY);
  
  foreach ($array1 as $val) {
  foreach ($alph as $key => $v) {
    if (preg_match('/\s|\.|\!|\?|\_|\-|\,/', $val)){
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

echo stringTransform($string);

 