<?php

function choose_template() {
    $template_id = trim(esc_attr( get_post_meta( get_the_ID(), 'leo_template', true )));
    $template_id = $template_id ? $template_id : 'template_1';
    return plugin_dir_path( __FILE__ )."template/". $template_id. ".php";
}

function choose_template_category() {
    $template_id = trim(esc_attr( get_post_meta( get_the_ID(), 'leo_template', true )));
    $template_id = $template_id ? $template_id : 'template_cat_1';
    return plugin_dir_path( __FILE__ )."template/". $template_id. ".php";
}


function reshape_array(array $arr) {
    $result = [];
    for ($i=0; $i < count(array_values($arr)[0]); $i++) {
        $data = [];
        foreach (array_keys($arr) as $k) {
            $data[$k]=$arr[$k][$i];
        }
        array_push($result, $data);
    }
    return $result;
}

function leo_field(string $field, bool $esc_attr = true) {
    $field_data = get_post_meta( get_the_ID(), $field, true );
    $field_data = $esc_attr ? esc_attr($field_data) : $field_data;
    return $field_data;
}