<?php

    error_reporting(E_ALL);
    $times = (int) strftime('%H');
    $welcome = '';
    // Установка локали и выбор значений даты
    setlocale(LC_ALL, "RU-ru");
    $day = date('d');
    $mon = date('m');
    $year = date('Y');
    $hour = date('G:i:sP');
    if  ($times >= 6 || $times < 12) {
        $welcome = "Доброе утро";
    }elseif ($times >= 12 || $times < 18) {
        $welcome = "Добрый день";
    }elseif ($times >= 18 || $times < 23) {
        $welcome = "Добрый вечер";
    }else {
        $welcome = "Доброй ночи";
    }

    $leftMenu = [
        ['link' => 'Домой', 'href' => 'index.php'],
        ['link' => 'О нас', 'href' => 'about.php'],
        ['link' => 'Контакты', 'href' => 'contact.php'],
        ['link' => 'Таблица уможения', 'href' => 'table.php'],
        ['link' => 'Калькулятор', 'href' => 'calc.php'],
    ];


