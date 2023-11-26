<?php
    add_theme_support( 'menus' ); 
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); 

    //タイトル出力
    function HamburgerSite_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'HamburgerSite_title' );


//テーマディレクトリまでのパスを定数にしておく
define("DIRE", get_template_directory_uri());

function add_files(){
    //リセットCSS
    wp_enqueue_style('reset_style','https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css');
    //Googleフォント
    wp_enqueue_style('my_font1','https://fonts.googleapis.com',array(), '1.0.0' );
    wp_enqueue_style('my_font2','https://fonts.gstatic.com',array(), '1.0.0' );
    wp_enqueue_style('my_font2','https://fonts.googleapis.com/css2?family=M+PLUS+1&family=Roboto&display=swap',array(), '1.0.0' );
    //FontAwesome
    wp_enqueue_script('fontawesome_script', 'https://kit.fontawesome.com/92cec73944.js'); 
    //メインのCSSファイル
    wp_enqueue_style('my_style',DIRE.'/css/common.css',array(), '1.0.0' );
    //JavaScriptファイル
    wp_enqueue_script('my_script',DIRE.'/script.js',array( 'jquery' ), '1.0.0' ,false);
}
add_action('wp_enqueue_scripts', 'add_files');

//複数のウィジェット機能追加。 カスタムメニューで実装したので不要かも？
function wpbeg_widgets_init() {
    register_sidebar (
        array(
            'name'          => 'カテゴリーウィジェット',
            'id'            => 'category_widget',
            'description'   => 'カテゴリー用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
        )
    );
    register_sidebar(
        array(
          'name'          => 'タグウィジェット',
          'id'            => 'tag_widget',
          'description'   => 'タグ用ウィジェットです',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2><i class="fa fa-tags" aria-hidden="true"></i>',
          'after_title'   => "</h2>\n",
        )
      );
      //これだけ使用してる↓
      register_sidebar(
        array(
          'name'          => 'フッターウィジェット',
          'id'            => 'footer_widget',
          'description'   => 'フッター用ウィジェットです',
          'before_widget' => '',
          'after_widget'  => '',
          'before_title'  => '<h2><i class="fa fa-footer" aria-hidden="true"></i>',
          'after_title'   => "</h2>\n",
        )
      );
}
add_action( 'widgets_init', 'wpbeg_widgets_init' );