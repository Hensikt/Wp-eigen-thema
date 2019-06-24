<?php

function NewThema_source() {

  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('mijn Googlefonts', '//fonts.googleapis.com/css?family=PT+Serif|Poller+One&display=swap&subset=cyrillic,cyrillic-ext,latin-ext');
}

add_action('wp_enqueue_scripts', 'NewThema_source');


//registreer menu's
register_nav_menus( array(
   'hoofd' => __('Hoofd menu'),
   'footer' => __('Footer menu')
));

// Registeren/initialiseren van Widgets

function NewThema_widgets(){
  register_sidebar(array(
      'name'          => __('Widget aside'),
      'id'            => __('widget_aside'), // ID should be LOWERCASE ! ! !
      'description'   => __('Hier komt widgets voor de aside plaatsen'),
      'before_widget' => '  ',
      'after_widget'  => '  ',
      'before_title'  => ' <h4 class="widgettitle"> ',
      'after_title'   => ' </h4> '
  ));
}
add_action('widgets_init', 'NewThema_widgets');
?>




