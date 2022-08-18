<?php

add_theme_support( 'title-tag' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'understrap' ),
) );

add_action('admin_head', 'gijsworks_wordpress_backend');

function gijsworks_wordpress_backend() {
    echo '<style>
    #postdivrich,
    #commentsdiv,
     #dashboard_primary,
     #dashboard_quick_press {
      display: none;
    } 
  </style>';
}

