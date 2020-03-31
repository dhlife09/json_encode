<?php
/* PHP JSON parser sample */
    $data_str = file_get_contents('http://api.corona-19.kr/apitest');
    $json = json_decode($data_str, true);
	echo $json['result_code']. '<br>';
	echo $json['result_message']. '<br>';
?>
