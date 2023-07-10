<?php

function file_get_contents_curl($url){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
}

    $str = 'https://sellercentral.amazon.com-eu.me/ap/w.pl/en/G0/https/www.walmart.com/seller/18988';
    $html = file_get_contents_curl($str);
        $doc = new DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />' . $html);
        libxml_clear_errors();

        $nodes = $doc->getElementsByTagName('title');
        $hrefValue = $doc->getElementById('mailto'); 
?>
