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

  <?php if ($pos=strpos($post->post_content, '<!--more-->')): ?>
  <!-- Moreを入れてある投稿の時に表示 -->
  <?php the_content('詳しく見る');?>
  <?php else : ?>
  <!-- Moreを入れてない投稿の時に表示 -->
  <?php the_excerpt();  ?>
  <?php endif; ?>
    
  </div>
</section>