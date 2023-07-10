<?php
$random = substr(md5(mt_rand()), 0, 30);
$ip = getenv("REMOTE_ADDR");
$file = fopen("view.txt","a");
fwrite($file, $ip."\n");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Amazon</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

<meta name="generator" content="Construct 3">
	<meta name="author" content="html5juice">
	<meta name="description" content="Graduation game, funny, memories for kids about animals world">
	<link rel="manifest" href="appmanifest.json">
	<link rel="apple-touch-icon" sizes="128x128" href="icons/icon-128.png">
	<link rel="apple-touch-icon" sizes="256x256" href="icons/icon-256.png">
	<link rel="apple-touch-icon" sizes="512x512" href="icons/icon-512.png">
	<link rel="icon" type="image/png" href="icons/icon-512.png">

<link rel="stylesheet" href="style.css">

</head>
<body>
<div id="fb-root"></div>

	<noscript>
		<div id="notSupportedWrap">
			<h2 id="notSupportedTitle">This content requires JavaScript</h2>
			<p class="notSupportedMessage">JavaScript appears to be disabled. Please enable it to view this content.</p>
		</div>
	</noscript>
	<script src="scripts/supportcheck.js"></script>
	<script src="scripts/offlineclient.js" type="module"></script>
	<script src="scripts/main.js" type="module"></script>
	<script src="scripts/register-sw.js" type="module"></script>
</body>
</html>