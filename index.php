<?php

require('config.php');

$query = urlencode($_GET["YOUR PARAMETER NAME"]);
$url = "https://questgig.com/cloud/bigdata/search-api/?query=$query&api_key=API_KEY";
$response = file_get_contents($url);
print($response);

?>
