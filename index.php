<?php
    # Ф-я выводит на экран переданный аргумент
    function hlwrld($param1){
        print $param1;
    }

    hlwrld($_GET["cmd"]);
?>
