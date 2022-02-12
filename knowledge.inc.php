<?php
$date = date("d.m.Y, H:i:s");
$concat = '- пользоваться '.'конкатенацией '.'строк;';
$array = [
    '- перебирать', 
    'массив', 
    'php;'
];
$rand = rand(0,100);

function foo($array)
{
    echo '- вызывать php-функции; <br>';    
    foreach($array as $arr) {
        echo "$arr ";
    }
}
?>

<div class = "myskills">
    <p> Я умею: </p>
    <?=$concat?> <br>
    - выводить дату и время сервера: <?=$date?> <br>
    <?=foo($array)?> <br>        
    - генерировать случайное число в диапазоне от 0 до 100: <b><?=$rand?> </b>
</div>