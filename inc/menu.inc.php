<div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <?php
    include_once 'data.inc.php';
    if(!drawMenu($leftMenu, true))
        echo 'Извините, произошла ошибка вывода меню';

    ?>



    <!-- Меню -->
    <!-- Навигация -->
</div>