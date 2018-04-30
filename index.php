<?php
include_once 'inc/lib.inc.php';
set_error_handler("myError");
include_once 'inc/data.inc.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
<?php
    include_once 'inc/top.inc.php';
?>
  <div id="content">
    <!-- Заголовок -->
    <h1><?= $welcome ?>, Гость!</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
      <blockquote><?= "Сегодня $day число, $mon месяц, $year год." .
      '<br>'."Страница обновлена: $hour"; ?></blockquote>
    <h3>Зачем мы ходим в школу?</h3>
    <p>
      У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски, кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят «пятерку» за сочинение, кого-то ругают за непрочитанную книгу, на школьной спортивной площадке ребята играют в футбол, а девочки – в волейбол, некоторые готовятся к соревнованиям, другие участвуют в репетициях праздников…
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
      Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен". Почему "единый"? ЕГЭ одновременно является и вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы. К тому же на всей территории России используются однотипные задания и единая система оценки.
    </p>
    <p>
      Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о результатах единого государственного экзамена. Срок действия данного документа истекает 31 декабря года, следующего за годом его выдачи, поэтому у абитуриентов есть возможность поступать в ВУЗы со свидетельством ЕГЭ в течение двух лет.
    </p>
    <!-- Область основного контента -->
  </div>
    <?php
    include_once 'inc/menu.inc.php';
    ?>
  <div class="menu_horizont">
  <?php
    if(!drawMenu($leftMenu, false))
        trigger_error("Проблема с отрисовкой меню", E_USER_ERROR);
  ?>
  </div>
<?php
    include_once 'inc/bottom.inc.php';
?>
</body>

</html>