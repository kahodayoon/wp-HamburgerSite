<?php
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    register_nav_menus( array(
        'sidebar-menu' => 'SidebarMenu',
      ));

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
    // wp_enqueue_style('my_font1','https://fonts.googleapis.com',array(), '1.0.0' );
    // wp_enqueue_style('my_font2','https://fonts.gstatic.com',array(), '1.0.0' );
    wp_enqueue_style('my_font2','https://fonts.googleapis.com/css2?family=M+PLUS+1&family=Roboto&display=swap',array(), '1.0.0' );
    //FontAwesome
    wp_enqueue_script('fontawesome_script', 'https://kit.fontawesome.com/92cec73944.js' , '6'); 
    //メインのCSSファイル
    wp_enqueue_style('my_style',DIRE.'/css/common.css',array(), '1.0.0' );
    //JavaScriptファイル
    wp_enqueue_script('my_script',DIRE.'/script.js',array( 'jquery' ), '1.0.0' ,true);
}
add_action('wp_enqueue_scripts', 'add_files');

//複数のウィジェット機能追加。 
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

//ビジュアルエディタにCSSを設定する（今回は実装しない）
// function my_setup_theme() {
// 	add_theme_support( 'editor-styles' );
// }
// add_action( 'after_setup_theme', 'my_setup_theme' );

// function HamburgerSite_theme_add_editor_styles() {
//     add_editor_style( get_template_directory_uri() . "/css/common.css" );
// }
// add_action( 'admin_init', 'HamburgerSite_theme_add_editor_styles' );


//フィードの設定
add_theme_support( 'automatic-feed-links' );

//固定ページをサイト内検索から除外する。（検索を投稿に限定する）
function search_pre_get_posts( $query ) {
    //管理画面、メインクエリー以外では何もしない
    if ( is_admin() || ! $query->is_main_query() ) {
    return;
    }
    //サイト内検索でのみ動作
    else if ( $query->is_search ){
    //固定ページをサイト内検索から除外
    $query->set( 'post_type', 'post' );
    }
    return $query;
    }
    add_action( 'pre_get_posts', 'search_pre_get_posts' );




//アーカイブページの「詳しく見る」の表示設定 the_excerptの設定。プラグイン「WP Multibyte Patch」をインストール済み。  
//moreタグを入れなくてもarchive.phpの抜粋のみ表示させる。
function new_excerpt_more($post) {
    return '<a href="'. get_permalink() . '">' . '詳しく見る' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
//抜粋する文字数を変更。
function new_excerpt_mblength($length) {
    return 55;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

//テーマチェックによる追加
add_theme_support( 'wp-block-styles' );
add_theme_support( "responsive-embeds" );
add_theme_support( "align-wide" ) ;
add_theme_support( "custom-logo") ;
add_theme_support( "custom-header") ;
add_theme_support( "custom-background") ;

//投稿画面に独自のブロックスタイルを追加
register_block_style(
	'core/paragraph',
	array(
		'name'  => 'box-pink',
		'label' => 'ボックス（ピンク）',
		'inline_style' => '.is-style-box-pink{
			background: #ffc0cb;
			border: 1px solid #ff00ff;
			padding: 1em;
		}',
	)
);