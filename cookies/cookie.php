<?php

//    $test = "ciasteczko testowe";
//
//    if(!isset($_COOKIE["test"])){
//        setcookie("test", $test);
//        echo "ustawiono cookies z wartością: " . $_COOKIE[test];
//    } else {
//        echo "cookies jest ustawione z wartością: " . $_COOKIE[test];
//    }

// SET COOKIES COUTER
    $days = 30;

    if(!isset($_COOKIE['counter'])){
        $counter = 1;
    } else {
        $counter = intval($_COOKIE['counter']);
        $counter++;
    }
    setcookie('counter', $counter, time() + 3600 * 24 * $days);

    if($_COOKIE['counter'] ==1){
        echo "Witaj pierwszy raz na stronie";
    } else {
        echo "Odwiedzasz tę stronę po raz " . $_COOKIE['counter'] . " w czasie ostatnich " . $days . " dni";
    }


?>