<?php
    # Ф-я выводит на экран переданный аргумент
    function hlwrld($param1){
        if ($param1 =='') {
            print "Enter param1 needed";
        } else {
            print $param1;
        }
    }

    hlwrld($_GET["cmd"]);
?>
