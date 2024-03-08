<?php

function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");

//css,js読込み
function my_script_init() {
  wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", array(), "6.4.0", "all");
  wp_enqueue_style("style-swiper", "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css", array(), "8", "all");
  wp_enqueue_style("my", get_template_directory_uri() . "/public/assets/css/style.min.css", array(), filemtime(get_theme_file_path('/public/assets/css/style.min.css')), "all");
  wp_enqueue_script("my", get_template_directory_uri() . "/public/assets/js/script.min.js", array("jquery"), filemtime(get_theme_file_path('/public/assets/js/script.min.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");


//news
function post_has_archive( $args, $post_type ) { //設定後にパーマリンク更新
  if('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'works'; //ページURL
    $args['label'] = '制作実績'; //ページタイトル（設定画面上の変更）
  }
  return $args;
}
add_filter( 'register_post_type_args','post_has_archive',10,2 );


//アーカイブタイトル書き換え
function my_archive_title($title) {
  if(is_category()) {
    $title = single_cat_title('', false);
  }elseif (is_tag()) { // タグアーカイブの場合
    $title = single_tag_title('', false);
  }elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  }elseif (is_tax()) { // タームアーカイブの場合
    $title = single_term_title('', false);
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');

function my_the_post_category($anchor = true) {
  $category = get_the_category();
  if($category[0]) {
    if($anchor) {
      echo '<a href="'.get_category_link($category[0]->term_id).'">'. $category[0]->name .'</a>';
    }else{
    echo $category[0]->cat_name;
  }
}
}

//breadcrumb
function my_static_breadcrumb_adder( $breadcrumb_trail ) {
  if (is_post_type_archive('post')) { // デフォルトの投稿一覧ページの場合
    $item = new bcn_breadcrumb('works', null, array('post'));
    $stuck = array_pop( $breadcrumb_trail->breadcrumbs ); // HOME 一時退避
    $breadcrumb_trail->breadcrumbs[] = $item; // 任意の名前 追加
    $breadcrumb_trail->breadcrumbs[] = $stuck; // HOME 戻す
  } elseif (get_post_type() === 'post') { // デフォルトの投稿ページの場合
    $item = new bcn_breadcrumb('works', null, array('post'), home_url('works/'), null, true);
    $stuck = array_pop( $breadcrumb_trail->breadcrumbs ); // HOME 一時退避
    $breadcrumb_trail->breadcrumbs[] = $item; // 任意の名前 追加
    $breadcrumb_trail->breadcrumbs[] = $stuck; // HOME 戻す
    unset($breadcrumb_trail->breadcrumbs[0]); // 3つ目の要素を削除
  } elseif (get_post_type() === 'menu' && is_tax()) {
    unset($breadcrumb_trail->breadcrumbs[0]); // 3つ目の要素を削除
  }else {}
}
add_action('bcn_after_fill', 'my_static_breadcrumb_adder');

//MW WP Form
function my_mwform_error_message( $error, $key, $rule ) {
  if ( $key === 'select' && $rule === 'noempty' ) {
    return '選択してください。';
  }
  return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-xxx', 'my_mwform_error_message', 10, 3 );



?>