<?php get_header();?>

<body>  
<main>
  <section id="movecontent">
    <div class="carousel">
    <div><a href=""><img id="carousel1" class="carouselimg" src="<?php echo get_template_directory_uri(); ?>/image/damy.png" ></a></div>
    <div><a href=""><img id="carousel2" class="carouselimg" src="<?php echo get_template_directory_uri(); ?>/image/damy.png" ></a></div>
    <div><a href=""><img id="carousel3" class="carouselimg" src="<?php echo get_template_directory_uri(); ?>/image/damy.png" ></a></div>
    </div>
  </section>

    <div class="companylogo">
      <a href="index.html">
        <!--header-->
        <img src="<?php echo get_template_directory_uri(); ?>/logo1.png" id="logosp">
      </a>

    </div> 
      <div class="footer_social">
      <span>SNSはこちらからチェック!</span>
        <a href="https://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/button-twitter.png" class="sns"></a>
        <a href="https://www.facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/button-facebook.png" class="sns"></a>   
      </div>
      <div class="footer-nav">
        <a class="navcontent"href="<?php echo home_url(); ?>/salon">メニュー</a>
        <a class="navcontent"href="<?php echo home_url(); ?>/hairmake">イベント</a>
        <a class="navcontent"href="<?php echo home_url(); ?>/menu">アクセス</a>
        <a class="navcontent"href="<?php echo home_url(); ?>/reserve">予約</a>
      </div>
    

    <!-- main-content -->
    <div class="main-content">
         <br>
      <h1>「ささやかな一杯で、幸せな一生に」</h1>
        <br>
        <p>「仲間と共に多くの人に幸せを届けて、仲間と共に幸せになれたらいいな」</p>
        <p>そんな思いを詰め込んだ場所を作りました。</p>
        <p>ささやかな一杯で幸せをお届けします。</p>
    </div> 
  <br>
  <br>

    <h3 class="section-headline">各種SNSはこちら</h3>
    <div class="sns">
      <a href="https://www.instagram.com/"></a>
      <a href="https://twitter.com/"></a>
    </div>
    <div class="snslogo">
      <a href="https://www.instagram.com/"><img src="<?php echo get_template_directory_uri(); ?>/image/instagram.jpeg" alt="instagram"></a>
      <a href="https://twitter.com/"><img src="<?php echo get_template_directory_uri(); ?>/image/x.jpeg" alt="x(twitter)"></a>
    </div>

    <?php get_footer();?>
