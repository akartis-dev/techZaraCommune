<?php
/**
 * @author <Akartis>
 * (c) akartis-dev <sitrakaleon23@gmail.com>
 * Do it with love
 */
$jsonFile = file_get_contents('./communes.json');
$json = json_decode($jsonFile, true);

$commune_length = count($json);
$fokontany_length = 0;

for ($i = 0; $i < $commune_length; $i++) {
	$fokontany_length += count($json[$i]['fokontany']);
}
echo "Moyennne " . $fokontany_length / $commune_length;


