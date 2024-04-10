<?php
include __DIR__ . '/head.php';
?>

<section class="about-company-wrapper" style="background-image: url('images/ba60a6b5a92bf404f2e7ed728a5fdc2d.png')">
    <div class="container-core about-company">
        <?php
        include __DIR__ . '/breadcrumb.php';
        breadcrumb([['url' => '', 'name' => 'О компании']]);
        ?>
        <img class="about-company_logo" src="images/about page logo.png" alt="">
        <p class="about-company_content">
            Современная мебельная фабрика, которая предлагает широкий ассортимент мебели для создания стильного и
            комфортного интерьера вашего дома. Мы специализируемся на производстве модульной мебели, что позволяет нашим
            клиентам подобрать идеальный вариант для своего помещения.
        </p>
        <ul class="about-company_links">
            <li><a class="about-company_link" href="#stories">История развития</a></li>
            <li><a class="about-company_link" href="#store">Магазины</a></li>
            <li><a class="about-company_link" href="#store">Контакты</a></li>
            <li><a class="about-company_link" href="#vacancy">Вакансии</a></li>
        </ul>
    </div>
</section>

<section class="container-core company-group" data-company-group>
    <h2 class="company-group_header" id="stories">Группа компаний АСМ Мебель – <br> компания с историей в 30 лет. </h2>

    <div class="company-group_items">
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <div class="company-group_item" data-company-group_item>
                <div class="company-group_item_img-wrapper">
                    <img class="company-group_item_img" src="images/Component 41.png" alt="">
                    <p class="company-group_item_text">
                        <span>Международное расширение</span>
                        В 1996 году компания успешно запустила свои продукты на международном рынке, открыв филиалы и
                        дистрибьюторские центры в нескольких странах.
                    </p>
                </div>
                <p class="company-group_item_year">1996</p>
            </div>
        <?php } ?>
    </div>
    <button class="company-group_btn-read-more" data-company-group-btn-read-more>Читать больше</button>
</section>

<section class="we-need-specialists container-core">
    <h1 class="we-need-specialists_header" id="vacancy">Мы постоянно в поиске специалистов</h1>
    <a class="we-need-specialists_watch-everything green-btn" href="">Смотреть все</a>

    <div class="job-vacancy_item-wrapper" data-page-type="about-company">
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <div class="job-vacancy_item">
                <div class="job-vacancy_item_title-wrapper">
                    <p class="job-vacancy_item_title">Менеджер по подбору персонала</p>
                    <p class="job-vacancy_item_salaries">45 000 – 60 000 ₽</p>
                </div>
                <div class="job-vacancy_item_other">
                    <p class="job-vacancy_item_status">💻 Можно удаленно</p>
                    <ul class="job-vacancy_item_address">
                        <li>Екатеринбург</li>
                        <li>Асм-мебель</li>
                    </ul>
                </div>
                <a class="job-vacancy_item_btn-respond" href="">Откликнуться</a>
            </div>
        <?php } ?>
    </div>
</section>

