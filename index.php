<?php
include_once 'inc/lib.inc.php';
set_error_handler("myError");
include_once 'inc/data.inc.php';
?>

<?php
    include_once 'inc/top.inc.php';

    // Инициализация заголовков страницы
    $title = 'Сайт нашей школы';
    $header = "$welcome, Гость!";
    $id = strtolower(strip_tags(trim($_GET['id'])));
    switch($id) {
        case 'about' :
            $title = 'О сайте';
            $header = 'О нашем сайте';
            break;
        case 'contact' :
            $title = 'Контакты';
            $header = 'Обратная связь';
            break;
        case 'table' :
            $title = 'Таблица умножения';
            $header = 'Таблица умножения';
            break;
        case 'calc' :
            $title = 'Он-лайн калькулятор';
            $header = 'Калькулятор';
    }
?>
  <div id="content">
    <!-- Заголовок -->
    <h1><?= $header ?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
      <blockquote><?= "Сегодня $day число, $mon месяц, $year год." .
      '<br>'."Страница обновлена: $hour"; ?></blockquote>
      <?php
      switch($id) {
          case 'about' :
              include_once 'about.php';
              break;
          case 'contact' :
              include_once 'contact.php';
              break;
          case 'table' :
              include_once 'table.php';
              break;
          case 'calc' :
              include_once 'calc.php';
              break;
          default:
              include_once 'inc/index.inc.php';
      }
      ?>
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
