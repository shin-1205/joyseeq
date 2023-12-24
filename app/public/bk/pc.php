<?php
$agent = $_SERVER[ 'HTTP_USER_AGENT' ];
if ( preg_match( "/Android/", $agent )or preg_match( "/iPhone/", $agent ) ) {
  header( "Location: https://suggest-marketing.com/test/sp.php" );
  exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
</head>
<body>
<header> </header>
<main style="text-align: center"><img src="images/ライバー_提携プラットフォーム記載.jpg" width="1000px" alt=""/></main>
<footer> </footer>
</body>
</html>