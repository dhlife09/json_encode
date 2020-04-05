<?php 
header('Content-Type: application/json; charset=UTF-8');	//JSON style
// Declare an array  
$a = '200';
$b = 'ok';
$value = array( 
    "result_code"=>$a, 
    "result_message"=>$b); 
   
// Use json_encode() function 
$json = json_encode($value, JSON_PRETTY_PRINT); 
   
// Display the output 
echo($json); 
   
?> 
