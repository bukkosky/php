<?php 

	define('STORAGE_FILE', 'csv_test.csv');

	if (file_exists(STORAGE_FILE)) {
		$data = file(STORAGE_FILE);

		foreach ($data as $value) {
			$item = explode(",", $value);
			echo "<p>";
			$netPrice = round($item[2]);
			$grossPrice = round($item[2] + $item[2] * ($item[3] / 100), 2);

			echo "Product <b>{$item[0]}</b> is avalible in: <b>{$item[1]}</b>. Net price is <b>{$item[2]}</b>, tax is: <b>{$item[3]}</b>. Gross is <b>{$grossPrice}</b>";
			echo "</p>";
		}
	} else {
		echo "File does not exist";
	}
 ?>