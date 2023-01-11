<?php require_once __DIR__.'/template_parts/header.php'; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

        body {
            background-color: white !important;
        }
        p, table td {
            font-family: 'Averta', sans-serif;
        }
        section {
            font-size: 17px;
            margin-bottom: 20px;
        }

        section .section-title {
            font-family: 'Averta', sans-serif;
            font-size: 35px;
            text-align: center;
            display: block;
            box-shadow: 7px 9px 20px -15px rgb(0 0 0 / 50%);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            border: 1px solid #54545433;
            border-radius: 10px;
            padding: 20px 0;
            margin-bottom: 20px;
            color: #cc3333;
            font-weight: 700;
        }
        @media screen and (max-width: 767px) {
            section .section-title {
                font-size: 25px;
            }
        }
        h1.tour-title {
            color: #CC3333;
            font-size: 25px;
            font-weight: 700;
            line-height: 1.2em;
            text-align: center;
            margin: 20px 0;
        }
        /* CSS For Featured Gallery */

        #leo_images img {
            height: 100%;
            left: 0;
            object-fit: cover;
            padding: 0.1em;
            position: absolute;
            top: 0;
            width: 100%;
        }

        @media (max-width: 767px) {
            #leo_images {
                display: grid;
                grid-template-columns: repeat(6, 1fr);
                grid-template-rows: repeat(4, 1fr);
            }

            #leo_images>div:nth-child(1) {
                grid-row-end: span 4;
                grid-column-end: span 4;
            }

            #leo_images>div:nth-child(2),
            #leo_images>div:nth-child(3),
            #leo_images>div:nth-child(4),
            #leo_images>div:nth-child(5),
            #leo_images>div:nth-child(6) {
                grid-row-end: span 2;
                grid-column-end: span 2;
            }

            #leo_images>div>div {
                overflow: hidden;
                padding-block-start: 100%;
                position: relative;
            }

        }

        @media (min-width:768px) {
            #leo_images {
                display: grid;
                grid-template-columns: repeat(8, 1fr);
                grid-template-rows: repeat(4, 1fr);
            }

            #leo_images>div:nth-child(1) {
                grid-row-end: span 4;
                grid-column-end: span 4;
            }

            #leo_images>div:nth-child(1)>div {
                overflow: hidden;
                padding-block-start: 100%;
                position: relative;
            }

            #leo_images>div:nth-child(2),
            #leo_images>div:nth-child(5),
            #leo_images>div:nth-child(6) {
                grid-row-end: span 2;
                grid-column-end: span 2;
            }

            #leo_images>div:nth-child(2)>div,
            #leo_images>div:nth-child(5)>div,
            #leo_images>div:nth-child(6)>div {
                overflow: hidden;
                padding-block-start: 100%;
                position: relative;
            }

            #leo_images>div:nth-child(3) {
                display: none;
            }
            #leo_images>div:nth-child(4) {
                grid-row-end: span 2;
                grid-column-end: span 2;
            }

            #leo_images>div:nth-child(3)>div,
            #leo_images>div:nth-child(4)>div {
                overflow: hidden;
                padding-block-start: 100%;
                position: relative;
            }
        }

        .box-shadow {
            box-shadow: 7px 9px 20px -15px rgb(0 0 0 / 50%);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            border: 1px solid #54545433;
        }

        .border-radius-10 {
            border-radius: 10px;
        }

        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .main-content .left {
            width: 900px;
            margin-right: 20px;
        }

        .main-content .right {
            width: 350px;
        }

        @media (max-width: 767px) { 
            .main-content .left {
                width: 100%;
                margin-right: 0;
            }
            .main-content .right {
                width: 100%;
            }
        }
        .tour-description {
            height: 150px;
            overflow-y: auto;
            overflow-x: hidden;
            padding: 20px 20px 20px 30px;
            color: #222222;
            margin-left: 20px;
            margin-right: 20px;
        }

        .tour-description::-webkit-scrollbar {
            width: 3px;
        }

        .tour-description::-webkit-scrollbar-thumb {
            background: #2d4271;
        }

        .tour-description::-webkit-scrollbar-track {
            background: #d9d9d9;
        }

        .tour-description p {
            text-align: justify;
        }




        #sticky-price-div {
            text-align: center;
            border: 1px solid #737373;
            border-radius: 10px;
            box-shadow: 7px 9px 20px -15px rgb(0 0 0 / 50%);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 10px 10px 15px;
            position: sticky;
            top: 30px;
        }

        @media (max-width: 767px) {
            #sticky-price-div {
                margin: 10px 20px;
            }
         }


        #sticky-price-div h3 {
            padding: 20px 0;
            color: #0066CC;
            font-size: 20px;
            font-weight: bold;
            line-height: 1.5em;
            text-align: center;
        }

        #sticky-price-div .old-price {
            text-decoration: line-through;
            color: #222222;
            font-size: 17px;
            font-weight: bold;
            line-height: 1.6em;
            text-align: center;
        }

        #sticky-price-div .price {
            color: white;
            font-size: 35px;
            font-weight: 800;
        }

        #sticky-price-div .price-wrapper {
            display: inline-block;
            background-color: #cc3333;
            padding: 5px 20px 0px 20px;
            border-radius: 10px 10px 10px 10px;
        }

        #sticky-price-div .info {
            padding: 20px 0;
            text-align: left;
        }

        #sticky-price-div .info span {
            color: #222222;
            font-size: 17px;
            font-weight: 700;
        }

        #sticky-price-div .info i {
            color: #0066cc;
            font-size: 20px;
            position: relative;
            width: 30px;
            height: 30px;
            
        }

        #sticky-price-div .info>div {
            border-bottom: 1px solid #00000017;
        }

        #sticky-price-div button {
            background-color: #cc3333;
            border-radius: 10px;
            color: white;
        }

        #sticky-price-div .hotline {
            padding: 10px 0;
            text-decoration: none;
            display: block;
            font-size: 24px;
            font-weight: 700;
            line-height: 1.6em;
            fill: #21B67B;
            color: #21B67B;
            background-color: #FFFFFF00;
            border-radius: 10px 10px 10px 10px;
        }

        #service_box {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
            margin-left: 30px;
        }

        #service_box .box {
            width: 300px;
            margin-right: 20px;
            margin-bottom: 20px;
            display: flex;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 10px;
            align-items: center;
            padding: 15px 10px 15px 20px;
            height: 100%;
        }

        #service_box .box .icon_box {
            display: grid;
            align-items: center;
            text-align: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #0066cc;
            box-shadow: 0 0 0 4px white, 0 0 0 5px #0066cc;
        }


        #service_box .box .icon_box i {
            color: #ffffff;
        }

        #service_box .box .desc_box {
            padding-left: 20px;
            width: calc(100% - 50px);
        }

        #service_box .box .desc_box .title {
            font-size: 18px;
            line-height: 1.6;
            text-transform: uppercase;
            color: #0066cc;
            font-weight: 700;
            display: block;
        }

        #service_box .box .desc_box .description {
            display: block;
            font-size: 15px;
            color: #555555;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media only screen and (max-width: 767px) {
            #service_box {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            #service_box .icon_box {
                margin: 0.2em 0;
            }

            #service_box .box {
                padding: 10px 10px;
            }
        }

        .itinerary {
            margin-left: 20px;
            margin-right: 20px;
        }
        .itinerary .content {
            padding: 20px 30px 20px 30px;
        }

        .itinerary .title-description {
            text-align: center;
            color: #0066cc;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .itinerary .title-description h2 {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 0;
        }

        @media (max-width: 767px) {
            .itinerary .title-description h2 {
                font-size: 20px;
            }
        }

        .itinerary img {
            border-style: none;
            width: 100%;
            height: auto;
        }

        .itinerary .schedule-section {
            margin-left: 55px;
            padding-left: 20px;
            position: relative;
        }
        @media (max-width: 767px) {
            .itinerary .schedule-section {
                margin-left: 0px;
                padding-left: 0px;
                position: relative;
            }
        }
        .itinerary .schedule-section::before {
            content: "";
            position: absolute;
            top: -10px;
            left: 0;
            height: calc(100% + 4px);
            border-left: 1px dashed #2d4271;
        }

        @media (max-width: 767px) {
            .itinerary .schedule-section::before {
                left: -15px;
            }
        }

        .itinerary .schedule-section .day-detail {
            position: relative;
            margin-bottom: 20px;
            display: block !important;
        }

        .itinerary .schedule-section .day-number {
            position: absolute;
            top: 0;
            left: -68px;
            color: #2d4271;
            font-size: 14px;
        }

        .itinerary .d-none {
            display: none !important;
        }

        @media (min-width: 768px) {
            .itinerary .d-md-block {
                display: block !important;
            }

            .itinerary .d-md-none {
                display: none !important;
            }
        }

        .itinerary .schedule-section .day-number span {
            color: #fff;
            background: #CC3333;
            font-weight: 700;
            border-radius: 50%;
            padding: 4px 8.5px;
        }

        .itinerary .schedule-section .day-title {
            cursor: pointer;
            color: #0066cc;
            font-size: 16px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .itinerary .text-primary {
            color: #ff5b00 !important;
        }

        .itinerary .schedule-section .day-detail.active .day-title i {
            transform: rotate(180deg);
        }

        .itinerary .schedule-section .day-detail .day-title i {
            transform: rotate(180deg);
            color: #cc3333;
            margin-left: 5px;
            font-size: 14px;
        }

        .itinerary .schedule-section .day-detail.active .day-desc {
            display: block;
        }

        .itinerary .schedule-section .day-desc {
            color: #222222;
            font-size: 16px;
            text-align: justify;
            display: none;
        }

        #price-table {
            font-weight: 700;
            font-size: 18px;
            width: 100%;
        }

        #price-table tr:nth-child(1) td {
            background: #CC3333 !important;
            color: #fff;
        }

        #price-table tbody tr:nth-child(odd) {
            background: #f4f4f4;
            color: #000000;
        }

        #price-table tbody tr:nth-child(even) {
            background: #ffffff;
            color: #000000;
        }

        #price-table td {
            text-align: center;
        }

        #price-table table {
            width: 100% !important;
            table-layout: fixed;
        }


        @media screen and (max-width: 767px) {
            #price-table {
                font-weight: 700;
                font-size: 16px;
                width: 100%;
            }
        }

        #faq {
            width: 100%;
        }

        #faq div:not(.faq-answer) {
            display: block;
        }

        .faq-answer {
            display: none;
            font-size: 17px;
            line-height: 2;
            color: #242424;
            background: #f8f8f9;
            border: 1px solid #54545433;
            border-radius: 10px;
            box-shadow: 7px 9px 20px -15px #545454;
        }

        .faq-answer div {
            padding-top: 10px;
            padding-left: 20px;
            padding-right: 40px;
            padding-bottom: 10px;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-question {
            color: #0066cc;
            background: #f1f3f4;
            line-height: 1.4;
        }
        
        .faq-question h2 {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 20px;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .arrow {
            border: solid #cc3333;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 4px;
            margin-left: 10px;
            margin-bottom: 3px;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }

        .faq-item.active .arrow {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
        
    </style>
    
<?php require_once __DIR__.'/template_parts/header_body.php'; ?>


    <h1 class="tour-title"><?= leo_field('leo_tour_title'); ?></h1>
    <section id="leo_images">
        <div>
            <div><img src="<?= wp_get_attachment_url(leo_field('leo_slide_image_1')); ?>" /></div>
        </div>
        <div>
            <div><img src="<?= wp_get_attachment_url(leo_field('leo_slide_image_2')); ?>" /></div>
        </div>
        <div>
            <div><img src="<?= wp_get_attachment_url(leo_field('leo_slide_image_3')); ?>" /></div>
        </div>
        <div>
            <div><img src="<?= wp_get_attachment_url(leo_field('leo_slide_image_4')); ?>" /></div>
        </div>
        <div>
            <div><img src="<?= wp_get_attachment_url(leo_field('leo_slide_image_5')); ?>" /></div>
        </div>
        <div>
            <div><img src="<?= wp_get_attachment_url(leo_field('leo_slide_image_6')); ?>" /></div>
        </div>
    </section>

    <div class="main-content">
        <div class="content left">
            <section class="tour-description box-shadow border-radius-10">
                <?= wpautop(leo_field('leo_tour_description', false)); ?>
            </section>

            <section class="service-box" id="service_box">
                <div class="box">
                    <div class="icon_box">
                        <span class="icon"><i class="fa-calendar-check fa"></i></span>
                    </div>
                    <div class="desc_box">
                        <span class="title">KHỞI HÀNH</span>
                        <span class="description"><?= leo_field('leo_departure_day'); ?></span>
                    </div>
                </div>
                <div class="box">
                    <div class="icon_box">
                        <span class="icon"><i class="fa-plane-departure fa"></i></span>
                    </div>
                    <div class="desc_box">
                        <span class="title">HÀNG KHÔNG</span>
                        <span class="description"><?= leo_field('leo_vehicle'); ?></span>
                    </div>
                </div>
                <div class="box">
                    <div class="icon_box">
                        <span class="icon"><i class="fa-star fa"></i></span>
                    </div>
                    <div class="desc_box">
                        <span class="title">ĐẲNG CẤP</span>
                        <span class="description">Trọn gói dịch vụ 4 - 5 sao</span>
                    </div>
                </div>
                <div class="box">
                    <div class="icon_box">
                        <span class="icon"><i class="fa-passport fa"></i></span>
                    </div>
                    <div class="desc_box">
                        <span class="title">98% ĐẬU VISA</span>
                        <span class="description">Đảm bảo tỷ lệ đậu visa cao</span>
                    </div>
                </div>
            </section>

            <section class="itinerary box-shadow border-radius-10">
                <?php $tour_itinerary = reshape_array(leo_field('leo_itinerary', false)); ?>

                <div class="content">
                    <div id="lichtrinhtour">
                        <div class="title-description">
                            <h2>LỊCH TRÌNH THAM QUAN</h2>
                        </div>
                        <div class="schedule-section">
                            <?php foreach ($tour_itinerary as $day => $day_detail) { ?>
                                <div class="day-detail">
                                    <div class="day-number d-none d-md-block">Ngày <span><?= $day + 1; ?></span></div>
                                    <div class="day-title">
                                        <span class="d-md-none text-primary">Ngày <?= $day + 1; ?></span> <?= $day_detail['title']; ?><i class="fa fa-chevron-up"></i>
                                    </div>
                                    <div class="day-desc">
                                        <div>
                                            <?= wpautop($day_detail['content']); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </section>

            <section class="price-table" id="price-table">
                <?= wpautop(leo_field('leo_price_table', false)); ?>
            </section>

            <section class="faq" id="faq">
                <h2 class="section-title">CÁC THÔNG TIN CẦN BIẾT</h2>
                <?php $tour_faq = reshape_array(leo_field('leo_faq', false));
                foreach ($tour_faq as $faq) { ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h2><?= $faq['question']; ?><i class="arrow down"></i></h2>
                        </div>
                        <div class="faq-answer">
                            <div><?= wpautop($faq['answer']); ?></div>
                        </div>
                    </div>
                <?php } ?>
            </section>


        </div>
        <div class="form right">
            <section id="sticky-price-div">
                <h3><?= leo_field('leo_tour_title'); ?></h3>
                <div>
                    <span class="old-price"><?= leo_field('leo_old_price'); ?></span>
                </div>
                <div class="price-wrapper">
                    <span class="price"><?= leo_field('leo_price'); ?></span>
                </div>
                <div class="info">
                    <div class="duration">
                        <i aria-hidden="true" class="fas fa-clock"></i><span><?= leo_field('leo_duration'); ?></span>
                    </div>
                    <div class="departure-day">
                        <i aria-hidden="true" class="fas fa-calendar-alt"></i><span><?= leo_field('leo_departure_day'); ?></span>
                    </div>
                    <div class="vehicle">
                        <i aria-hidden="true" class="fas fa-plane"></i><span><?= leo_field('leo_vehicle'); ?></span>
                    </div>
                </div>
                <button>ĐẶT CHỖ NGAY</button>

                <a href="tel:<?= get_hotline(true); ?>" class="hotline">
                    <i aria-hidden="true" class="fas fa-phone-alt"></i><span><?= leo_field('leo_hotline'); ?></span>
                </a>
            </section>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('#lichtrinhtour .day-title').forEach(
                (item) => {
                    item.addEventListener("click", function() {
                        item.parentElement.classList.toggle('active');
                    })
                }
            );
            document.querySelectorAll("#faq .faq-question").forEach(
                (item) => {
                    item.addEventListener("click", () => {
                        item.parentElement.classList.toggle("active");
                    });
                });


        });
        document.querySelectorAll("#lichtrinhtour .day-title")[0].parentElement.classList.toggle('active');
        document.querySelectorAll("#lichtrinhtour .day-title")[1].parentElement.classList.toggle('active');
    </script>


<?php require_once __DIR__.'/template_parts/footer.php'; ?>