<?php 

    define('STORAGE', 'csv_test.csv');

    if(file_exists(STORAGE)){
        $data = file(STORAGE);

        foreach($data as $val){

            $item = explode(",", $val);
            echo "<p>";
         //   echo $val;
            echo $item[0] ." " .  $item[1] . " " . $item[2] . " "  . $item[3];
            echo "<p>";
        }
    }else {
        echo "File does not exist";
    }

 ?>