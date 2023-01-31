<?php

// INITIALIZE CUSTOM POST

function tours_init()
{
    // set up product labels
    $labels = array(
        'name' => tours_config()['name'],
        'singular_name' => tours_config()['singular_name'],
        'add_new' => 'Add New ' . tours_config()['singular_name'],
        'add_new_item' => 'Add New ' . tours_config()['singular_name'],
        'edit_item' => 'Edit ' . tours_config()['singular_name'],
        'new_item' => 'New ' . tours_config()['singular_name'],
        'all_items' => 'All ' . tours_config()['name'],
        'view_item' => 'View ' . tours_config()['singular_name'],
        'search_items' => 'Search ' . tours_config()['name'],
        'not_found' =>  'No Items Found',
        'not_found_in_trash' => 'No Items found in Trash',
        'parent_item_colon' => '',
        'menu_name' => tours_config()['name'],
    );

    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => tours_config()['slug']),
        'query_var' => true,
        'menu_icon' => 'dashicons-airplane',
        'supports' => array(
            'title',
            'revisions',
            'author',
        )
    );
    register_post_type(tours_config()['slug'], $args);
}
function tours_category_init()
{
    // set up product labels
    $labels = array(
        'name' => tours_category_config()['name'],
        'singular_name' => tours_category_config()['singular_name'],
        'add_new' => 'Add New ' . tours_category_config()['singular_name'],
        'add_new_item' => 'Add New ' . tours_category_config()['singular_name'],
        'edit_item' => 'Edit ' . tours_category_config()['singular_name'],
        'new_item' => 'New ' . tours_category_config()['singular_name'],
        'all_items' => 'All ' . tours_category_config()['name'],
        'view_item' => 'View ' . tours_category_config()['singular_name'],
        'search_items' => 'Search ' . tours_category_config()['name'],
        'not_found' =>  'No Items Found',
        'not_found_in_trash' => 'No Items found in Trash',
        'parent_item_colon' => '',
        'menu_name' => tours_category_config()['name'],
    );

    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => tours_category_config()['slug']),
        'query_var' => true,
        'menu_icon' => 'dashicons-networking',
        'supports' => array(
            'title',
            'revisions',
            'author',
        )
    );
    register_post_type(tours_category_config()['slug'], $args);
}

add_action('init', 'tours_init');
add_action('init', 'tours_category_init');

// MetaBox

function leo_meta_box()
{
    add_meta_box('tour-info', 'Tour Info', 'leo_meta_box_output', tours_config()['slug']);
    add_meta_box('tour-category-info', 'Tour Category Info', 'leo_category_metabox_output', tours_category_config()['slug']);
}
add_action('add_meta_boxes', 'leo_meta_box');



function leo_save_meta_box($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if ($parent_id = wp_is_post_revision($post_id)) {
        $post_id = $parent_id;
    }

    $fields = array_merge(tours_custom_fields(), tour_category_custom_fields());

    foreach ($fields as $field => $field_type) {
        if (array_key_exists($field, $_POST)) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }
}
add_action('save_post', 'leo_save_meta_box');



add_action('admin_enqueue_scripts', 'load_wp_media_files');
function load_wp_media_files($page)
{
    wp_enqueue_media();
    wp_enqueue_script('leo_script', plugins_url('/assets/script.js', __FILE__), array('jquery'));
    wp_enqueue_style('leo_style', plugins_url('/assets/style.css', __FILE__));
}

// Ajax action to refresh the user image
add_action('wp_ajax_leo_get_image', 'leo_get_image');

function leo_get_image()
{
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

function leo_get_field()
{
    if (isset($_GET['child_fields']) && isset($_GET['field_id'])) {

        ob_start();
?>
        <div class="tr">
            <div class="data">
                <?php
                $child_fields = json_decode(stripslashes($_GET['child_fields']), true);

                foreach ($child_fields as $child_key => $child_value) {

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

add_filter('single_template', 'leo_custom_template_category');

function leo_custom_template_category($single)
{
    if (get_post_type() == tours_category_config()['slug']) {
        return choose_template_category();
    }
    return $single;
}

add_filter('single_template', 'leo_custom_template');

function leo_custom_template($single)
{
    if (get_post_type() == tours_config()['slug']) {
        return choose_template();
    }
    return $single;
}


// SETTING MENU

function leotemplate_register_settings()
{

    add_option('leosetting_hotline', 'Your Hotline Here!');
    add_option('leosetting_categorydefaultcolor', '#cc3333');
    add_option('zalo_official', 'https://zalo.me/671676185230710826');

    register_setting('leotemplate_options_group', 'leosetting_hotline');
    register_setting('leotemplate_options_group', 'leosetting_categorydefaultcolor');
    register_setting('leotemplate_options_group', 'zalo_official');
}
add_action('admin_init', 'leotemplate_register_settings');

function leotemplate_register_options_page()
{
    add_options_page('LeoTemplate Options', 'LeoTemplate Settings', 'manage_options', 'leotemplate_settings', 'leotemplate_options_page');
}
add_action('admin_menu', 'leotemplate_register_options_page');

function leotemplate_options_page()
{
    ?>
    <div>
        <h2>LeoTemplate Settings Page</h2>
        <form method="post" action="options.php">
            <?php settings_fields('leotemplate_options_group'); ?>

            <label for="leosetting_hotline">HotLine</label>
            <input type="text" id="leosetting_hotline" name="leosetting_hotline" value="<?php echo get_option('leosetting_hotline'); ?>" />

            <label for="leosetting_categorydefaultcolor">Default Color for Category</label>
            <input type="text" id="leosetting_categorydefaultcolor" name="leosetting_categorydefaultcolor" value="<?php echo get_option('leosetting_categorydefaultcolor'); ?>" />

            <label for="zalo_official">Zalo Official Account Link</label>
            <input type="text" id="zalo_official" name="zalo_official" value="<?php echo get_option('zalo_official'); ?>" />

            <?php submit_button(); ?>
        </form>
    </div>
<?php
}

function my_pre_get_posts($query)
{
    if (isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == tours_config()['slug']) {

        if (isset($_GET['s'])) {
            $query->set('meta_key', 'leo_tour_code');
            $query->set('meta_value', $_GET['s']);
        }
    }
    // return
    return $query;
}

add_action('pre_get_posts', 'my_pre_get_posts');

?>