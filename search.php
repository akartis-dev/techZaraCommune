<?php
/**
 * @author <Akartis>
 * (c) akartis-dev <sitrakaleon23@gmail.com>
 * Do it with love
 */

$jsonFile = file_get_contents('./communes.json');
$json = json_decode($jsonFile, true);
$commune_length = count($json);

$q = readline();
$index = '';

for($i = 0; $i < 1; $i++){
	$count = 0;
	foreach ($json[$i]['fokontany'] as $fokontany){
		$actual = substr_count(strtolower($fokontany['name']), strtolower($q));
		if($actual > $count){
			$index = $fokontany['name'];
		}
		$count = $actual;
	}
	echo "commune " . $json[$i]['name'] . ' Fokontany: ' . $index ."\n";
}
