<?php

    $days = 30;

    if(!isset($_COOKIE['counter'])){
        $counter = 1;

    } else {
        $counter = intval($_COOKIE['counter']);
        $counter++;
    }

    $id = uniqid();
    setcookie('id', $id, time() + 3600 * 24 * $days);
    setcookie('counter', $counter, time() + 3600 * 24 * $days);


    if($_COOKIE['counter'] < 1){
        echo "Witaj pierwszy raz na stronie";
    } else {
        echo "Odwiedzasz tę stronę po raz " . $_COOKIE['counter'] . " w czasie ostatnich " . $days . " dni";
        echo "<br>";
        echo "Twój ID to: " . $_COOKIE['id'];
    }




//$name = $_COOKIE['id'];
//$content = serialize($name);
//file_put_contents('data/visit.log', $content, FILE_APPEND);


?>