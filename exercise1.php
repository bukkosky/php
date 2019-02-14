<?php

$url = "https://api.exchangeratesapi.io/latest";

$json = file_get_contents($url);

$json_data = json_decode($json, true);

var_dump($json_data);

foreach ($json_data as $key) {
	echo $key;
};

?>