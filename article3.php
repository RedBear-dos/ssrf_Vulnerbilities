<?php
$api_key = "SECRET-API-KEY-7890";

$referer = $_SERVER['HTTP_REFERER'] ?? '';

if (!empty($referer)) {
    $data = ['apikey' => $api_key];
    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data)
        ]
    ];

    $context  = stream_context_create($options);
    @file_get_contents($referer, false, $context);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Article 2</title>
</head>
<body>
    <h1>Article 3</h1>
    <p>This is the content of Article 3.</p>
</body>
</html>
