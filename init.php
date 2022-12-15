<?php

// INITIALIZE CUSTOM POST

function tours_init()
{
    // set up product labels
    $labels = array(
        'name' => 'Tours',
        'singular_name' => 'Tour',
        'add_new' => 'Add New Tour',
        'add_new_item' => 'Add New Tour',
        'edit_item' => 'Edit Tour',
        'new_item' => 'New Tour',
        'all_items' => 'All Tours',
        'view_item' => 'View Tour',
        'search_items' => 'Search Tours',
        'not_found' =>  'No Tours Found',
        'not_found_in_trash' => 'No Tours found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Tours',
    );

    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'tour'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'revisions',
            'author',
        )
    );
    register_post_type('tour', $args);

    // register taxonomy
    register_taxonomy('tour_category', 'tour', array('hierarchical' => true, 'label' => 'Tour Categories', 'query_var' => true, 'rewrite' => array('slug' => 'tour-category')));
}

add_action('init', 'tours_init');

// MetaBox

function leo_meta_box()
{
    add_meta_box('tour-info', 'Tour Info', 'leo_meta_box_output', 'tour');
}
add_action('add_meta_boxes', 'leo_meta_box');



function leo_save_meta_box($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if ($parent_id = wp_is_post_revision($post_id)) {
        $post_id = $parent_id;
    }
    $fields = tours_custom_fields();
    foreach ($fields as $field=>$field_type) {
        if (array_key_exists($field, $_POST)) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }

}
add_action('save_post', 'leo_save_meta_box');


add_action( 'admin_enqueue_scripts', 'load_wp_media_files' );
function load_wp_media_files( $page ) {
    // Enqueue WordPress media scripts
    wp_enqueue_media();
    // Enqueue custom script that will interact with wp.media
    wp_enqueue_script( 'leo_script', plugins_url( '/assets/script.js' , __FILE__ ), array('jquery'));
    // wp_enqueue_script( 'leo_media', plugins_url( '/assets/media.js' , __FILE__ ), array('jquery'), '0.1' );
    wp_enqueue_style( 'leo_style', plugins_url( '/assets/style.css' , __FILE__ ));
}

// Ajax action to refresh the user image
add_action('wp_ajax_leo_get_image', 'leo_get_image');

function leo_get_image() {
    if (isset($_GET['id'])) {
        $image = wp_get_attachment_image(filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT), 'medium', false, array('class' => 'leo-preview-image'));
        $data = array(
            'image' => $image,
        );
        wp_send_json_success($data);
    } else {
        wp_send_json_error();
    }
}


add_action('wp_ajax_leo_get_field', 'leo_get_field');

function leo_get_field() {
    if ( isset($_GET['child_fields']) && isset($_GET['field_id'])) {
        
        ob_start(); 
        ?>
        <div class="tr">
            <div class="data">
        <?php
        $child_fields = json_decode(stripslashes($_GET['child_fields']), true);

        foreach ($child_fields as $child_key=>$child_value) {
            
            $single_field_data = [$_GET['field_id'], $child_value['label'], $child_key];
            switch ($child_value['type']) {
                case 'text_field':
                    leo_single_text_field(...$single_field_data);
                    break;
                case 'media_field':
                    leo_single_media_field(...$single_field_data);
                    break;
                case 'text_editor':
                    leo_single_text_editor(...$single_field_data);
                    break;
            }
        } 
        ?>
            </div>
            <div class="btn"><button class="button-primary remove-current">Remove</button></div>
        </div>
        
        <?php
        $content = ob_get_contents();

        ob_end_clean();
        $data = array(
            'div' => $content,
        );
        wp_send_json_success($data);
    } else {
        wp_send_json_error();
    }
}

// RENDER TEMPLATE

add_filter('the_content', 'leo_render_theme');

// WORK WITH ELEMENTOR
// add_filter('elementor/frontend/the_content', 'leo_render_theme');

function leo_render_theme( $content )
{
    if (get_post_type() == 'tour') {
        ob_start();
        require_once plugin_dir_path( __FILE__ ). 'template.php';
        $content = ob_get_contents();
        ob_clean();
        ob_end_flush();
        return $content;
    }
	else {
		return $content;
	}
}


?>