<?php
$url = 'https://www.walmart.com/seller/101066152';
$proxy = 'rotating-residential.geonode.com:9000';
$proxyauth = 'geonode_MpRIwBRwvh:8e0fa5ce-5781-40e0-8277-c65c91a62b20';

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


