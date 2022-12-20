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

<?php wp_footer(); ?>

</body>
</html>