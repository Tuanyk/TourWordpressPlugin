<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">

    <style>
        /* Font for whole site */

        /* The structure of navbar
        -----------------------------------------------------------
            header
                nav
                    div.logo
                        img
                    div.main-menu
                        ul.menu
                            li.menu-item
                            li.menu-item.menu-item-has-children
                                a
                                li.sub-menu
                                    li.menu-item
                    span.toggle
                        svg
                    div.hotline
                        span.icon
                            svg
                        span.phone-numer
        -----------------------------------------------------------
        */


        /* Assign Color */

        :root {
            --hotline-color: #ffffff;
            --hotline-background-color: #cc3333;
            --drop-down-menu-background-color: #BF2233;
            --drop-down-menu-background-color-hover: #D22F40;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: white !important;
            font-family: 'Roboto', sans-serif;
        }

        /* Center nav bar and having better spaces between elements */

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-family: 'Inter', sans-serif;
            position: relative;
        }

        /* Make logo not so big */

        nav .logo {
            width: 200px;
        }

        nav .logo img {
            width: 100%;
            height: auto;
        }

        nav .main-menu ul {
            display: flex;
            list-style: none;
            text-transform: uppercase;
            padding: 0;
            z-index: 999;
        }

        nav .main-menu ul.menu>li {
            position: relative;
        }

        nav .main-menu a {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            display: inline-block;
            text-decoration: none;
            font-size: 16px;
            padding: 10px 7px 10px 20px;
            color: #212121;
        }

        nav .main-menu .menu-item-has-children > a::after {
            content: "";
            position: absolute;
            top: calc(50% - 2.5px);
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid black;
        }

        nav .main-menu button {
            display: none;
        }

        nav .main-menu:not(.menu-mobile) li:hover ul.sub-menu {
            display: flex;
        }

        nav .main-menu ul.sub-menu {
            position: absolute;
            display: none;
            flex-direction: column;
            background-color: var(--drop-down-menu-background-color);
            transition-delay: 150ms;
            pointer-events: auto;
            min-width: 400px;
            max-width: 1000px;
            box-shadow: 5px 10px 20px -15px #555555;
        }

        nav .main-menu ul.sub-menu li:hover {
            background-color: var(--drop-down-menu-background-color-hover);
        }

        nav .main-menu ul.sub-menu li {
            padding: 5px 10px;
            border-bottom: 1px solid #ffffff36;
        }

        nav .main-menu ul.sub-menu li a {
            font-size: 13px;
            font-weight: 500;
            color: white;
        }

        nav .hotline {
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            background: var(--hotline-background-color);
            color: var(--hotline-color);
            font-weight: 700;
            font-size: 22px;
            padding: 5px 15px 0 15px;
            border-radius: 10px;
        }

        nav .hotline a {
            text-decoration: none;
            color: white;
        }

        nav .icon {
            display: none;
        }

        nav .icon svg {
            width: 25px;
            fill: white;
        }


        nav span.toggle {
            display: none;
        }

        /* MOBILE */
        @media (max-width: 767px) {
            nav {
                justify-content: space-between;
            }
            nav .main-menu {
                display: none;
            }

            nav span.toggle {
                display: inline-block;
                order: 3;
            }

            nav .phone-number {
                display: none;
            }
            nav .icon {
                display: block;
            }
            nav .hotline {
                order: 1;
                padding: 5px 5px 0 5px;
            }

            nav .logo {
                order: 2;
            }
        }

        nav .menu-mobile {
            display: flex;
            justify-content: center;
            position: absolute;
            width: 100%;
            top: 50px;
        }

        
        nav .menu-mobile ul.menu {
            list-style-type: none;
            position: absolute;
            display: flex;
            flex-direction: column;
            background-color: var(--drop-down-menu-background-color);
            width: 100%;
            padding: 0;
        }

        nav .menu-mobile a {
            text-decoration: none;
            color: white;
            text-transform: uppercase;
            padding-right: 10px;
        }
        nav .menu-mobile ul > li {
            border-top: 1px solid #ffffff36;
        }
        nav .menu-mobile .show ul.sub-menu {
            list-style-type: none;
            position: relative;
            display: flex;
            flex-direction: column;
            box-shadow: none;
        }
        nav .menu-mobile li {
            position: relative;
        }
        nav .menu-mobile li:hover {
            background-color: var(--drop-down-menu-background-color-hover);
        }
        nav .menu-mobile .menu-item-has-children > a::after {
            content: "";
            position: absolute;
            top: 13px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid white;
        }
        nav .menu-mobile button {
            display: none;
        }
        nav .menu-mobile .sub-menu {
            display: none;
        }
        nav .menu-mobile.show .sub-menu{
            display: flex;
            position: relative;
        }
        nav .menu-mobile>div {
            width: 100%;
            display: flex;
            justify-content: center;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const navToggleButton = document.querySelector('nav span.toggle');
            const mainMenu = document.querySelector('nav .main-menu');
            const mobileToplvMenus = document.querySelectorAll('nav .menu-item-has-children');
            // Change Menu class to mobile or main-menu each time click to toggle button

            navToggleButton.addEventListener('click', () => {
                mainMenu.classList.toggle('menu-mobile');
                // mainMenu.classList.toggle('main-menu');
            });

            // Reset menu class when resize window

            window.addEventListener("resize", () => {
                mainMenu.classList = 'main-menu';
            }, true);

            // Show sub-menu when click

            for (const mobileToplvMenu of mobileToplvMenus) {
                mobileToplvMenu.addEventListener('click', ()=> {
                    console.log(mobileToplvMenu);
                    mobileToplvMenu.classList.toggle('show');
                });
            }


        });
    </script>

    <?php wp_head(); ?>

</head>

<body>
    <?php wp_body_open(); ?>
    <header>
        <nav>
            <div class="logo">
                <a href="/">
                    <img src="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]; ?>" alt="">
                </a>
            </div>
            <div class="main-menu">
                <?php wp_nav_menu(array('container' => '')); ?>
            </div>
            <span class="toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="48px" height="48px" viewBox="0 0 48 48">
                    <path d="M41,14H7a2,2,0,0,1,0-4H41A2,2,0,0,1,41,14Z" fill="#6f7380" />
                    <path d="M41,26H7a2,2,0,0,1,0-4H41A2,2,0,0,1,41,26Z" fill="#6f7380" />
                    <path d="M41,38H7a2,2,0,0,1,0-4H41A2,2,0,0,1,41,38Z" fill="#6f7380" />
                </svg>
            </span>
            <div class="hotline">
                <a href="tel:<?= get_hotline(true); ?>">
                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                    </svg></span><span class="phone-number"> <?= get_hotline(); ?></span>
                </a>
            </div>
        </nav>
    </header>
