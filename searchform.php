<form method="get" action="<?php echo esc_url(home_url('/')); ?>" class="p-search-box" id="searchform">
  <div class="p-search-box__text">
    <label class="screen-reader-text" for="s"><?php echo __(' search', 'wp-hamburgersite' ); ?>検索:</label>
    <input class="c-input-text" type="text" placeholder="キーワード" value="<?php the_search_query(); ?>" size="20" name="s" id="s"/>
    <i class="c-icon--loupe"></i>
  </div>
  <input class="p-search-box__submit c-button" type="submit" value="検索" />
</form>