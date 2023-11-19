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
    wp_enqueue_style('reset_style','https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css');
    wp_enqueue_style('my_font1','https://fonts.googleapis.com',array(), '1.0.0' );
    wp_enqueue_style('my_font2','https://fonts.gstatic.com',array(), '1.0.0' );
    wp_enqueue_style('my_font2','https://fonts.googleapis.com/css2?family=M+PLUS+1&family=Roboto&display=swap',array(), '1.0.0' );
    wp_enqueue_style('my_style',DIRE.'/css/common.css',array(), '1.0.0' );
    wp_enqueue_script('my_script',DIRE.'/script.js',array(), '1.0.0' ,true);
}
add_action('wp_enqueue_scripts', 'add_files');

