<?php
add_action( 'init', 'cp_change_post_object' );

// Change dashboard Posts to arbitrary name
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Works';
        $labels->singular_name = 'Work';
        $labels->add_new = 'Add work';
        $labels->add_new_item = 'Add new work';
        $labels->edit_item = 'Edit work';
        $labels->new_item = 'New work';
        $labels->view_item = 'View work';
        $labels->search_items = 'Find work';
        $labels->not_found = 'None found';
        $labels->not_found_in_trash = 'Trash is empty';
        $labels->name_admin_bar = 'Works';
        $labels->all_items = 'All work posts';
        $labels->menu_name = 'Works';
}