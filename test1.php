<?php 

	session_start();


	$_SESSION["name"] = $_POST["name"];
	$_SESSION["password"] = $_POST["password"];

	file_put_contents('SMTP.php', session_encode());



//	if(file_exists('SMTP.php')){
//	    session_decode(file_get_contents('SMTP.php'))
//    }

	var_dump($_SESSION);

    header('Location: test2.php');
//	$_SESSION["imie"] = "Jan";
//	$_SESSION["nazwisko"] = "Kowalski";
//	$_SESSION["wiek"] = 31;




//    file_put_contents('SMTP.php', session_encode());



 ?>