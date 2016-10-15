<?php
$access_token = '4dte++sjE/nUyZ5hwsb402NiRD2nSCgaqvRg1JaYa+jGgssqgVgnqYx9CsRXUHqDXoZ18COp6GOTb/3IbNZsj6JyHTclFq+x5gQiB+bmYTrN5yFt+KZe5sxa7op50SVAcBG3f9EABdLlvn+TmnbCWwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;