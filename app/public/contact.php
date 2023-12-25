<?php
define( 'TITLE', 'ライバー事務所' );
define( 'DESC', 'JOYSEEQは、楽しさとクオリティを追求するライバー事務所です。ライバーの育成に最大限サポートします。' );
?>
<?php include('./referer.php'); ?>
<?php include('./header.php'); ?>
<main>

  <div class="p-contact">
    <img src="./assets/images/top/contact-logo.png" alt="" class="p-contact__logo">
    <form action="" method="post" class="form">
      <h2 class="p-contact__heading">TikTokエージェンシー登録のお申込【JOYSEEQ】</h2>
      <ul class="box">
        <li class="col">
          <div class="top">
            <label for="" class="title">お名前（本名）</label>
          </div>
          <div class="bottom">
            <input type="text" class="input" placeholder="山田">
            <input type="text" class="input" placeholder="太朗">
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">お名前（カナ）</label>
          </div>
          <div class="bottom">
            <input type="text" class="input" placeholder="ヤマダ">
            <input type="text" class="input" placeholder="タロウ">
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">性別</label>
          </div>
          <div class="bottom">
            <input type="radio" name="gender" value="male">
            <p class="read">男性</p>
            <input type="radio" name="gender" value="female">
            <p class="read">女性</p>
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">生年月日</label>
          </div>
          <div class="bottom">
            <select name="gender">
              <option value="male">年</option>
            </select>
            <select name="gender">
              <option value="male">月</option>
            </select>
            <select name="gender">
              <option value="male">日</option>
            </select>
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">住所</label>
          </div>
          <div class="middle">
            <input type="text" class="input" placeholder="〒000-0000">
            <select name="gender">
              <option value="male">都道府県</option>
            </select>
          </div>
          <div class="bottom">
            <input type="text" class="input" placeholder="渋谷区○○">
            <input type="text" class="input" placeholder="○○マンション ○○○号室">
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">携帯番号</label>
          </div>
          <div class="bottom">
            <input type="text" class="input" placeholder="090">
            <input type="text" class="input" placeholder="1234">
            <input type="text" class="input" placeholder="5678">
          </div>
        </li>

        <li class="col">
          <div class="top">
            <label for="" class="title">メールアドレス</label>
          </div>
          <div class="bottom1">
            <input type="text" class="input" placeholder="sample@joyseeq.jp">
            <p class="text">確認のため再度ご入力ください。</p>
            <input type="text" class="input" placeholder="sample@joyseeq.jp">
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">TikTokアカウントID</label>
          </div>
          <div class="bottom1">
            <p class="text">TikTok→プロフ→アイコン下のIDタップでコピー</p>
            <input type="text" class="input" placeholder="ヤマダ">
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">TikTokアカウントリンク</label>
          </div>
          <div class="bottom1">
            <p class="text">TikTok→プロフ→アイコンタップ→リンクコピー</p>
            <input type="text" class="input" placeholder="@入力してください">
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">ライバー様のLINE ID</label>
          </div>
          <div class="bottom1">
            <p class="text">所属ライバー様用の事務所LINEにて、今後ご連絡いたします。<br>
              まだ提出してない方は必ず提出してください。</p>
            <input type="text" class="input" placeholder="https://www.tiktok.com/@アカウント">
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">事務所ボーナス報酬 お振込先</label>
          </div>
          <div class="bottom1">
            <p class="text">正式名称にてご記入ください。<br>
              ご本人の口座のみ。<br>
              不備の場合、後日確認いたします。<br>
              ＊後日事務所LINEにて提出でも可</p>
            <input type="text" class="input" placeholder="○○銀行　○○支店　普通　1234567　ヤマダタロウ">
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">他配信アプリの配信データのスクショ</label>
          </div>
          <div class="bottom1">
            <p class="text">直近６カ月の内、一番良い月、1か月分</p>
            <input type="file" name="file">
            <span class="span">（最大1MB）</span>
            <p class="read">TikTok運営よりおすすめに載りやすいアイテム等を貰える可能性があるため、配信歴のある方は添付してください。</p>
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">他配信アプリの配信データのスクショ</label>
          </div>
          <div class="bottom1">
            <p class="text">直近６カ月の内、一番良い月、1か月分</p>
            <input type="file" name="file">
            <span class="span">（最大1MB）</span>
            <p class="read">TikTok運営よりおすすめに載りやすいアイテム等を貰える可能性があるため、配信歴のある方は添付してください。</p>
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">その他、添付資料</label>
          </div>
          <div class="bottom1">
            <input type="file" name="file">
            <span class="span">（最大1MB）</span>
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">ご質問など</label>
          </div>
          <div class="bottom1">
            <textarea name="" id="" cols="30" rows="10" placeholder="ヤマダ"></textarea>
          </div>
        </li>
        <li class="col">
          <div class="top">
            <label for="" class="title">ご質問など</label>
          </div>
          <div class="bottom1">
            <p class="text">
              【個人情報保護方針】<br>
              JOYSEEQライバー事務所（以下、当社）は、事業の内容および規模を考慮した適切な個人情報の収集、利用および提供を定めた社内規則を遵守します。<br>
              個人情報への不正アクセス、個人情報の紛失、破壊、改ざんおよび漏えいなどに関して、予防措置を講ずると共に、万一の発生時には速やかな是正対策を実施します。<br>
              個人情報に関する法令およびその他の規範を遵守します。<br>
              個人情報管理の仕組みを継続的に改善します。<br>
              【利用目的について】<br>
            </p>
          </div>
        </li>
        <li class="col">
          <div class="check">
            <input type="checkbox" id="scales" name="scales" checked />
            <label for="scales">個人情報の取り扱いについて同意する</label>
          </div>
        </li>
      </ul>

      <button type="submit" class="submit">確認画面へ</button>
      <input type="hidden" id="inquiry_type" name="inquiry_type" value="1" />
      <input type="hidden" name="token" value="<?php echo $token ?>">
    </form>
  </div>

</main>
<?php include('./footer.php'); ?>