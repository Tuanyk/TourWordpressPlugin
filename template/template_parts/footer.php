<style>
    section.footer {
        border-top: 3px solid #cc3333;
        padding-top: 50px;
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        color: rgba(84,89,95,0.79);
        font-size: 14px;
    }
    section.footer > div {
        width: 350px;
    }
    section.footer .quick-link {
        display: flex;
        flex-direction: column;
    }
    section.footer .quick-link a {
        text-decoration: none;
        color: #cc3333;
        font-weight: 700;
        margin-bottom: 20px;
    }
    section.footer .subscribe form {
        display: flex;
        flex-direction: column;
    }
    section.footer .subscribe form input {
        color: white;
        font-size: 13px;
        width: 100%;
        max-width: 100%;
        border: 1px solid #818a91;
        border-color: #c9c9c9;
        border-radius: 0px 0px 0px 0px;
        vertical-align: middle;
        margin-bottom: 10px;
        color: black;
    }
    section.footer .subscribe form input:focus {
        outline: none;
    }
    section.footer .subscribe form button.submit {
        background-color: #cc3333;
        padding: 0;
        color: white;
        padding: 10px 0;
    }
    section.footer .subscribe form button.submit:hover {
        background-color: #1c1c1c;
        color: #ffffff;
    }
    section.footer h4 {
        font-size: 18px;
        text-transform: uppercase;
        color: #212121;
        margin-bottom: 20px;
    }
    section.footer-bottom {
        background-color: #f4f4f4;
        margin-bottom: 0;
        display: flex;
        justify-content: space-around;
        text-transform: uppercase;
        font-size: 14px;
        color: #5D5D5D;
        padding: 10px 0;
    }
    section.footer .share {
        display: flex;
    }
    section.footer .share span {
        display: inline-block;
        position: relative;
        width: 30px;
        height: 30px;
        margin-right: 5px;
        color: white;
        border-radius: 100%;
        cursor: pointer;
    }
    section.footer .share span.fb {
        background-color: #3b5998;
    }
    section.footer .share span.twitter {
        background-color: #1da1f2;
    }
    section.footer .share span.instagram {
        background-color: #262626;
    }
    section.footer .share span i {
        position: absolute;
        top: calc(50% - 6px);
        left: calc(50% - 6px);
    }
</style>

<section class="footer">
    <div class="about-us">
        <div class="logo">
            <img src="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]; ?>" alt="">
        </div>
        <div class="desc"><p>Pan American Travel là thương hiệu của Công ty Cổ phần Du lịch Châu Mỹ. Chúng tôi cung cấp các dịch vụ tour du lịch chất lượng cao tới Châu Mỹ, Châu Âu, Tour Độc lạ và dịch vụ Visa cao cấp.</p></div>
        <div class="share">
            <span class="fb"><i class="fab fa-facebook-f"></i></span>
            <span class="twitter"><i class="fab fa-twitter"></i></span>
            <span class="instagram"><i class="fab fa-instagram"></i></span>
        </div>

    </div>
    <div class="subscribe">
        <h4>REQUEST FORM</h4>
        <form class="elementor-form" method="post" name="New Form">
            <input type="hidden" name="referer_title" value="Footer Signup Form">
            <input size="1" type="text" name="form_fields[name]" id="form-field-name" placeholder="Your Name">
            <input size="1" type="email" name="form_fields[email]" id="form-field-email" placeholder="Your Email" required="required" aria-required="true">
            <button type="submit" class="submit">Subscribe</button>
        </form>
        <div class="address">
            <p>Văn phòng HN: Số 15 Vạn Phúc, Kim Mã, Ba Đình, Hà Nội</p>
            <p>Văn phòng TP. HCM: Tầng Trệt (Tầng G) Toà nhà Bảo Việt, 233 Đồng Khởi, Phường Bến Nghé, Quận 1, TP Hồ Chí Minh</p>
        </div>
    </div>
    <div class="quick-link">
        <h4>Liên kết nhanh</h4>
        <a href="https://pantravel.vn/about-us/">Về chúng tôi</a>
        <a href="https://panvisa.com.vn/dich-vu-visa-my/">Dịch vụ Visa Mỹ</a>
        <a href="https://panvisa.com.vn/dich-vu-visa-canada/">Dịch vụ Visa Canada</a>
    </div>
