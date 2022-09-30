<?php 

function register_theme_pattern_categories(){
    register_block_pattern_category(
    'savanna',
    array(
        'label'=> "Savanna"
    )
);

}

add_action('init','register_theme_pattern_categories');

?>
