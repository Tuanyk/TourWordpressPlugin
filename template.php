
<?php
$template_id = trim(esc_attr( get_post_meta( get_the_ID(), 'leo_template', true )));
$template_id = $template_id ? $template_id : 'template_1';
require_once plugin_dir_path( __FILE__ )."template/". $template_id. ".php"; ?>
