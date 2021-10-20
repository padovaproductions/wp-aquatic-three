<?php 
function add_site_favicon() {
    echo '<link rel="shortcut icon"
href="' . get_template_directory_uri() . '/build/images-bundled/favicon.ico" />';
}
   
add_action('login_head', 'add_site_favicon');
add_action('admin_head', 'add_site_favicon');