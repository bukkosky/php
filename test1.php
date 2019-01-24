<?php 

	session_start();

	$_SESSION["imie"] = "Jan";
	$_SESSION["nazwisko"] = "Kowalski";
	$_SESSION["wiek"] = 31;

	echo session_encode();

	$sess = session_encode()

	$file1 = "sess.txt";

	file_put_contents($file1, $sess);
 ?>