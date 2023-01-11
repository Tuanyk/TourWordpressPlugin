<?php require_once __DIR__ . '/template_parts/header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
    :root {
        --category-color: <?= leo_field('leo_bgcolor') ? leo_field('leo_bgcolor') : get_option('leosetting_categorydefaultcolor'); ?>;
    }

    h1, h2, h3, h4, h5, h6, ol, ul, li, p {
        font-family: 'Averta', sans-serif !important;
    }

    section.featured-image .wrapper {
        min-height: 300px;
        position: relative;
        display: flex;
        align-items: center;
    }

    section.featured-image h1 {
        color: white;
        font-size: 40px;
        margin-left: 20px;
        font-weight: bold;
        text-shadow: 2px 3px 10px rgb(0 0 0 / 60%);
    }

    section.info {
        text-align: center;
        max-width: 1200px;
        margin: auto;
        margin-top: 50px;
    }
    section.info .description {
        text-align: left;
        justify-content: center;        
        font-family: 'Averta', sans-serif;
        margin-bottom: 50px;
    }
    section.info .title {
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
        margin: 20px;
        padding: 20px 20px 20px 30px;
        color: #222222;
        border-radius: 10px;
        font-size: 17px;
        box-shadow: 7px 9px 20px -15px rgb(0 0 0 / 50%);
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        border: 1px solid #54545433;
    }

    section.posts-list {
        max-width: 1200px;
        margin: auto;
        margin-bottom: 50px;
    }

    .posts-list .list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    section.posts-list p.search-result-desc {
        text-align: center;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .posts-list article {
        width: 350px;
        margin: 20px;
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
        width: 90%;
        display: flex;
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
    .posts-list article .tourinfo .departure-day {
        display: inline-block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .posts-list article .pricebox {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family: 'Averta', sans-serif;
        margin: 20px;
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

<section class="featured-image">
    <div class="wrapper" style="background: url('<?= wp_get_attachment_url(leo_field('leo_featured_image')); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <h1 class="title"><?= leo_field('leo_title'); ?></h1>
    </div>
</section>

<section class="info">
    <h2 class="title"><?= leo_field('leo_info_title'); ?></h2>
    <div class="description">
        <?= wpautop(leo_field('leo_description', false)); ?>
    </div>
</section>

<section class="posts-list">
    
        <?php 
        if (leo_field('leo_posts_list')) {
            $posts_id = explode(',', str_replace(' ', '', leo_field('leo_posts_list')));
            ?>
            <p class="search-result-desc">Chúng tôi tìm thấy <strong><?= count($posts_id); ?> tours</strong> cho Quý khách.<p>
            <div class="list"> 
            <?php
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

            <?php }}
        else {
            ?>
            <h3>Chương trình Tour hiện đang được cập nhật, quý khách vui lòng quay lại sau.</h3>     <p>TRÂN TRỌNG CẢM ƠN QUÝ KHÁCH!</p>
            <?php
        }
            ?>
    </div>
</section>


<?php require_once __DIR__ . '/template_parts/footer.php'; ?>