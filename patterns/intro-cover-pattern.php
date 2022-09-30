<?php 

function intro_cover_pattern(){
    $content = '<!-- wp:group -->
    <div class="wp-block-group"><!-- wp:cover {"url":"http://localhost/wp/wp-content/uploads/2022/09/Savannah-Tech-1.jpg","id":35,"dimRatio":50,"customOverlayColor":"#0f173e","isDark":false,"className":"intro-cover"} -->
    <div class="wp-block-cover is-light intro-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#0f173e"></span><img class="wp-block-cover__image-background wp-image-35" alt="Background Image" src="http://localhost/wp/wp-content/uploads/2022/09/Savannah-Tech-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"intro-cover-container"} -->
    <div class="wp-block-group intro-cover-container"><!-- wp:heading {"textColor":"white","className":"intro-cover-title"} -->
    <h2 class="intro-cover-title has-white-color has-text-color">SavannaTech</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"white","className":"intro-cover-text"} -->
    <p class="intro-cover-text has-white-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc enim sapien, porta non sodales sed, pellentesque pellentesque dolor.&nbsp;</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"className":"intro-cover-btns"} -->
    <div class="wp-block-buttons intro-cover-btns"><!-- wp:button {"style":{"color":{"background":"#4691ce"}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-background" style="background-color:#4691ce">Hire Talent</a></div>
    <!-- /wp:button -->
    
    <!-- wp:button {"style":{"color":{"background":"#8d632f"}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-background" style="background-color:#8d632f">Join Our Developers</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group -->';


    register_block_pattern(
        'savannatech/cover-intro',
        array(
            'title'=> 'Savanna Cover Intro',
            'content'=>$content,
            'categories'=>array(
                'savanna'
            )
        )
        );
    
       
    
}

add_action('init','intro_cover_pattern');
?>