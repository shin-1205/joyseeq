<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
header('Expires:-1');
header('Cache-Control:');
header('Pragma:');
//header("Access-Control-Allow-Credentials: true");
//header("AMP-Same-Origin : true");
//header("Access-Control-Allow-Origin: *.ampproject.org");
//header("AMP-Access-Control-Allow-Source-Origin: https://joyseeq.com");
//header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
/*var_dump($_REQUEST['ID']);*/


if(!empty($_GET['utm_source'])){
	$_SESSION['utm_source'] = $_GET['utm_source'];
	setcookie('utm_source', $_GET['utm_source'], time() + 60 * 60 * 24 * 30, '/', '.joyseeq.com');
}

if(!empty($_GET['utm_medium'])){
	$_SESSION['utm_medium'] = $_GET['utm_medium'];
	setcookie('utm_medium', $_GET['utm_medium'], time() + 60 * 60 * 24 * 30, '/', '.joyseeq.com');
}

if(!empty($_GET['utm_campaign'])){
	$_SESSION['utm_campaign'] = $_GET['utm_campaign'];
	setcookie('utm_campaign', $_GET['utm_campaign'], time() + 60 * 60 * 24 * 30, '/', '.joyseeq.com');
}

if(!empty($_GET['utm_id'])){
	$_SESSION['utm_id'] = $_GET['utm_id'];
	setcookie('utm_id', $_GET['utm_id'], time() + 60 * 60 * 24 * 30, '/', '.joyseeq.com');
}

if(!empty($_GET['utm_term'])){
	$_SESSION['utm_term'] = $_GET['utm_term'];
	setcookie('utm_term', $_GET['utm_term'], time() + 60 * 60 * 24 * 30, '/', '.joyseeq.com');
}

if(!empty($_GET['utm_content'])){
	$_SESSION['utm_content'] = $_GET['utm_content'];
	setcookie('utm_content', $_GET['utm_content'], time() + 60 * 60 * 24 * 30, '/', '.joyseeq.com');
}
/**********************************/
/* セッションが存在しない場合は… */
/**********************************/
if(!empty($_SESSION['h_referer'])){
	RequestGet($_REQUEST);
}
/****************************/
/* ＲＥＱＵＥＳＴ情報の取得 */
/****************************/
function RequestGet($request){
	if(!empty($request)){
		foreach($request as $r_key => $r_value){
			$_SESSION[$r_key] = $r_value;
		}
	}
	return;
}
/************************/
/* testコードを取得する */
/************************/
if(!empty($_GET['test'])){
	$_SESSION['test'] = $_GET['test'];
}
?>