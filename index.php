<?php
    # Ф-я выводит на экран переданный аргумент
    function hlwrld($param1){
        if ($param1 =='') {
            print "Enter param1 needed";
        } else {
            print $param1;
        }
    }

    function hlwrld2($param2){
        if ($param1 =='') {
            print "Enter param2 needed";
        } else {
            print $param2;
        }
    }

    hlwrld($_GET["cmd"]);
?>
