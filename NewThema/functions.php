<?php

function NewThema_source() {

  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'NewThema_source');


//registreer menu's
register_nav_menus( array(
   'hoofd' => __('Hoofd menu'),
   'footer' => __('Footer menu')
));
?>




