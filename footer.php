<footer class="l-footer">
    <?php
          if ( is_active_sidebar( 'footer_widget' ) ) :
              dynamic_sidebar( 'footer_widget' );
          else:
      ?>
          <div class="widget">
          <h2>No Widget</h2>
          <p>ウィジットは設定されていません。</p>
          </div>
    <?php endif; ?>
      <!-- <p class="c-info">ショップ情報<span> | </span>ヒストリー</p> -->
      <p class="c-copyright">Copyright: <?php bloginfo( 'name' ); ?> </p>
      <!-- RaiseTech部分を変更した -->
    </footer>
    <?php wp_footer(); ?>
  </div>
  </body>
</html>
