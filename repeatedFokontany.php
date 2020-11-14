<?php
/**
 * @author <Akartis>
 * (c) akartis-dev <sitrakaleon23@gmail.com>
 * Do it with love
 */

$jsonFile = file_get_contents('./communes.json');
$json = json_decode($jsonFile, true);
$commune_length = count($json);

$f = [];

for($i = 0; $i < $commune_length; $i++){
	foreach ($json[$i]['fokontany'] as $fokontany){
		$name = $fokontany['name'];
		if(array_key_exists($name, $f)){
			++$f[$name];
		}else{
			$f[$name] = 1;
		}
	}
}

print_r(array_search(max($f), $f, true));
