<?php
include_once 'data.inc.php';
function drawMenu ($menu, $vertical = true) {
    if(!is_array($menu))
        return false;
    $style = "";
    if(!$vertical)
        $style = "style='display: inline; margin-right: 15px;'";
    echo "<ul>";
    foreach ($menu as $item) :
        echo "<li $style>";
        echo "<a href='$item[href]'>{$item['link']}</a>";
        echo "</li>";
    endforeach;
    echo "</ul>";
    return true;
}


function drawTable($cols, $rows, $color) {
    echo "<table border='1' width=\"200\">";
    for($tr = 1; $tr <= $cols; $tr++) {
        echo "<tr>";
        for($td = 1; $td <= $rows; $td++) {
            if($td == 1 || $tr == 1)
                echo "<th style='$color'>" . $tr * $td . "</th>";
            else
                echo "<td>" . $tr * $td . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function myError($errno, $errmsg, $errfile, $errline) {
    if($errno == E_USER_ERROR) {
        echo "Так не должно быть";
    switch ($errno) {
        case E_USER_ERROR:
        case E_USER_WARNING:
        case E_USER_NOTICE:
    }
        $s = date("d.m.Y H:i:sP") . "$errmsg в $errfile: $errline";
        error_log("$s\n", 3, "error.log");
    }
}