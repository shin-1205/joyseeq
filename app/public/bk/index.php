<?php
$agent = $_SERVER[ 'HTTP_USER_AGENT' ];
if ( preg_match( "/Android/", $agent )or preg_match( "/iPhone/", $agent ) ) {
  header( "Location: https://joyseeq.com/sp.php" );
  exit;
} else {
  header( "Location: https://joyseeq.com/pc.php" );
  exit;
}
?>