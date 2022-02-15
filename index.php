<?php
    ## запрет кэширования страницы браузером
    header("Expires: Thu, 19 Feb 1998 13:24:18 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-cache, must-revalidate");
    header("Cache-Control: post-check=0,pre-check=0");
    header("Cache-Control: max-age=0");
    header("Pragma: no-cache");
            
    $title = 'PHP-Start';
    $p = 'Приветствую Вас на моей страничке!';
    $name = 'Артем';
    $surname = 'Мирошниченко';
    $city = 'Ульяновск';
    $birthday = '18 ноября 1976 года';
    $birthplace = 'г. Ульяновск';
    $address = 'г. Ульяновск';
    $children = 'сын Илья 2000 г.р.';
    $education = 'высшее, инженер по специальности "Радиоэлектронные системы"';
    $employment = 'ведущий инженер НПО';
    $hobby = 'компьютеры, книги (фэнтэзи), воркаут, музыка (евро-транс, хард-рок), кошки';
    
    include 'main.php';
