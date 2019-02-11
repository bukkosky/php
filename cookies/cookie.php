<?php

    $days = 30;

    if(!isset($_COOKIE['counter'])){
        $counter = 0;
    } else {
        $counter = intval($_COOKIE['counter']);
        $counter++;
    }
    setcookie('counter', $counter, time() + 3600 * 24 * $days);

    if($_COOKIE['counter'] ==0){
        echo "Witaj pierwszy raz na stronie";
    } else {
        echo "Odwiedzasz tę stronę po raz " . $_COOKIE['counter'] . " w czasie ostatnich " . $days . " dni";
    }


?>