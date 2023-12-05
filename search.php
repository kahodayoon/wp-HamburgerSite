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
                <section class="p-archive-menu">
                <?php if(has_post_thumbnail()) : ?>
                <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php the_post_thumbnail( 'full',array( 'class' => 'p-archive-menu__image' )); ?>
                </a>
                <?php else : ?>
                <a href="<?php echo esc_url(get_permalink()); ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('/img/dummy-image.jpg')); ?>" alt="" class="p-archive-menu__image"> 
                </a>
                <!-- アイキャッチ画像を指定しなかったときのダミー画像を表示させる↑ -->
                <?php endif ; ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                  <h2 class="p-archive-menu__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="p-archive-menu__text">
                  <?php the_content('詳しく見る'); ?>
                  </div>
              </section>
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

