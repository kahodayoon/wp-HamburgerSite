<?php get_header(); ?>  
  <body <?php body_class(); ?> class="js-body">
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
              <p class="c-main-font--archive-small">チーズバーガー</p>
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
          <div class="p-archive-menu-main">
            <section class="p-archive-menu--cheseburger">
              <img
                class="p-archive-menu__image"
                src="<?php echo get_template_directory_uri(); ?>/img/cheseburger.jpg"
                alt="チーズバーガーの写真"
              />
              <div class="p-archive-menu__textbox wrapper">
                <h3 class="p-archive-menu__title">チーズバーガー</h3>
                <h4 class="p-archive-menu__sub-title">小見出しが入ります</h4>
                <p class="p-archive-menu__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <div class="c-button--archive">詳しく見る</div>
              </div>
            </section>
            <section class="p-archive-menu--doublecheseburger">
              <img
                class="p-archive-menu__image"
                src="<?php echo get_template_directory_uri(); ?>/img/cheseburger.jpg"
                alt="ダブルチーズバーガーの写真"
              />
              <div class="p-archive-menu__textbox wrapper">
                <h3 class="p-archive-menu__title">ダブルチーズバーガー</h3>
                <h4 class="p-archive-menu__sub-title">小見出しが入ります</h4>
                <p class="p-archive-menu__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <div class="c-button--archive">詳しく見る</div>
              </div>
            </section>
            <section class="p-archive-menu--specialcheseburger">
              <img
                class="p-archive-menu__image"
                src="<?php echo get_template_directory_uri(); ?>/img/cheseburger.jpg"
                alt="スペシャルチーズバーガーの写真"
              />
              <div class="p-archive-menu__textbox wrapper">
                <h3 class="p-archive-menu__title">スペシャルチーズバーガー</h3>
                <h4 class="p-archive-menu__sub-title">小見出しが入ります</h4>
                <p class="p-archive-menu__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <div class="c-button--archive">詳しく見る</div>
              </div>
            </section>
          </div>
          <!--p-archive-menuのdiv-->
        </div>
        <div class="p-pagenavi wrapper">
          <p class="c-iphonepage-previous">&lt;&lt; 前へ</p>
          <p class="c-iphonepage-next">次へ &gt;&gt;</p>
          <p class="c-tabletpage-text">page 1/10</p>
          <p class="c-tabletpage-arrow--previous">&lt;&lt;</p>
          <p class="c-tabletpage-number c-tabletpage-number--first">1</p>
          <p class="c-tabletpage-number">2</p>
          <p class="c-tabletpage-number">3</p>
          <p class="c-tabletpage-number">4</p>
          <p class="c-tabletpage-number">5</p>
          <p class="c-tabletpage-number">6</p>
          <p class="c-tabletpage-number">7</p>
          <p class="c-tabletpage-number">8</p>
          <p class="c-tabletpage-number">9</p>
          <p class="c-tabletpage-arrow--next">&gt;&gt;</p>
        </div>
      </div>
      <!--l-left-sideのdiv-->
    </div>
    <!--l-main-contentsのdiv-->
    <?php get_footer(); ?>
    