<?php
// if($_SERVER['REQUEST_METHOD']==="GET"){
//     echo "Helllo Get";
// }
// else if($_SERVER['REQUEST_METHOD']==="POST"){
//     echo "HEllo POST";
// }
// else{
//     http_response_code(405);
// }
// $apiKey = $_SERVER['HTTP_API_KEY'];

// // Print the API key
// echo "API Key: " . $apiKey;

// $a = $_POST['text'];
// if ($a % 2 == 0) {
//     echo "Its even";
// } else {
//     echo "Its odd";
// }

// $method = $_SERVER['REQUEST_METHOD'];

// echo $method;

// $headers = getallheaders();

// foreach ($headers as $key => $value) {
//     echo $key . ": " . $value . "<br>";
// }
$headerKey = 'a';

// Retrieve the header parameter value
$headerValue = isset($_SERVER['HTTP_' . strtoupper(str_replace('-', '_', $headerKey))]) ? $_SERVER['HTTP_' . strtoupper(str_replace('-', '_', $headerKey))] : null;

// // Print the header parameter value
 echo $headerValue;

// // Iterate through the request headers and print them
// foreach (getallheaders() as $name => $value) {
//     echo $name . ": " . $value . "\n";
// }
?>