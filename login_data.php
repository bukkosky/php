<?php 

	$name = $_POST["name"];
	$email = $_POST["email"];

    var_dump($name);
    var_dump($email);

	$usrName = md5($email);
	$file = $usrName .'.txt';
	$content = serialize($_POST);

	var_dump($usrName);

	if(!file_exists('data/'.$file)){
	    echo "Konto zostało utworzone";
	    echo "<br>";
	    file_put_contents('data/'.$file, $content);
	    $content = unserialize(file_get_contents('data/'.$file));
	    var_dump($content);
    }else {
	    echo "Użytkownik już istnieje";
	    echo "<br>";
	    file_put_contents('data/'.$file, $content);
	    $content = unserialize(file_get_contents('data/'.$file));
	    var_dump($content);
    }

	var_dump($file)


 ?>