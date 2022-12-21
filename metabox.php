<?php


function tours_custom_fields(): array
{
    $fields = [
        'leo_template' => 'text_field',
        'leo_hotline' => 'text_field',
        'leo_tour_title' => 'text_field',
        'leo_tour_subtitle' => 'text_field',
        'leo_featured_image' => 'media_field',
        'leo_slide_image_1' => 'media_field',
        'leo_slide_image_2' => 'media_field',
        'leo_slide_image_3' => 'media_field',
        'leo_slide_image_4' => 'media_field',
        'leo_slide_image_5' => 'media_field',
        'leo_slide_image_6' => 'media_field',
        'leo_tour_description' => 'text_editor',
        'leo_service_box' => 'repeater_field',
        'leo_price' => 'text_field',
        'leo_old_price' => 'text_field',
        'leo_duration' => 'text_field',
        'leo_vehicle' => 'text_field',
        'leo_starting_point' => 'text_field',
        'leo_departure_day' => 'text_field',
        'leo_countdown_hour' => 'text_field',
        'leo_how_many_star' => 'text_field',
        'leo_selling_point' => 'text_editor',
        'leo_itinerary' => 'repeater_field',
        'leo_content_beside_itinerary' => 'repeater_field',
        'leo_content_beside_itinerary' => 'repeater_field',
        'leo_price_table' => 'text_editor',
        'leo_faq' => 'repeater_field',
        'leo_testimonial' => 'repeater_field',
        
    ];
    return $fields;
}

function leo_meta_box_output()
{
?>
    <div class="leo_box">
        
        <div class="image-group has-border">
            <?= leo_single_media_field('leo_featured_image', 'Featured Image'); ?>
            <?= leo_single_media_field('leo_slide_image_1', 'Slide Image 1'); ?>
            <?= leo_single_media_field('leo_slide_image_2', 'Slide Image 2'); ?>
            <?= leo_single_media_field('leo_slide_image_3', 'Slide Image 3'); ?>
            <?= leo_single_media_field('leo_slide_image_4', 'Slide Image 4'); ?>
            <?= leo_single_media_field('leo_slide_image_5', 'Slide Image 5'); ?>
            <?= leo_single_media_field('leo_slide_image_6', 'Slide Image 6'); ?>
        </div>

        <div class="has-border">
            <?= leo_single_text_field('leo_tour_title', 'Title *'); ?>
            <?= leo_single_text_field('leo_tour_subtitle', 'Subtitle'); ?>
            <?= leo_single_text_editor('leo_tour_description', 'Tour Description *'); ?>
        </div>

        <div class="has-border ">
            <?= leo_single_text_field('leo_price', 'Price *'); ?>
            <?= leo_single_text_field('leo_old_price', 'Old Price'); ?>
            <?= leo_single_text_field('leo_duration', 'Duration *'); ?>
            <?= leo_single_text_field('leo_vehicle', 'Vehicle *'); ?>
            <?= leo_single_text_field('leo_departure_day', 'Departure Day *'); ?>
            <?= leo_single_text_field('leo_hotline', 'Hotline *'); ?>
            <?= leo_single_text_field('leo_starting_point', 'Starting Point'); ?>
            <?= leo_single_text_field('leo_countdown_hour', 'Countdown Hour'); ?>
            <?= leo_single_text_field('leo_how_many_star', 'How many star'); ?>
        </div>

        <div class="has-border">
            <?= leo_repeater(
                'leo_itinerary',
                'Itinerary *',
                [
                    'title' => ['label' => 'Title', 'type' => 'text_field'],
                    'content' => ['label' => 'Content', 'type' => 'text_editor'],
                ]
            ); ?>
        </div>

        <div class="has-border">
            <?= leo_text_editor('leo_price_table', 'Price Table *'); ?>
        </div>

        <div class="has-border">
            <?= leo_repeater(
                'leo_faq',
                'FAQ *',
                [
                    'question' => ['label' => 'Question', 'type' => 'text_field'],
                    'answer' => ['label' => 'Answer', 'type' => 'text_editor'],
                ]
            ); ?>
        </div>

        <div class="has-border">
            <?= leo_repeater(
                'leo_content_beside_itinerary',
                'Content Beside Itinerary',
                [
                    'image' => ['label' => 'Image', 'type' => 'media_field'],
                    'caption' => ['label' => 'Caption', 'type' => 'text_editor'],
                ]
            ); ?>
        </div>

        <div class="has-border">
            <?= leo_single_text_field('leo_template', 'Template'); ?>
        </div>

        <div class="has-border">
            <?= leo_repeater(
                'leo_service_box',
                'Service Box',
                [
                    'icon' => ['label' => 'Icon', 'type' => 'text_field'],
                    'title' => ['label' => 'Title', 'type' => 'text_field'],
                    'desc' => ['label' => 'Desc', 'type' => 'text_field'],
                ]
            ); ?>
        </div>
        <div class="has-border">
            <?= leo_single_text_editor('leo_selling_point', 'Selling Point'); ?>
        </div>
        <div class="has-border">
            <?= leo_repeater(
                'leo_testimonial',
                'Testimonial',
                [
                    'image' => ['label' => 'Image', 'type' => 'media_field'],
                    'title' => ['label' => 'Title', 'type' => 'text_field'],
                    'desc' => ['label' => 'Description', 'type' => 'text_field'],
                ]
            ); ?>
        </div>
    </div>
<?php
}

function tour_category_custom_fields(): array
{
    $fields = [
        'leo_template' => 'text_field',
        'leo_featured_image' => 'media_field',
        'leo_description' => 'text_editor',
        'leo_bgcolor' => 'text_field',
        'leo_posts_list' => 'text_field',
        'leo_title' => 'text_field',
    ];
    return $fields;
}

function leo_category_metabox_output()
{
?>
    <div class="leo_box">
        <div class="has-border">
            <?= leo_single_text_field('leo_title', 'Title *'); ?>
        </div>
        <div class="has-border">
            <?= leo_single_text_field('leo_posts_list', 'Posts List ID (seperate by comma) *'); ?>
        </div>
        <div class="has-border">
            <?= leo_single_media_field('leo_featured_image', 'Featured Image'); ?>
        </div>

        <div class="has-border">
            <?= leo_single_text_editor('leo_description', 'Description'); ?>
        </div>

        <div class="has-border">
            <?= leo_single_text_field('leo_bgcolor', 'Background Color'); ?>
        </div>
        <div class="has-border">
            <?= leo_single_text_field('leo_template', 'Template'); ?>
        </div>

    </div>
<?php
}


