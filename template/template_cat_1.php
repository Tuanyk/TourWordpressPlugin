<?php require_once __DIR__ . '/template_parts/header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?= dirname(plugin_dir_url(__FILE__)); ?>/assets/font.css" />

<style>
    :root {
        --category-color: <?= leo_field('leo_bgcolor') ? leo_field('leo_bgcolor') : get_option('leosetting_categorydefaultcolor'); ?>;
    }

    section.info, section.posts-list {
        text-align: center;
        max-width: 1200px;
        margin: auto;
    }

    section.info .section-title {
        padding: 15px 30px;
        text-transform: uppercase;
        font-weight: 900;
        background-color: var(--category-color);
        border-radius: 10px 10px 10px 10px;
        color: white;
        display: inline-block;
        font-size: 20px;
    }

    section.info .description {
        margin-top: 20px;
        background-color: var(--category-color);
        display: flex;
        border-radius: 10px;
    }

    @media (max-width: 767px) {
        section.info .description {
            flex-wrap: wrap;
            padding-bottom: 20px;
        }
    }

    section.info .image {
        width: 600px;
        height: 250px;
        padding: 10px;

    }

    section.info .description img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        border-radius: 10px;
    }

    section.info .description .text {
        color: white;
        display: flex;
        align-items: center;
        text-align: left;
    }

    section.info .description .text ul {
        list-style: none;
        padding: 0;
    }

    section.info .description .text ul li {
        position: relative;
        padding-left: 20px;
        font-family: 'Averta', sans-serif;
        font-weight: 600;
        font-size: 18px;
    }

    section.info .description .text ul li:before {
        content: "";
        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20style%3D%22enable-background%3Anew%200%200%20100%20100%3B%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(255%2C%20255%2C%20255%2C%201)%22%3E%3Cpath%20d%3D%22M70.7%2C31.4L42%2C60.1L29.3%2C47.4c-1.6-1.6-4.1-1.6-5.7%2C0c-1.6%2C1.6-1.6%2C4.1%2C0%2C5.7l15.5%2C15.5c0.8%2C0.8%2C1.8%2C1.2%2C2.8%2C1.2%20%20s2.1-0.4%2C2.8-1.2l31.4-31.4c1.6-1.6%2C1.6-4.1%2C0-5.7C74.8%2C29.9%2C72.2%2C29.9%2C70.7%2C31.4z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
        width: 20px;
        height: 20px;
        top: 7px;
        position: absolute;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        left: 0;
    }
    .posts-list .list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }
    .posts-list article {
        width: 350px;
        margin: 10px;
        border-radius: 10px;
        border: 1px solid var(--category-color);
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }
    .posts-list article .image {
        height: 300px;
    }
    .posts-list article img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px 10px 0px 0px;
    }
    .posts-list article a {
        text-decoration: none;
    }
    .posts-list article h3.title {
        font-family: 'Averta', sans-serif;
        font-size: 16px;
        font-weight: 700;
        color: #224477;
        padding: 10px 10px 0 10px;
        height: 3em;
    }
    .posts-list article .boxinfo {
        text-align: center;
        margin-bottom: 10px;
        margin-top: 10px;
    }
    .posts-list article .boxinfo .rightbox {
        display: inline;
        border-radius: 5px;
        border: 1px solid #224477;
        font-size: 14px;
        font-family: 'Averta', sans-serif;
        font-weight: 600;
    }
    
    .posts-list article .boxinfo .rightbox span:nth-child(1) {
        color: #224477;
    }
    .posts-list article .boxinfo .rightbox span:nth-child(2) {
        background: #224477;
        color: white;
    }
    .posts-list article .tourinfo {
        display: flex;
        flex-direction: column;
        color: #222222;
        font-family: 'Averta', sans-serif;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6em;
        text-align: left;
    }
    .posts-list article .tourinfo .item {
        border-bottom: 1px solid black;
    }
    .posts-list article .tourinfo .icon {
        display: inline-block;
        width: 30px;
        margin-left: 10px;
    }
    .posts-list article .tourinfo .icon i {
        color: #0066cc;
        font-size: 15px;
    }
    .posts-list article .pricebox {
        display: flex;
        justify-content: space-around;
        align-items: center;
        font-family: 'Averta', sans-serif;
        margin-bottom: 20px;
        margin-top: 20px;
    }
    .posts-list article .pricebox .old-price {
        text-decoration: line-through;
        font-size: 16px;
    }
    .posts-list article .pricebox button.detail { 
        background-color: #375898;
        padding: 0 10px;
        border-radius: 5px;
        color: white;
        font-family: 'Averta', sans-serif;
        font-size: 16px;
        font-weight: 700;
        border: 1px solid #224477;
    }
    .posts-list article .pricebox button.detail:hover { 
        background-color: #224477;
        border-color: #224477;
    }
    .posts-list article .book-tour {
        background-color: var(--category-color);
        border-radius: 0 0 5px 5px;
        color: white;
        font-family: 'Averta', sans-serif;
        text-align: center;
        font-weight: 700;
        font-size: 25px;
}
</style>

