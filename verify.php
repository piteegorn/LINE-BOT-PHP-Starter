<?php
$access_token = 'pAGg/CmfAybpotKGFBeUvDgk9KZlLI9cEpL9xnrkKIhJtcFaAe+QUjEBZUQfBH1RVayxA4Yh3Z2Sw58cvozVJCmNDaljng3o9dXN7LnFsjqyAL7qjQ2ehUwoHcIdl9yCZ3ayG5/Av40JdAIkNy4EBgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>