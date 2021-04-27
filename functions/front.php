

<?php

/**
* サイドバーの投稿数をリンクタグ内にいれる(カテゴリー/アーカイブ)
*/
add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );
function my_list_categories( $output, $args ) {
    $output = preg_replace('/<\/a>\s*\((\d+)\)/',' ($1)</a>',$output);
    return $output;
}
add_filter( 'get_archives_link', 'my_archives_link' );
function my_archives_link( $output ) {
    $output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/',' ($2)</a>',$output);
    return $output;
}


/**
* カテゴリーを色分け
*/
function categories_label() {
    $cats = get_the_category();
    foreach($cats as $cat) {
        echo '<li><a href="'.get_category_link($cat->term_id).'" ';
        echo 'class="'.esc_attr($cat->slug).'">';
        echo esc_html($cat->name);
        echo '</a></li>';
    }
}



