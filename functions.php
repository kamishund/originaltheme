<?php
function post_has_archive($args, $post_type)
{ // 設定後に（パーマリンク更新すること）
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news';
        $args['label'] = 'お知らせ';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// カスタム投稿タイプ

function cpt_register_main()
{ //add_actionの２つのパラメーターを定義
    $labels = [
        "singular_name" => "main",
        "edit_item" => "main",
    ];
    $args = [
        "label" => "メインビジュアル", //管理画面に出てくる名前
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => ["slug" => "main", "with_front" => true], //スラッグをworksに設定
        "query_var" => true,
        "menu_position" => 5,
        "supports" => ["title", "editor", "thumbnail"],
    ];
    register_post_type("main", $args);
}
add_action('init', 'cpt_register_main');
