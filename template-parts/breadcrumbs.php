<?php
    function the_breadcrumb() {
        global $post;
        echo '<ul id="breadcrumbs">';
        if (!is_home()) {
            echo '<li><a href="';
            echo get_option('home');
            echo '">';
            echo 'Home';
            echo '</a></li><li class="separator"> / </li>';
            if (is_category() || is_single()) {
                echo '<li>';
                the_category(' </li><li class="separator"> / </li><li> ');
                if (is_single()) {
                    echo '</li><li class="separator"> / </li><li>';
                    the_title();
                    echo '</li>';
                }
            } elseif (is_page()) {
                if($post->post_parent){
                    $anc = get_post_ancestors( $post->ID );
                    $title = get_the_title();
                    foreach ( $anc as $ancestor ) {
                        $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
                    }
                    echo $output;
                    echo '<strong title="'.$title.'"> '.$title.'</strong>';
                } else {
                    echo '<li><strong> '.get_the_title().'</strong></li>';
                }
            }
        }
        echo '</ul>';
    }
?>