<?php
//set up variables
$id = $_GET['id'];
$url = "http://music.163.com/api/album/{$id}";
//$data = array('s' => $_GET['s'], 'type' => $_GET['type'], 'offset' => $_GET['offset'], 'limit' => $_GET['limit']);
$headers = "Referer: http://music.163.com\r\n".
  "Content-Type: application/x-www-form-urlencoded\r\n".
  "Host: music.163.com\r\n".
  "Cookie: appver=2.0.2\r\n";
$options = array(
    'http' => array(
        'header'  => $headers,
        'method'  => 'GET',
        'content' => '',
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
echo($result);
?>