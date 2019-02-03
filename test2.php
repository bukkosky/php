<?php 

    session_start();

    if(file_exists('SMTP.php')) {
        session_decode(file_get_contents('SMTP.php'));
    }

    var_dump($_SESSION);

    header('Location: dashboard.php');



//    define('STORAGE', 'csv_test.csv');
//
//    if(file_exists(STORAGE)){
//        $data = file(STORAGE);
//
//        foreach($data as $val){
//
//            $item = explode(",", $val);
//            echo "<p>";
//         //   echo $val;
//            echo $item[0] ." " .  $item[1] . " " . $item[2] . " "  . $item[3];
//            echo "<p>";
//        }
//    }else {
//        echo "File does not exist";
//    }

 ?>