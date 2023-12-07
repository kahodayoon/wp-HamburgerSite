<?php get_header(); ?> 
  <body <?php body_class(); ?> class="js-body">
    <div class="l-main-contents">
      <div class="l-right-side">
        <?php get_sidebar(); ?>
        </div>
        <div class="l-left-side">
            <?php get_header('search'); ?>   
            <div class="l-container wrapper">
            <h1><?php the_search_query(); ?> の検索結果</h1>

            <?php
            if (have_posts() && get_search_query()) : 
                while (have_posts()) :
                the_post(); ?>
                <?php get_template_part('template-parts/archive','content'); ?>
            <?php endwhile; else :?>
            <p>検索キーワードに該当する記事がありませんでした。</p>
            <?php endif;?>
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

    <!--l-main-contentsのdiv-->
    <?php get_footer(); ?>

