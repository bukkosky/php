<?php
    session_start();


    isset($_SESSION['is_auth'])&&$_SESSION['is_auth']==1;
    var_dump($_SESSION['is_auth']);

//    if(($_SESSION['is_auth'])==0){
//        header('Location: sesje.html');
//    }

    echo "Witaj";
    echo "<br>";
    echo $_SESSION['name'];

?>