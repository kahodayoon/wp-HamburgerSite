<?php get_header(); //header.phpに切り取り。 ?>  
  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="wrap">
    <div class="l-main-contents">
      <div class="l-right-side">
      <?php get_sidebar(); ?>
      </div>
      <div class="l-left-side">
      <?php get_header('search'); //header-search.phpに切り取り ?>  
      <div class="l-container wrapper">
      <h2 class="c-title-font u-mb-small">404 error</h2>
      <p class="c-main-text u-mb-small">お探しのページが見つかりませんでした。<br>お探しのページは移動もしくは削除された可能性があります。<br>また、URLにタイプミスがないか再度ご確認ください。：
      <span class="error_msg">
      http://<?php echo esc_html($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?>
      </span></p>
      <p class="c-button__home"><a href="<?php echo esc_url(home_url()); ?>">HOME</a></p>
      </div>
      </div>
      <!--l-left-sideのdiv-->
    </div>
    <!--l-main-contentsのdiv-->
    <?php get_footer(); ?>