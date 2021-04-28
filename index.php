<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require 'vendor/autoload.php';
$client = new \GuzzleHttp\Client([
 'base_uri' => 'https://api.quotable.io/',
]);
$response = $client->get('random');
$quote = json_decode($response->getBody(), TRUE);
print
"<h3>".$quote['content']."</h3><br>".$quote['author'];
?>
</body>
</html>

