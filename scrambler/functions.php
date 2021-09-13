<?php
function displayKey($key){
	printf(" value = %s",$key);
}

/**
 * @param $originalData
 * @param $key
 *
 * @return string
 */
function encodeData($originalData, $key){
	$originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
	$data = '';
	$lenght = strlen($originalData);
	for ($i = 0; $i<$lenght; $i++){
		$currentCar = $originalData[$i];
		$position = strpos($originalKey, $currentCar);
		if ($position !== false){
			$data .= $key[$position];
		}else{
			$data .= $currentCar;
		}
	}
	return $data;
}

function decodeData($originalData, $key){
	$originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
	$data = '';
	$lenght = strlen($originalData);
	for ($i = 0; $i<$lenght; $i++){
		$currentCar = $originalData[$i];
		$position = strpos($key, $currentCar);
		if ($position !== false){
			$data .= $originalKey[$position];
		}else{
			$data .= $currentCar;
		}
	}
	return $data;
}
