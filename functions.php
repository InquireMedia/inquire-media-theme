<?php

function inquire_theme_support(){
    // Add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'inquire_theme_support');

function inquire_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'inquire_menus');



function inquire_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('inquire-style', get_template_directory_uri() . "/style.css", array('inquire-bootstrap'), $version, 'all');
    wp_enqueue_style('inquire-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('inquire-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'inquire_register_styles');

function inquire_register_scripts(){
    wp_enqueue_script( 'inquire-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script( 'inquire-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script( 'inquire-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
    wp_enqueue_script( 'inquire-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'inquire_register_scripts');

function inquire_widget_areas(){

    register_sidebar( 
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'before_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )  
    );

    register_sidebar( 
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'before_widget' => '</ul>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )  
    );

}

add_action('widgets_init', 'inquire_widget_areas');

function inquire_excerpt_length( $length ) {
    return 20;
}

add_filter('excerpt_length', 'inquire_excerpt_length');

function inquire_return_categories(){
    $categories = get_categories();
    $categories_array = array();
    foreach($categories as $category){
        $categories_array[$category->term_id] = $category->name;
    }
    return $categories_array;
}

function inquire_return_articles_by_category($category_id, $number_of_articles){
    $articles = new WP_Query(array(
        'posts_per_page' => $number_of_articles,
        'category_name' => $category_id
    ));
    return $articles;
}

function inquire_build_section($category_name, $number_of_articles){
    $articles = inquire_return_articles_by_category($category_name, $number_of_articles);
    $link = get_category_link(get_cat_ID($category_name));
    echo    '<div class="col-12">';
    echo    '<hr class="news-section-hr '. $category_name .'-Bar">';
    echo    '<a class="news-section-bar '.$category_name.'" href="'.$link.'">
                <p class="news-section-text-option">'.$category_name.'</p>
            </a>';
    echo   '<div id="'.$category_name.'-Row" class="row mainOpinion">';
    while($articles->have_posts()){
        $articles->the_post();
        get_template_part('template-parts/content', 'block');
    }
    echo    '</div>';
    echo    '</div>';
}

?>
