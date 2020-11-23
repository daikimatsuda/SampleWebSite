<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="キーワード">
  <meta name="description" content="紹介文">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sp.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/tab.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/pc.css" type="text/css" />
  <!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
  <!-- メイン -->
  <div id="main">
    <!-- ヘッダー -->
    <div id="header">
      <h1>こちらには、メインキーワードや紹介文を入れてください</h1>
      <div id="header_inner">
        <div id="h_logo">
          <h2><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?></a></h2>
        </div>
        <div id="h_info">
          <p>お問い合わせをお待ちしております</p>
          <p class="tel">TEL. 00-0000-0000</p>
          <p><b>営業時間</b> AM10:00 ～ PM20:00</p>
        </div>
      </div>
    </div>
    <div id="header-menu">
      <?php wp_nav_menu(); ?>
    </div>
    <!-- ヘッダー終わり -->