<?php
define( 'PATH', './assets/images/common/dummy_thumb.jpg' );
define( 'DUMMY', 'src=' . PATH . '' );
define( 'MAIL', '#link_mail' );
define( 'TEL', 'tel:050-3778-6803' );
define( 'LINE', 'line_jump.php' );

function get_current_page_url() {
  return ( ( ( !empty( $_SERVER[ 'HTTPS' ] ) && $_SERVER[ 'HTTPS' ] !== 'off' ) ) ? "https://" : "http://" ) . $_SERVER[ 'HTTP_HOST' ];
}

function ua_smt() {
  $ua = $_SERVER[ 'HTTP_USER_AGENT' ];
  $ua_list = array( 'iPhone', 'iPad', 'iPod', 'Android' );
  foreach ( $ua_list as $ua_smt ) {
    if ( strpos( $ua, $ua_smt ) !== false ) {
      return true;
    }
  }
  return false;
}
?>
<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="./assets/style.css?<?php echo mt_rand(); ?>" rel="stylesheet" type="text/css" media="all" />
  <title>JOYSEEQ | <?php echo TITLE;?></title>
  <?php include_once("tag/head_tag.php") ?>
  <meta name="description" content="<?php echo DESC;?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="JOYSEEQ | ライバー事務所">
  <meta property="og:description" content="<?php echo DESC;?>">
  <meta property="og:url" content="<?php echo get_current_page_url();?>">
  <meta property="og:image" content="<?php echo get_current_page_url();?>/assets/images/common/ogp.jpg">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="./assets/images/favicon/site.webmanifest">
  <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <?php include_once("tag/start_body_tag.php") ?>
  <div class="l-wrapper">
    <header class="l-header" id="js_header">
      <div class="l-header__inner">
        <h1 class="l-header__logo"> <a href="/"> <img src="./assets/images/common/logo.jpg" alt="JOYSEEQ"> </a> </h1>
        <div class="l-header__right">
          <ul class="l-header__nav" id="js_nav">
            <li class="l-header__nav-item"> <a href="<?php echo get_current_page_url(); ?>/#link_about"
                class="header__nav-link js_sp_anchor">
                <h4 class="l-header__nav-ttl">ABOUT</h4>
                <p class="l-header__nav-sub">企業情報</p>
              </a> </li>
            <li class="l-header__nav-item"> <a href="<?php echo get_current_page_url(); ?>#link_support"
                class="header__nav-link js_sp_anchor">
                <h4 class="l-header__nav-ttl">SUPPORT</h4>
                <p class="l-header__nav-sub">サポート体制</p>
              </a> </li>
            <li class="l-header__nav-item"> <a href="<?php echo get_current_page_url(); ?>/#link_tarent"
                class="header__nav-link js_sp_anchor">
                <h4 class="l-header__nav-ttl">MESSAGE</h4>
                <p class="l-header__nav-sub">メッセージ</p>
              </a> </li>
            <li class="l-header__nav-item"> <a href="<?php echo get_current_page_url(); ?>#link_flow"
                class="header__nav-link js_sp_anchor">
                <h4 class="l-header__nav-ttl">FLOW</h4>
                <p class="l-header__nav-sub">登録の流れ</p>
              </a> </li>
            <li class="l-header__nav-item"> <a href="<?php echo get_current_page_url(); ?>#link_qa"
                class="header__nav-link js_sp_anchor">
                <h4 class="l-header__nav-ttl">Q&A</h4>
                <p class="l-header__nav-sub">よくある質問</p>
              </a> </li>
            <li class="l-header__nav-item"> <a href="<?php echo get_current_page_url(); ?>#link_partner"
                class="header__nav-link js_sp_anchor">
                <h4 class="l-header__nav-ttl">PARTNER</h4>
                <p class="l-header__nav-sub">提携企業</p>
              </a> </li>
            <li class="l-header__nav-item"> <a href="<?php echo get_current_page_url(); ?>#link_movie"
                class="header__nav-link js_sp_anchor">
                <h4 class="l-header__nav-ttl">Movie</h4>
                <p class="l-header__nav-sub">動画</p>
              </a> </li>

          </ul>
          <a href="<?php echo htmlspecialchars( LINE ); ?>" class="l-header__line" target="_blank"> <img
              src="./assets/images/common/icon_line_header.png" alt=""> </a>
          <button class="l-header__toggle" id="js_toggle"> <span class="inside"> <span class="line"></span> <span
                class="line"></span> <span class="line"></span> </span> </button>
        </div>
      </div>
    </header>