<?php
    $output = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = clearInt($_POST["num1"]);
    $n2 = clearInt($_POST["num2"]);
    $op = clearStr($_POST["operator"]);
    // TODO: Проверить поля
    $output = "$n1 $op $n2 = ";
    switch ($op) {
        case "+": $output .= $n1 + $n2; break;
        case "-": $output .= $n1 - $n2; break;
        case "*": $output .= $n1 * $n2; break;
        case "/":
            if($n2 == 0)
                $output = "Деление на ноль запрещено!";
            else
                $output .= $n1 / $n2; break;
        default: $output = "Неизвестный оператор!";
    }
}
    function clearInt($data) {
        return (int)$data;
    }
    function clearStr($data) {
        return trim(strip_tags($data));
    }
?>

    <!-- Область основного контента -->
      <?php
        if($output)
            echo "<h3>Реультат: $output</h3>";

      ?>
    <form action='' method="post">
      <label>Число 1:</label>
      <br />
      <label><input name='num1' type='text' value="<?= $n1 ?>" /></label>
      <br />
      <label>Оператор: </label>
      <br />
      <label><input name='operator' type='text' value="<?= $op ?>"/></label>
      <br />
      <label>Число 2: </label>
      <br />
      <label><input name='num2' type='text' value="<?= $n2 ?>"/></label>
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
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
