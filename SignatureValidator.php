<?php

$headers = json_decode(file_get_contents('./headers.json'), true);
$body = file_get_contents('./body.json');
$privateKey = 'ae1dd5a6-f57d-477c-b67b-35ff80bf54f4';

$keyedHash = strtolower(hash_hmac('sha256', $body, $privateKey));


var_dump(hash_equals($headers['x-hmac-signature'], $keyedHash));


?>