<?php require_once __DIR__ . '/template_parts/header_body.php'; ?>

<section class="info">
    <h1 class="section-title"><?= leo_field('leo_title'); ?></h1>
    <div class="description">
        <div class="image"><img src="<?= wp_get_attachment_url(leo_field('leo_featured_image')); ?>" alt=""></div>
        <div class="text"><?= leo_field('leo_description', false); ?></div>
    </div>

</section>

<section class="posts-list">
    <div class="list">
        <?php $posts_id = explode(',', str_replace(' ', '', leo_field('leo_posts_list')));
            foreach ($posts_id as $post_id) {
                $p_url = get_permalink($post_id);
                $p_featured_image = wp_get_attachment_url(get_post_meta($post_id, 'leo_featured_image', true));

                $p_title = esc_attr(get_post_meta($post_id, 'leo_tour_title', true));

                $p_how_many_star = esc_attr(get_post_meta($post_id, 'leo_how_many_star', true));
                $p_how_many_star = $p_how_many_star ? $p_how_many_star : '5';

                $p_duration = esc_attr(get_post_meta($post_id, 'leo_duration', true));
                $p_vehicle = esc_attr(get_post_meta($post_id, 'leo_vehicle', true));
                $p_departure_day = esc_attr(get_post_meta($post_id, 'leo_departure_day', true));
                $p_old_price = esc_attr(get_post_meta($post_id, 'leo_old_price', true));
                $p_price = esc_attr(get_post_meta($post_id, 'leo_price', true));
            ?>

            <article class="item">
                <a href="<?= $p_url; ?>">
                    <div class="image">
                        <img src="<?= $p_featured_image; ?>" alt="">
                    </div>
                </a>
                <div class="info">
                    <a href="<?= $p_url; ?>">
                        <h3 class="title"><?= $p_title; ?></h3>
                    </a>
                    <div class="boxinfo">
                        <div class="rightbox">
                            <span>Thời gian</span>
                            <span><?= $p_duration; ?></span>
                        </div>

                    </div>
                    <div class="tourinfo">
                        <div class="item">
                            <span class="icon"><i aria-hidden="true" class="fas fa-plane-departure"></i></span><span class="vehicle"><?= $p_vehicle; ?></span>
                        </div>
                        <div class="item">
                            <span class="icon"><i aria-hidden="true" class="fas fa-calendar-alt"></i></span><span class="departure-day"><?= $p_departure_day; ?></span>
                        </div>
                    </div>
                    <div class="pricebox">
                        <span class="old-price"><?= $p_old_price; ?></span>
                        <a href="<?= $p_url; ?>">
                            <button class="detail">Chi tiết Tour</button>
                        </a>
                    </div>
                </div>
                <a href="<?= $p_url; ?>">
                    <div class="book-tour"><?= $p_price; ?></div>
                </a>
            </article>

            <?php } ?>
    </div>
</section>


<?php require_once __DIR__ . '/template_parts/footer.php'; ?>