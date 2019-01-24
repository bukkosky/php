<?php 
	define ( 'DATE', 1);
	define ( 'TIME', 2);
	define ( 'DATE_TIME', 3);
	define ( 'DAY_OF_WEEK',4);
	define ( 'HOUR', 3600);
	define ( 'DAY', 86400);
	define ( 'WEEK', 604800);
	define ( 'MONTH', 18144000);

	

	function formatDate ( $format, int $time = null) :string {
		if (is_null($time)) {
			$time = time();
		}
		switch ($format) {
			case DATE:
				return date('Y-m-d', $time );
				break;
			case TIME: 
				return date ( 'H:i:s', $time );
				break;
			case DATE_TIME:
				return date ('Y-m-d H:i:s', $time);
				break;
			case DAY_OF_WEEK:
				return date ( '1', $time );
				break;
		}
	} 

	function changeTime ($change, int $time = null) : string {
		if(is_null($time)) {
			$time = time();
		}
		switch ($change) {
			case HOUR:
				return date ( $time + HOUR);
				break;
		}

	}

	echo formatDate ( DATE ) . "<br/>";
	echo formatDate ( TIME ) . "<br/>";
	echo formatDate ( DATE_TIME ) . "<br/>";
	echo formatDate ( DAY_OF_WEEK ) . "<br/>";

	// echo changeTime ( HOUR ) . "<br/>";


?>