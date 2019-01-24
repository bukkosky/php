<?php 

	session_start()

	$file = 'sess.txt';	

	$sess2 = session_decode($file);

	var_dump($_SESSION)


 ?>