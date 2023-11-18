
<?php
 /*
 Template Name: イベント投稿ページ
 Template Post Type: post
 */
 ?>
 
<?php get_header(); ?>
<div class="head1">
 <?php the_content(); ?>
</div>
           
        <!-- 販売実績は投稿一覧に飛ばし画像とタイトル分を引っ張ってきたい -->
<?php
               $args = array(
                   // 投稿タイプ
                   'post_type'     => 'post',
                   // カテゴリー名
                   'category_name' => 'menuuu',
                   // 1ページに表示する投稿数
                   'posts_per_page' => 12,
               );
     // データの取得
     $posts = get_posts($args);
?>
              <div class="flexbox">
               <!--  ループ -->
                <?php foreach($posts as $post):?>
                <?php setup_postdata($post); ?>
                  <div class="flex1">
                    <a href="<?php the_permalink(); ?>"> 
                     <?php the_title(); ?>
                     </a> 
                     <?php the_content();?>
                    
                   </div>   
               <?php endforeach;?>
               <?php wp_reset_postdata();?> 
                </div>

<?php get_footer();?>
