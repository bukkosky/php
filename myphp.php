<?php
		// $liczba = null1;

		// if(isset($_GET['liczba'])) {
		// 	$liczba = $_GET['liczba'];
		// } else {
		// 	print "nie mamy zmiennej liczba"; 
		// 	die();
		// } 
	
		// if(is_numeric($liczba) && $liczba < 10) 
		// 	print "zmienna $liczba jest mniejsza od 10";



	// function divide (float $a, float$b) : float {
	// 	if ($b == 0) {
	// 		return 0;
	// 	}
	// 	return $a / $b;
	// }

	// if(isset($_GET['a'])|| isset($_GET['b'])){
	// 	echo divide($_GET['a'], $_GET['b']);
	// } else {
	// 	print "nie ma zmiennych";
	// 	die();
	// }



	$a = 2;
	$b = 2;

	$addition = function(float $a, float $b){
		return $a + $b;
	}
	$subtraction = function (float $a, float $b){
		return $a - $b;
	}
	$multiply = function (float $a, float $b){
		return $a * $b;
	}
	$divide = function (float $a, float $b){
		if($b == 0){
			return 0;
		}
		return $a / $b
	}

	$i = null;
	if(isset( $_GET['i'])){
		$i = $_GET['i'];
	}

	switch ($i) {
		case 0:
			echo $addition($a, $b);
			break;
		case 1:
			echo $subtraction($a, $b);
			break;
		case 2:
			echo $multiply($a, $b);
			break;
		case 3: 
			echo $divide($a, $b);
		default:
			echo "Podaj parametry"
			break;
	}



?>