<section class="container-core map-wrapper " data-map-wrapper>
    <h1 class="map_header site-header">Наши магазины</h1>
    <div class="map">
        <div class="map-and-list">
            <button class="map-and-list_item active" data-select-map><span>На карте</span></button>
            <button class="map-and-list_item" data-select-list><span>Списком</span></button>
        </div>
        <div class="map_cities-and-other-wrapper">
            <div class="map_cities_pc">
                <a class="map_cities_pc_item active" href="">Екатеринбург</a>
                <a class="map_cities_pc_item" href="">Нижневартовск</a>
                <a class="map_cities_pc_item" href="">Ханты-Мансийск</a>
                <a class="map_cities_pc_item" href="">Челябинск</a>
            </div>
            <label class="map_cities_mobile" data-selection-city-wrapper-label>
                <span data-selection-city-label-value>
                    Екатеринбург
                </span>
                <select class="map_cities_mobile_items-wrapper" name="" id="" data-selection-city>
                    <option value="">Екатеринбург</option>
                    <option value="">Нижневартовск</option>
                    <option value="">Ханты-Мансийск</option>
                    <option value="">Челябинск</option>
                </select>
            </label>
            <div class="map_chart-wrapper active" data-content-map>
                <section class="map-store-item-container" data-map-store-item-container>
                    <div class="map-store-item-wrapper">
                        <button class="map-store-item_btn-open" data-map-store-item-btn-open></button>
                        <div class="map-store-item" data-map-store-item>
                            <img class="map-store-item_img" src="/images/Component%2041.png" alt="">
                            <div class="map-store-item_content">
                                <div class="map-store-item_head-wrapper">
                                    <div class="map-store-item_title-wrapper">
                                        <h1 class="map-store-item_title">Асм-мебель</h1>
                                        <button class="map-store-item_btn-cancel" data-map-store-item-btn-cancel></button>
                                    </div>
                                    <p class="map-store-item_subtitle">
                                        ТРЦ «Сургут Сити Молл», Югорский тракт, 38, Сургут
                                    </p>
                                </div>
                                <div class="map-store-item_btn-wrapper">
                                    <a class="map-store-item_btn" href="">Подробнее</a>
                                    <a class="map-store-item_btn" href="">Каталог</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <iframe class="map_chart" src="https://yandex.ru/map-widget/v1/?um=constructor%3A10eef986681734feab3b80015657da25d13c89ec382418a3a4980545fc42e8a5&amp;source=constructor"
                        width="100%" height="800" frameborder="0"></iframe>
            </div>
            <div class="map_list-wrapper" data-content-city-list>
                <?php for ($i = 0; $i < 12; $i++) { ?>
                    <div class="map_list_item">
                        <img class="map_list_item_img" src="/images/Component%2041.png" alt="">
                        <div class="map_list_item_description">
                            <p class="map_list_item_title">ТД «РИМ», ул. Окружная 5</p>
                            <div class="map_list_item_other">
                                <p class="map_list_item_grade">5.0</p>
                                <p class="map_list_item_user-selection">Выбор пользователей</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>


<section class="container-core partners">
    <h3 class="partners_header">Партнеры</h3>
    <p class="partners_text">С 1993 мы выстраиваем долгосрочные отношения с нашими деловыми партнерами, это позволяет
        работать надежно и уверенно.</p>
    <div class="partners_slider-wrapper">
        <div class="partners-slider-opacity"></div>
        <div class="swiper partners-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="partners_item"></div>
                </div>
                <div class="swiper-slide">
                    <div class="partners_item"></div>
                </div>
                <div class="swiper-slide">
                    <div class="partners_item"></div>
                </div>
                <div class="swiper-slide">
                    <div class="partners_item"></div>
                </div>
                <div class="swiper-slide">
                    <div class="partners_item"></div>
                </div>
                <div class="swiper-slide">
                    <div class="partners_item"></div>
                </div>
            </div>
        </div>
        <div class="partners-slider-opacity"></div>
    </div>
</section>


<section class="container-core our-team" data-page-type="about-company">
    <div class="our-team_header-wrapper">
        <h3 class="our-team_header">Команда</h3>
        <div class="our-team_btn-wrapper">
            <div class="our-team_swiper-button-prev"></div>
            <div class="our-team_swiper-button-next"></div>
        </div>
    </div>
    <div class="our-team_slider-wrapper">
        <div class="swiper our-team_swiper">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <div class="swiper-slide">
                        <div class="our-team_item">
                            <div class="our-team_item_img-wrapper">
                                <img class="our-team_item_img" src="images/b23986788231ccb13246407d7b8d9590.png" alt="">
                            </div>
                            <p class="our-team_item_text">
                                <span>Мухаметов Максим <br> Равильевич</span>
                                Генеральный директор
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="our-team_mobile">
            <?php for ($i = 0; $i < 8; $i++) { ?>
                <div class="our-team_item">
                    <div class="our-team_item_img-wrapper">
                        <img class="our-team_item_img" src="images/b23986788231ccb13246407d7b8d9590.png" alt="">
                    </div>
                    <p class="our-team_item_text">
                        <span>Мухаметов Максим Равильевич</span>
                        Генеральный директор
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php
include __DIR__ . '/footer.php';
?>
