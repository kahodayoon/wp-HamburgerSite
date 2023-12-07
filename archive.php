<?php get_header(); ?>  
  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <div class="l-main-contents">
      <div class="l-right-side">
      <?php get_sidebar(); ?>
      </div>
      <div class="l-left-side">
      <?php get_header('search'); ?>        
        <div class="l-main p-archive-visual">
          <div class="l-main p-archive-visual__layer">
            <div class="p-archive-visual__text wrapper">
              <h2 class="c-main-font--archive-large">Menu:</h2>
              <p class="c-main-font--archive-small"><?php single_cat_title(); ?></p>
            </div>
          </div>
        </div>
        <div class="l-container wrapper">
          <div class="p-archive-section--main">
            <h2 class="c-title-font">小見出しが入ります</h2>
            <p class="c-main-text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
          </div>
          <div>
          <?php
            if( have_posts() ) :
              while( have_posts() ) :
              the_post(); ?>
             <?php get_template_part('template-parts/archive','content'); ?>
              <?php endwhile; else :?>
              <p>表示する記事がありません</p>
              <?php endif;?>
          </div>
          <!--p-archive-menuのdiv-->
         </div>
       
       <?php if ( $wp_query -> max_num_pages > 1 ) : //ページ数が1を超える場合に処理 ?>
          <div class="p-pagenavi wrapper">
            <!-- //class="p-pagenavi wrapper" -->
            <p class="c-iphonepage-previous"><?php next_posts_link( '&lt;&lt; 前へ' ); ?></p>
            <p class="c-iphonepage-next"><?php previous_posts_link( '次へ &gt;&gt;' ); ?></p>
          </div>
       <?php endif; ?>
          <?php wp_pagenavi(); ?>
      </div>
      <!--l-left-sideのdiv-->
    </div>
    </div>

    <!--l-main-contentsのdiv-->
    <?php get_footer(); ?>
    