</section>
<section class="footer-bottom">
    <span class="copyright">© <?= date('Y'); ?> All rights reserved​</span>
    <span class="author">Made with ❤ by Pantravel</span>
</section>
<section class="phone-call">
    <style>
        .call-now-button {
            display: none;
            z-index: 9999;
            clear: both;
            margin: 0 auto;
            position: fixed;
            border-radius: 50px;
        }

        .call-now-button div {
            display: flex;
        }

        .call-now-button div p {
            color: #fff;
            display: table;
            padding: 10px;
            border-radius: 21px;
            height: 34px;
            line-height: 14px;
            font-size: 14px;
            margin: 8px 5px 8px 50px;
            text-transform: uppercase;
            font-weight: normal;
            text-align: center;
            box-sizing: content-box;
            text-decoration: none !important;
            box-sizing: border-box;
        }

        .quick-alo-ph-circle.active {
            width: 130px;
            height: 130px;
            top: -40px;
            left: -40px;
            position: absolute;
            background-color: transparent;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid rgba(30, 30, 30, 0.4);
            opacity: 1;
            -webkit-animation: quick-alo-circle-anim 1.2s infinite ease-in-out;
            -moz-animation: quick-alo-circle-anim 1.2s infinite ease-in-out;
            -ms-animation: quick-alo-circle-anim 1.2s infinite ease-in-out;
            -o-animation: quick-alo-circle-anim 1.2s infinite ease-in-out;
            animation: quick-alo-circle-anim 1.2s infinite ease-in-out;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .quick-alo-ph-circle-fill.active {
            width: 80px;
            height: 80px;
            top: -15px;
            left: -15px;
            position: absolute;
            background-color: #000;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            opacity: 1;
            -webkit-animation: quick-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -moz-animation: quick-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -ms-animation: quick-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -o-animation: quick-alo-circle-fill-anim 2.3s infinite ease-in-out;
            animation: quick-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .quick-alo-ph-img-circle.shake {
            width: 50px;
            height: 50px;
            top: 0;
            left: 0;
            position: absolute;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            opacity: 1;
            background: url('<?= dirname(dirname(plugin_dir_url(__FILE__))) ; ?>/assets/images/quick-call-button.png') no-repeat center center;
            -webkit-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
            -moz-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
            -ms-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
            -o-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
            animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .quick-alo-phone-img-circle.shake {
            width: 50px;
            height: 50px;
            top: 0;
            left: 0;
            position: absolute;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            opacity: 1;
            background: url('<?= dirname(dirname(plugin_dir_url(__FILE__))) ; ?>/assets/images/quick-call-button-phone.png') no-repeat center center;
            -webkit-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
            -moz-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
            -ms-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
            -o-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
            animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .quick-alo-ph-img-circle.notshake {
            width: 50px;
            height: 50px;
            top: 0;
            left: 0;
            position: absolute;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            opacity: 1;
            background: url(/images//quick-call-button.png) no-repeat center center;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .quick-alo-phone-img-circle.notshake {
            width: 50px;
            height: 50px;
            top: 0;
            left: 0;
            position: absolute;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            opacity: 1;
            background: url(/images//quick-call-button-phone.png) no-repeat center
            center;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        @-moz-keyframes quick-alo-circle-anim {
            0% {
            -moz-transform: rotate(0) scale(0.5) skew(1deg);
            opacity: 0.1;
            -moz-opacity: 0.1;
            -webkit-opacity: 0.1;
            -o-opacity: 0.1;
            }
            30% {
            -moz-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.5;
            -moz-opacity: 0.5;
            -webkit-opacity: 0.5;
            -o-opacity: 0.5;
            }
            100% {
            -moz-transform: rotate(0) scale(1) skew(1deg);
            opacity: 0.6;
            -moz-opacity: 0.6;
            -webkit-opacity: 0.6;
            -o-opacity: 0.1;
            }
        }
        @-webkit-keyframes quick-alo-circle-anim {
            0% {
            -webkit-transform: rotate(0) scale(0.5) skew(1deg);
            -webkit-opacity: 0.1;
            }
            30% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            -webkit-opacity: 0.5;
            }
            100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            -webkit-opacity: 0.1;
            }
        }
        @-o-keyframes quick-alo-circle-anim {
            0% {
            -o-transform: rotate(0) kscale(0.5) skew(1deg);
            -o-opacity: 0.1;
            }
            30% {
            -o-transform: rotate(0) scale(0.7) skew(1deg);
            -o-opacity: 0.5;
            }
            100% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            -o-opacity: 0.1;
            }
        }
        @-moz-keyframes quick-alo-circle-fill-anim {
            0% {
            -moz-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.2;
            }
            50% {
            -moz-transform: rotate(0) -moz-scale(1) skew(1deg);
            opacity: 0.2;
            }
            100% {
            -moz-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.2;
            }
        }
        @-webkit-keyframes quick-alo-circle-fill-anim {
            0% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.2;
            }
            50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            opacity: 0.2;
            }
            100% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.2;
            }
        }
        @-o-keyframes quick-alo-circle-fill-anim {
            0% {
            -o-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.2;
            }
            50% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            opacity: 0.2;
            }
            100% {
            -o-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.2;
            }
        }
        @-moz-keyframes quick-alo-circle-img-anim {
            10% {
            transform: rotate(0) scale(1) skew(1deg);
            }
            10% {
            -moz-transform: rotate(-25deg) scale(1) skew(1deg);
            }
            20% {
            -moz-transform: rotate(25deg) scale(1) skew(1deg);
            }
            30% {
            -moz-transform: rotate(-25deg) scale(1) skew(1deg);
            }
            40% {
            -moz-transform: rotate(25deg) scale(1) skew(1deg);
            }
            50% {
            -moz-transform: rotate(0) scale(1) skew(1deg);
            }
            100% {
            -moz-transform: rotate(0) scale(1) skew(1deg);
            }
        }
        @-webkit-keyframes quick-alo-circle-img-anim {
            0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
            10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }
            20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }
            30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }
            40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }
            50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
            100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
        }
        @-o-keyframes quick-alo-circle-img-anim {
            0% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            }
            10% {
            -o-transform: rotate(-25deg) scale(1) skew(1deg);
            }
            20% {
            -o-transform: rotate(25deg) scale(1) skew(1deg);
            }
            30% {
            -o-transform: rotate(-25deg) scale(1) skew(1deg);
            }
            40% {
            -o-transform: rotate(25deg) scale(1) skew(1deg);
            }
            50% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            }
            100% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            }
        }
        @media screen and (max-width: 2500px) {
            .call-now-button {
            display: flex !important;
            background: #bf2233;
            }
            .quick-call-button {
            display: block !important;
            }
        }
        @media screen and (min-width: px) {
            .call-now-button .call-text {
            display: none !important;
            }
        }
        @media screen and (max-width: 1024px) and (min-width: px) {
            .call-now-button .call-text {
            display: none !important;
            }
        }
        @media screen and (max-width: 680px) {
            .call-now-button .call-text {
            display: none !important;
            }
        }
        .call-now-button {
            top: 80%;
        }

        .call-now-button {
            left: 3%;
        }

        .call-now-button {
            background: #bf2233;
        }

        .call-now-button div a .quick-alo-ph-img-circle,
        .call-now-button div a .quick-alo-phone-img-circle {
            background-color: #bf2233;
        }

        .call-now-button .call-text {
            color: #fff;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <div class="quick-call-button"></div>
    <div class="call-now-button" id="draggable">
    <div>
        <p class="call-text">Hỗ trợ tư vấn</p>
        <a href="tel:<?= get_hotline(true); ?>" id="quickcallbutton" title="Call Now">
        <div class="quick-alo-ph-circle active"></div>
        <div class="quick-alo-ph-circle-fill active"></div>
        <div class="quick-alo-ph-img-circle shake"></div>
        </a>
    </div>
    </div>
</section>
<section class="zalo-chat">
    <style>
        #zalo-sticky {
            position: fixed;
            right: 0;
            bottom: 0;
        }
    </style>
    <a href="<?= get_option('zalo_official'); ?>" id="zalo-sticky">
        <img src="<?= dirname(dirname(plugin_dir_url(__FILE__))) ; ?>/assets/images/zalochat.png" alt="">
    </a>
</section>
<?php wp_footer(); ?>

</body>
</html>