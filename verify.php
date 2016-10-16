$proxy = 'http://fixie:aP4gg2vqMBeibUf@velodrome.usefixie.com:80';
$proxyauth = 'fixie:aP4gg2vqMBeibUf';

<?php
$access_token = 'bVDx+7g9W7OUMvxxJ2+IUjxTvKSv4nlPZPRyxkDcINZ/eC89Uf8wnX5yZaJms5vad5skYVsIneSv3xUN9U324abOMfMlbdOkp7FQijSQeOmjNZLdgieRj6cPwVllgml/u9UhWnhxj1TIV0qlHVT9kQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
