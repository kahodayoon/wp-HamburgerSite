<?php get_header(); //header.phpに切り取り。 ?>  
  <body  <?php body_class(); ?> class="js-body">
  <div class="wrap">
  <?php wp_body_open(); ?>
    <div class="l-main-contents">
      <div class="l-right-side">
      <?php get_sidebar(); ?>
      </div>
      <div class="l-left-side">
      <?php get_header('search'); //header-search.phpに切り取り ?>  
        <div class="l-main--visual">
            <!-- アイキャッチ画像を設定した場合、p-single-visualのdivタグがつく。 -->
            <?php if(has_post_thumbnail()) : ?>
            <div class="p-title-visual">
              <?php the_post_thumbnail(); ?>
              <?php endif ; ?> 
          <h2 class="c-main-font-visual wrapper"><?php echo get_the_title(); ?></h2>
          <?php if(has_post_thumbnail()) : ?>
            </div>
          <?php endif ; ?> 
          </div>
        <div class="l-container wrapper p-introduction">
          <?php
            if( have_posts() ) :
             while( have_posts() ) :
              the_post(); ?>
              <!-- <section class="p-archive-menu"> -->
              
              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                <?php the_content(); ?>
              </div>
              <?php endwhile; else :?>
              <p>表示する記事がありません</p>
              <?php endif;?>
        </div>
        </div>
        <!--l-containerのdiv-->
      </div>
      <!--l-left-sideのdiv-->
    </div>
    <!--l-main-contentsのdiv-->
    <?php get_footer(); ?>