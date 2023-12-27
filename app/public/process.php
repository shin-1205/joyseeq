<?php include_once("../referer.php") ?>
<?php
if ( $_SESSION[ 'token' ] === $_POST[ 'token' ] ) {
  header( "Location: ./" );
  if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
    $myoji = $_POST[ "myoji" ];
    $name = $_POST[ "name" ];
    $email = str_replace( array( "\r", "\n" ), '', $_POST[ "email" ] );
    $tel = $_POST[ "tel" ];
    $message = $_POST[ "message" ];
    $inquiry_type = $_POST[ "inquiry_type" ];

    if ( !empty( $_SESSION[ 'utm_source' ] ) ) {
      $utm_source = $_SESSION[ 'utm_source' ];
    }
    if ( !empty( $_SESSION[ 'utm_medium' ] ) ) {
      $utm_medium = $_SESSION[ 'utm_medium' ];
    }
    if ( !empty( $_SESSION[ 'utm_campaign' ] ) ) {
      $utm_campaign = $_SESSION[ 'utm_campaign' ];
    }
    if ( !empty( $_SESSION[ 'utm_id' ] ) ) {
      $utm_id = $_SESSION[ 'utm_id' ];
    }
    if ( !empty( $_SESSION[ 'utm_term' ] ) ) {
      $utm_term = $_SESSION[ 'utm_term' ];
    }
    if ( !empty( $_SESSION[ 'utm_content' ] ) ) {
      $utm_content = $_SESSION[ 'utm_content' ];
    }


    $contents = <<<EOD
■名前■
{$myoji}　{$name}

■メールアドレス■
{$email}

■電話番号■
{$tel}

■お問い合わせ内容■
{$message}

■お問い合わせタイプ■
{$inquiry_type}


■キャンペーンID■
{$utm_source}

■キャンペーンソース■
{$utm_medium}

■キャンペーン媒体■
{$utm_campaign}

■キャンペーン名■
{$utm_id}

■キャンペーン期間■
{$utm_term}

■キャンペーン内容■
{$utm_content}
		
EOD;

    $contents2 = <<<EOD
お問い合わせありがとうございます。
必ず返信いたしますので、しばらくお待ちください。

E-mail: 
サイト運営者：JOYSEEQ
 
EOD;


    // 自分に送るお問い合わせ内容メールを構築
    $to = "#";
    // 相手に送るお問い合わせ内容メールを構築
    $to2 = $email;

    $mailtitle = "{$myoji} {$name}様よりお問い合わせが届きました。";
    $header = 'From: ' . "$to" . "\r\n";
    $header .= 'Return-Path: ' . $to;

    $mailtitle2 = "【自動送信】受付を完了いたしました。";
    $header2 = 'From: ' . "$to" . "\r\n";
    $header2 .= 'Return-Path: ' . $to;

    mb_language( "Japanese" );
    mb_internal_encoding( "UTF-8" );


    //  mb_send_mail(送信先,タイトル,本文,追加ヘッダ,追加コマンドラインパラメータ)
    if ( mb_send_mail( $to2, $mailtitle2, $contents2, $header2 ) ) { // 相手に送信 // #3

      $message = '<p class="question-text">『' . $email . '』宛に確認メールを送信しました<br>お問い合わせありがとうございます。</p>';

      if ( mb_send_mail( $to, $mailtitle, $contents, $header ) ) { // 自分に送信 // #4

        header( 'Location:thanks.php' );
      } else { // #4
        $message = '<p class="question-text error">何らかの理由で送信エラーが発生しました<br>しばらく待ってから再度送信してください</p>';
        header( 'Location:https://joyseeq.com' );
      } // #4
    } else { // #3
      $message = '<p class="question-text error">『' . $email . '』宛に確認メールを送信できませんでした。<br>正しいメールアドレスで再度ご連絡をお願いいたします。</p>';
      header( 'Location:https://joyseeq.com' );
    } // #3

  }
} else { // #1
  // 直接send.phpにアクセスしようとしたら強制的にリダイレクト
  header( 'Location:https://joyseeq.com' );
} // #1
exit; // スクリプトの実行を終了
?>