<?php 

	session_start();

	$ok = false;

	$firstName = $_POST["first_name"];
	$lastName = $_POST["last_name"];
	$email = $_POST["email"];


    $userEmail = md5($email);
	$file = $userEmail .'.txt';
	$content = $firstName . "," .  $lastName . "," . $email;


	file_put_contents('user.txt', $content);



	// if (!file_exists('user.txt', $file)){
	//    echo "Konto zostało utworzone";
	//    echo '<br>';
	//    file_put_contents('user.txt', $file,$content);
	//    $content = unserialize(file_get_contents('user.txt', $file));
	//    var_dump($content) ;
	// }else{
	//    echo "Użytkownik już istnieje, dane zostały nadpisane";
	//    echo '<br>';
	//    file_put_contents('user.txt', $file,$content);
	//    $content = unserialize(file_get_contents('user.txt', $file));
	//    var_dump($content);
	// }


	// $_SESSION["login"] = $email;
	// $_SESSION["password"] = $_POST["password"];

	// var_dump($_SESSION);

	// if(isset($_SESSION['login']) && isset($_SESSION['password'])){
	// 	$user = $_SESSION['login'];
	// 	$ok = true;
	// }

	// if($ok){
	// 	echo "Witaj ";
	// }


 ?>