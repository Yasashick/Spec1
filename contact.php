<?php
    $size = ini_get('post_max_size');
    $letter = $size{strlen($size)-1};
    $size = (int)$size;
    switch (strtoupper($letter)) {
        case 'B':
            $size *= 1024;
        case 'M':
            $size *= 1024;
        case 'G':
            $size *= 1024;
    }
?>

    <!-- Область основного контента -->
    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>
      <p>Максимальный размер отправляемых данных <span class="reds"><?= $size ?></span> байт.</p>
    <!-- Область основного контента -->
  </div>
  <!--<div id="nav">
    <h2>Навигация по сайту</h2>-->
    <!-- Меню -->
    <!--<ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>-->
    <!-- Меню -->
  <!--</div>-->
