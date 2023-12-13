<?php get_header(); ?>  
  <body <?php body_class( ); ?>>
  <?php wp_body_open(); ?>
    <div class="l-main-contents">
      <div class="l-right-side">
      <?php get_sidebar(); ?>
      </div>
      <div class="l-left-side">
      <?php get_header('search'); //header-search.phpに切り取り ?>  
        <div class="l-main p-main-visual">
          <h2 class="c-main-font--front wrapper">ダミーサイト</h2>
        </div>
        <div class="l-container--front wrapper">
          <section class="p-section--TakeOut">
            <div class="p-section__title">
              <h2 class="p-section__title-font">
                <a href="<?php echo esc_url( get_category_link(get_cat_ID('Take Out')) ); ?>">
                Take Out
                </a></h2>
              <div class="p-section__border"></div>
            </div>
            <div class="p-section__box">
              <div class="p-section__box1">
                <h3 class="p-section__sub-font">Take OUT</h3>
                <p class="p-section__text-font">
                  当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
                </p>
              </div>
              <div class="p-section__box2">
                <h3 class="p-section__sub-font">Take OUT</h3>
                <p class="p-section__text-font">
                  当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
                  当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
                </p>
              </div>
            </div>
          </section>
          <section class="p-section--EatIn">
            <div class="p-section__title">
              <h2 class="p-section__title-font">
              <a href="<?php echo esc_url( get_category_link(get_cat_ID('Eat In')) ); ?>">
              Eat In</a></h2>
              <div class="p-section__border"></div>
            </div>
            <div class="p-section__box">
              <div class="p-section__box1">
                <h3 class="p-section__sub-font">Eat In</h3>
                <p class="p-section__text-font">
                  店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                </p>
              </div>
              <div class="p-section__box2">
                <h3 class="p-section__sub-font">Eat In</h3>
                <p class="p-section__text-font">
                  店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                </p>
              </div>
            </div>
          </section>
        </div>
        <div class="l-map p-map">
          <div class="p-map__layer">
            <div class="p-map__layer__black"></div>
            <div class="p-map__text-box">
              <h2 class="p-map__title-font">見出しが入ります</h2>
              <div class="p-map__border"></div>
              <p class="p-map__text-font">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
          </div>
        </div>
      </div>
      <!--l-left-sideのdiv-->
    </div>
    <!--l-main-contentsのdiv-->
    <?php get_footer(); ?>