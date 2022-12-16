<?php

/* SIMPLE FIELD FUNCTION */

function leo_media(string $field_id, string $label) {
    ?>
        <div class="leo_fields">
            <label for="media"><?= $label; ?></label>
            <?php $image_id = get_post_meta(get_the_ID(), $field_id, true);
                    if( intval( $image_id ) > 0 ) {
                        $image = wp_get_attachment_image( $image_id, 'medium', false, array( 'class' => 'leo-preview-image' ) );
                    } else {
                        $image = '<img class="leo-preview-image"/>';
                    }
                    echo $image;
                     ?>
            <input type="hidden" name="<?= $field_id; ?>" value="<?php echo esc_attr( $image_id ); ?>" class="regular-text leo_image_id" />
            <input type='button' class="button-primary leo_media_manager_single" value="<?php esc_attr_e('Select a image', 'mytextdomain'); ?>" />
        </div>
    <?php
}

function leo_text_field(string $field_id, string $field_label)
{
    ?>
        <div class="leo_field">
            <label for="<?= $field_id; ?>"><?= $field_label; ?></label>
            <input id="<?= $field_id; ?>" type="text" name="<?= $field_id; ?>" value="<?php echo esc_attr(get_post_meta(get_the_ID(), $field_id, true)); ?>">
        </div>
    <?php
    }

    function leo_text_editor(string $field_id, string $field_label)
    {
    ?>
        <div class="leo_field">
            <label><?= $field_label; ?></label>
            <?= wp_editor(get_post_meta(get_the_ID(), $field_id, true), $field_id); ?>
        </div>
    <?php
}

/* REPEATER FUNCTION */

function leo_repeater_text_field(string $field_id,string $child_id, string $field_label, array $row_value = []) {
    ?>
        <div class="leo_field">
            <p><?= $field_label; ?></p>
            <input type="text" name="<?= $field_id; ?>[<?= $child_id; ?>][]" value="<?= $row_value ? $row_value[$child_id]  : '' ?>">
        </div>
    <?php
}
function leo_repeater_media_field(string $field_id,string $child_id, string $field_label, array $row_value = []) {
    ?>
        <div class="leo_fields">
            <label for="media"><?= $field_label; ?></label>
            <?php $image_id = get_post_meta(get_the_ID(), $field_id, true);
                    if( intval( $image_id ) > 0 ) {
                        $image = wp_get_attachment_image( $image_id, 'medium', false, array( 'class' => 'leo-preview-image' ) );
                    } else {
                        $image = '<img class="leo-preview-image"/>';
                    }
                    echo $image;
                     ?>
            <input type="hidden" name="<?= $field_id; ?>" value="<?php echo esc_attr( $image_id ); ?>" class="regular-text leo_image_id" />
            <input type='button' class="button-primary leo_media_manager_single" value="<?php esc_attr_e('Select a image', 'mytextdomain'); ?>" />
        </div>
    <?php
}
function leo_repeater_text_editor(string $field_id,string $child_id, string $field_label, array $row_value = []) {
    ?>
        <div class="leo_field">
            <label><?= $field_label; ?></label>
            <?= wp_editor( $row_value ? $row_value[$child_id]  : '', $field_id."_".$child_id."_".wp_unique_id(), ['textarea_name'=> "$field_id"."[".$child_id."][]",]); ?>
        </div>
    <?php
}

/* SINGLE FIELD */

function leo_single_text_field(string $field_id, string $field_label, string $child_id = '', string $field_value = '') {
    $field_name = $child_id ? $field_id."[".$child_id."][]" : $field_id;
    $field_value = $child_id ? $field_value : esc_attr(get_post_meta(get_the_ID(), $field_id, true));
    ?>
        <div class="leo_field">
            <label><?= $field_label; ?></label>
            <input type="text" name="<?= $field_name ?>" value="<?= $field_value; ?>">
        </div>
    <?php
}


function leo_single_text_editor(string $field_id, string $field_label, string $child_id = '', string $field_value = '') {
    $field_name = $child_id ? $field_id."[".$child_id."][]" : $field_id;
    $field_value = $child_id ? $field_value : get_post_meta(get_the_ID(), $field_id, true);
    ?>
        <div class="leo_field wp_text_editor">
            <label><?= $field_label; ?></label>
            <?= wp_editor( $field_value, $field_id."_".$child_id."_".substr(md5(rand()), 0, 7), ['tinymce'=>true, 'textarea_name'=> $field_name, 'teeny' => false, 'quicktags'=>true, 'editor_height' => 100]); ?>
        </div>
    <?php
}


function leo_single_media_field(string $field_id, string $field_label, string $child_id = '', string $field_value = '') {
    $field_name = $child_id ? $field_id."[".$child_id."][]" : $field_id;
    $field_value = $child_id ? $field_value : esc_attr(get_post_meta(get_the_ID(), $field_id, true));
    ?>
        <div class="leo_field">
            <label for="media"><?= $field_label; ?></label>
            <?php 
                    if( intval( $field_value ) > 0 ) {
                        $image = wp_get_attachment_image( $field_value, 'medium', false, array( 'class' => 'leo-preview-image' ) );
                    } else {
                        $image = '<img class="leo-preview-image"/>';
                    }
                    echo $image;
                     ?>
            <input type="hidden" name="<?= $field_name; ?>" value="<?php echo esc_attr( $field_value ); ?>" class="regular-text leo_image_id" />
            <input type='button' class="button-primary leo_media_manager_single" value="<?php esc_attr_e('Select a image', 'mytextdomain'); ?>" />
            <button class="button-primary remove-image">Remove Image...</button>
        </div>
    <?php
}



/* REPEATER */

function leo_repeater(string $field_id, string $field_label, array $child_fields) {
    /* 
    $child_fields = array(
        ['child_name'=>['label'=>'', 'id'=>'', 'type'=>'']],
        ...
    );    
    */
    ?>
        <div class="metabox-repeater">
            <div class="group-name"><?= $field_label; ?></div>
            <div class="action">
                <button class="add-new" data-field-id="<?= $field_id; ?>" data-new-row='<?= json_encode($child_fields); ?>'>Add New...</button>
            </div>
                <?php 
                    $field_data = get_post_meta(get_the_ID(), $field_id, true);
                    
                    if ($field_data) {
                        $field_data = reshape_array($field_data);    
                    }
                    else {                       
                        $field_data = [array_fill_keys(array_keys($child_fields), "")];
                    }

                    foreach ($field_data as $row_index => $row_value) {
                        ?>
                        <div class="tr">
                            <div class="data">
                                <?php foreach ($child_fields as $child_key=>$child_value) {
                                    $single_field_data = [$field_id, $child_value['label'], $child_key, $row_value[$child_key]];
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
                                } ?>
                            </div>
                            <div class="btn"><button class="button-primary remove-current">Remove</button></div>
                        </div>
                            <?php     
                    }        
                ?>
        </div>
    <?php
}