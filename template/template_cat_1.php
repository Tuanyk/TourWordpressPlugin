<?php require_once __DIR__.'/template_parts/header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    :root {
        --category-color: <?= leo_field('leo_bgcolor') ? leo_field('leo_bgcolor') : '#cc3333'; ?>;
    }

    section.info {
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
        padding:0;
    }
    section.info .description .text ul li {
        position: relative;
        padding-left: 20px;
        font-family: 'Averta', sans-serif;
        font-weight: 600;
        font-size: 16px;
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
</style>

<?php require_once __DIR__.'/template_parts/header_body.php'; ?>

<section class="info">
    <h1 class="section-title"><?= leo_field('leo_title'); ?></h1>
    <div class="description">
        <div class="image"><img src="<?= wp_get_attachment_url(leo_field('leo_featured_image')); ?>" alt=""></div>
        <div class="text"><?= leo_field('leo_description', false); ?></div>
    </div>

</section>

<section class="posts-list">
    <div class="posts-list">
        <?php $posts_id = leo_field('leo_posts_list'); ?>
    </div>
</section>


<?php require_once __DIR__.'/template_parts/footer.php'; ?>


