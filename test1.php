<?php 

	session_start();


	$_SESSION["name"] = $_POST["name"];
	$_SESSION["password"] = $_POST["password"];

	file_put_contents('user.txt', session_encode());



//	if(file_exists('user.txt')){
//	    session_decode(file_get_contents('user.txt'))
//    }

	var_dump($_SESSION);

    header('Location: test2.php');
//	$_SESSION["imie"] = "Jan";
//	$_SESSION["nazwisko"] = "Kowalski";
//	$_SESSION["wiek"] = 31;




//    file_put_contents('user.txt', session_encode());



 ?>