<div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <?php
    include_once 'data.inc.php';
    if(!drawMenu($leftMenu, true))
        trigger_error("что-то случилось", E_USER_ERROR);

    ?>



    <!-- Меню -->
    <!-- Навигация -->
</div>