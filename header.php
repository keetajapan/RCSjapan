<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name= description content= "ここは森の中のカフェ">
  <title>KYR-STAND</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Noto+Sans+JP:wght@100;200;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/bootstrap4/bootstrap.min.css" />
  <link href="<?php echo get_template_directory_uri(); ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/main_styles.css" />
  <?php wp_head(); ?>
</head>
<body>
  <!-- ヘッダーここから -->
<header>  
    <div class="companylogo">
      <div>
       <a href="<?php echo home_url(); ?>/top">
       <img src="<?php echo get_template_directory_uri(); ?>/image/logo.jpeg" id="logo">
       </a>
      </div>
     
    </div> 
    <div class="navpc">
    <a class="navcontent"href="<?php echo home_url(); ?>/#concept">コンセプト</a>
    <a class="navcontent"href="<?php echo home_url(); ?>/menu">メニュー</a>
    <a class="navcontent"href="<?php echo home_url(); ?>/ivent">イベント</a>
    <a class="navcontent"href="<?php echo home_url(); ?>/ac">アクセス</a>
    <a class="navcontent"href="<?php echo home_url(); ?>/contact">コンタクト</a>
    
    </div> 
      <!-- スマホ用 -->
      <img id="menu-sp" src="<?php echo get_template_directory_uri(); ?>image/bars_24.png" alt="ナビゲーションを開く" >
      <a class="close"><img src="<?php echo get_template_directory_uri(); ?>/button-close.png" class="closebutton"></a>
      <div class="navsp">
      <a class="navcontent"href="<?php echo home_url(); ?>/salon">メニュー</a>
      <a class="navcontent"href="<?php echo home_url(); ?>/hairmake">イベント</a>
      <a class="navcontent"href="<?php echo home_url(); ?>/menu">アクセス</a>
      <a class="navcontent"href="<?php echo home_url(); ?>/reserve">予約</a>
    </div> 
</header>
<!-- ヘッダーここまで -->
