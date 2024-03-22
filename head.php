<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>Mebelasm</title>
</head>
<body>


<header>
    <section class="container-core header">
        <nav class="header_about-company">
            <ul class="header_about-company_items-wrapper">
                <li class="header_about-company_nav-item">
                    <label class="selection-city_label">
                        <span data-selection-city-label-value>
                            Екатеринбург
                        </span>
                        <select name="" id="" data-selection-city>
                            <?php
                            $City = [];
                            require 'list-city.php';
                            foreach ($City as $item) { ?>
                                <option value=""><?= $item ?></option>
                            <?php } ?>
                        </select>
                    </label>
                </li>
                <li class="header_about-company_nav-item">
                    <a href="/about-company.php">О компании</a>
                </li>
                <li class="header_about-company_nav-item">
                    <a href="/job-vacancy.php">Работа в компании</a>
                </li>
                <li class="header_about-company_nav-item yellow-btn">
                    <a href="/we-work-with-business.php">Для бизнеса</a>
                </li>
                <li class="header_about-company_nav-item">
                    <a href="/bonus-program.php">Бонусная программа</a>
                </li>
            </ul>
            <ul class="header_contacts">
                <li class="header_contacts_item">
                    <a href="mailto:sale@asm.ru">sale@asm.ru</a>
                </li>
                <li class="header_contacts_item yellow-btn">
                    <a href="tel:+7 800 200 600">+7 800 200 600</a>
                </li>
            </ul>
        </nav>
        <nav class="header_nav-panel">
            <ul class="header_nav-panel_other">
                <li class="header_nav-panel_other_logo-wrapper"><a class="header_nav-panel_other_logo" href="/"><img
                                src="/images/Frame%202087327193%20(2).png" alt="logo"></a></li>
                <li class="header_nav-panel_other_catalog-wrapper">
                    <a href="/catalog.php" class="header_nav-panel_other_catalog green-btn">
                        Каталог
                    </a>
                </li>
                <li class="header_nav-panel_other_search-wrapper" data-header-nav-panel-other-search-wrapper>
                    <div class="core-search-background" data-core-search-background></div>
                    <form action="" class="core-search-wrapper" data-core-search-wrapper>
                        <label class="header_nav-panel_other_search" data-core-search>
                            <input type="text" placeholder="Я ищу..." class=>
                        </label>
                        <ul class="core-search_content" data-core-search-content>
                            <?php for ($i = 0; $i < 40; $i++) { ?>
                                <li>
                                    <a class="core-search_content_item" href="">Модульные диваны</a>
                                </li>
                            <?php }?>
                            <li>
                                <a class="core-search_content_item watch-all" href="">Категории</a>
                            </li>
                        </ul>
                    </form>
                </li>
            </ul>
            <ul class="header_nav-panel_links-wrapper">
                <li class="header_nav-panel_links_item"><a href="/contacts.php">Контакты</a></li>
                <li class="header_nav-panel_links_item"><a href="/our-stores.php">Магазины</a></li>
                <li class="header_nav-panel_links_item"><button data-open-sign-in-sign-up>Войти</button></li>
                <li class="header_nav-panel_links_item"><a href="">Избр.</a></li>
                <li class="header_nav-panel_links_item">
                    <a class="core-basket-icon" href="/basket.php">
                        Корзина
                        <span>2</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="header_sub-title-wrapper">
            <a class="header_sub-title_item" href="/we-work-with-business.php">Ткани</a>
            <a class="header_sub-title_item" href="/lifting-mechanisms.php">Подъемые механизмы</a>
        </div>
    </section>

    <section class="container-core header-mobile">
        <div class="header_mobile_logo-wrapper">
            <a class="header-mobile_logo" href="/">
                <img src="/images/Frame%202087327193%20(1).png" alt="logo">
            </a>
            <p class="header-mobile_city">Екатеринбург</p>
        </div>
        <div class="core-search-mobile-wrapper" data-core-searach-mobile-wrapper>
            <form action="" class="core-search-mobile_input-wrapper" data-core-searach-mobile-btn-wrapper>
                <label class="header-mobile_search" data-core-searach-mobile-input-label>
                    <input type="text" placeholder="Я ищу...">
                </label>
                <button class="header-mobile_btn-cancel" data-core-searach-mobile-btn-cancel>Отмена</button>
            </form>
            <ul class="core-search_content" data-core-searach-mobile-content>
                <?php for ($i = 0; $i < 40; $i++) { ?>
                <li>
                    <a class="core-search_content_item" href="">Модульные диваны</a>
                </li>
                <?php }?>
                <li>
                    <a class="core-search_content_item watch-all" href="">Категории</a>
                </li>
            </ul>
        </div>
    </section>
</header>


<section class="mobile-bottom-mini-menu">
    <ul class="mobile-bottom-mini-menu_item-wrapper">
        <li class="mobile-bottom-mini-menu_item">
            <a href="">Меню</a>
        </li>
        <li class="mobile-bottom-mini-menu_item">
            <a href="/catalog.php">Каталог</a>
        </li>
        <li class="mobile-bottom-mini-menu_item">
            <a href="/contacts.php">Контакты</a>
        </li>
        <li class="mobile-bottom-mini-menu_item">
            <a href="our-stores.php">Магазины</a>
        </li>
        <li class="mobile-bottom-mini-menu_item">
            <a href="">Избр.</a>
        </li>
        <li class="mobile-bottom-mini-menu_item">
            <a class="mobile-bottom-mini-menu_basket" href="/basket.php">
                Корзина
                <span>2</span>
            </a>
        </li>
    </ul>
</section>


<section class="sing-in-sign-up-wrapper" data-sing-in-sign-up>
    <div class="sing-in-sign-up">
        <div class="sing-in-sign-up_header-wrapper">
            <div class="sing-in-sign-up_btn-wrapper">
                <div class="sing-in-sign-up_btn_item-wrapper">
                    <button class="sing-in-sign-up_btn_item" data-btn-sign-in>Вход</button>
                    <button class="sing-in-sign-up_btn_item not-active" data-btn-sign-up>Регистрация</button>
                </div>
                <button class="sing-in-sign-up-wrapper_btn-close" data-sing-in-sign-up-btn-close></button>
            </div>
            <p class="sing-in-sign-up_title">После авторизации вы сможете управлять заказами и оставлять отзывы</p>
        </div>
        <div class="sing-in-sign-up_forms-wrapper">
            <form class="sing-in-sign-up_form active" action="" data-sing-in-form >
                <label class="sing-in-sign-up_form_label"><input type="text" placeholder="+7"></label>
                <label class="sing-in-sign-up_form_label"><input type="password" placeholder="Пароль"></label>
                <div class="sing-in-sign-up_form_footer-btn-wrapper">
                    <input class="sing-in-sign-up_form_footer-btn-item" type="submit" value="Войти">
                    <a class="sing-in-sign-up_form_footer-btn-additional" href="">Забыл пароль или номер телефона?</a>
                </div>
            </form>
            <form class="sing-in-sign-up_form" action="" data-sing-up-form >
                <label class="sing-in-sign-up_form_label"><input type="text" placeholder="+7"></label>
                <label class="sing-in-sign-up_form_label"><input type="password" placeholder="Пароль"></label>
                <label class="sing-in-sign-up_form_label"><input type="password" placeholder="Пароль"></label>
                <div class="sing-in-sign-up_form_footer-btn-wrapper">
                    <input class="sing-in-sign-up_form_footer-btn-item" type="submit" value="Регистрация">
                </div>
            </form>
        </div>
    </div>
</section>