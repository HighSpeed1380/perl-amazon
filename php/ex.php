<?php
$url = 'https://myip.ms';
$proxy = 'geo.iproyal.com:12321';
$proxyauth = 'detreaba112:Mata8246_country-us_session-s9idqw9n_lifetime-1m_streaming-1';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);

echo $curl_scraped_page;
?>


