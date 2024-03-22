<?php
include __DIR__ . '/head.php';
?>

<section class="furniture-for-restaurants-and-cafes">
    <?php
    include __DIR__ . '/breadcrumb.php';
    breadcrumb([['url' => '', 'name' => 'Для бизнеса'], ['url' => '', 'name' => 'Мебель для ресторанов и кафе']]);
    ?>
    
    <div class="container-core furniture-for-restaurants-and-cafes_content">
        <p class="furniture-for-restaurants-and-cafes_text">
            <span class="site-header">Мебель для ресторанов и кафе</span>
            Сделай заказ сейчас и получи коммерческое предложение
        </p>
        <img class="furniture-for-restaurants-and-cafes_img" src="images/07176f4853cb21ab94de0cdfa1410bdf.jpeg" alt="">
    </div>
</section>


<?php
$categoryData = [
    ['photo' => 'images/347 копия 1.png', 'title' => 'Премиум <br> мебель'],
    ['photo' => 'images/image 41.png', 'title' => 'Прямые диваны'],
    ['photo' => 'images/image 42.png', 'title' => 'Угловые диваны'],
    ['photo' => 'images/image 43.png', 'title' => 'Модульные диваны'],
    ['photo' => 'images/image 44.png', 'title' => 'Кресла и пуфы'],
    ['photo' => 'images/image 41.png', 'title' => 'Прямые диваны'],
    ['photo' => 'images/image 41.png', 'title' => 'Прямые диваны'],
    ['photo' => 'images/image 42.png', 'title' => 'Угловые диваны'],
    ['photo' => 'images/image 43.png', 'title' => 'Модульные диваны'],
    ['photo' => 'images/image 44.png', 'title' => 'Кресла и пуфы'],
];
?>

<div class="container-core category-and-catalog_header-wrapper">
    <h1 class="category-and-catalog_header">Ассортимент </h1>
</div>

<section class="container-core category" data-page-type="store-card">
    <?php foreach ($categoryData as $item) { ?>

        <a class="category_item" href="">
            <img class="category_img" src="<?= $item['photo'] ?>" alt="">
            <p class="category_title"><?= $item['title'] ?></p>
        </a>

    <?php } ?>
</section>


<section class="container-core completed-projects">
    <h1 class="completed-projects_header">Реализованные проекты</h1>

    <div class="completed-projects-slider-wrapper">
        <div class="swiper completed-projects-swiper">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="swiper-slide">
                        <img class="completed-projects_img" src="images/04f6fa8dae07b62a56b5f17d9a182bb0.jpeg" alt="">
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <div class="completed-projects_content">
        <p class="completed-projects_content_title">Товар на фото</p>
        <div class="completed-projects_content_item-wrapper">
            <?php for ($i = 0; $i < 4; $i++) { ?>
            <div class="completed-projects_content_item">
                <img class="completed-projects_content_item_img" src="images/00b7537a6b8dec8e7ba13d1adb6c489f.png" alt="">
                <p class="completed-projects_content_item_text">Название товара<span>17 900 ₽</span></p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<section class="container-core our-advantages">
    <h1 class="our-advantages_header">Наши преимущества</h1>
    <div class="our-advantages_item-wrapper">
        <div class="our-advantages_content">
            <div class="our-advantages_item">
                <p class="our-advantages_item_text">
                    <span>Уникальный дизайн и стиль</span>
                    Предложение мебели с оригинальным дизайном и уникальным стилем, которые недоступны в других магазинах
                </p>
            </div>
            <div class="our-advantages_content-line-wrapper">
                <hr class="our-advantages_content-line">
                <div class="our-advantages_content-dot"></div>
                <hr class="our-advantages_content-line">
            </div>
            <div class="our-advantages_item">
                <p class="our-advantages_item_text">
                    <span>Широкий ассортимент</span>
                    Большой выбор мебельных товаров, чтобы удовлетворить разнообразные потребности клиентов.
                </p>
            </div>
        </div>
        <div class="our-advantages_item content-img">
            <p class="our-advantages_item_text">
                <span>Собственное производство</span>
                Предложение мебели с оригинальным дизайном и уникальным стилем, которые недоступны в других магазинах
            </p>
            <img class="our-advantages_item_img" src="images/66676f2556f2d2df6bb2c88a66024c99.png" alt="">
        </div>
        <div class="our-advantages_content">
            <div class="our-advantages_item">
                <p class="our-advantages_item_text">
                    <span>Качество и долговечность</span>
                    Поставка высококачественной мебели, изготовленной из прочных и надежных материалов.
                </p>
            </div>
            <div class="our-advantages_content-line-wrapper">
                <hr class="our-advantages_content-line">
                <div class="our-advantages_content-dot"></div>
                <hr class="our-advantages_content-line">
            </div>
            <div class="our-advantages_item">
                <p class="our-advantages_item_text">
                    <span>Быстрая и надежная доставка</span>
                    Организация оперативной доставки мебели с минимальными задержками и повреждениями.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="container-core">
    <div class="order-restaurants-furniture">
        <div class="order-restaurants-furniture_text-wrapper">
            <p class="order-restaurants-furniture_title">Оставьте заявку на изготовление мебели для ресторана <span>со скидкой до 30%</span></p>
            <p class="order-restaurants-furniture_sub-title">Мы предлагаем столы, стулья, барные стойки и гардеробы для ресторанов. Наша мебель обладает стильным дизайном, долговечна и проста в обслуживании.</p>
        </div>
        <div class="order-restaurants-furniture_btn-wrapper">
            <button class="order-restaurants-furniture_btn-submit-your-application">Оставить заявку</button>
            <img class="order-restaurants-furniture_img" src="images/ed3861f734f8ee40955ee840063d04c5.png" alt="">
        </div>
    </div>
</section>

<section class="container-core our-team">
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


<section class="container-core contact_information" data-contact-information-wrapper>
    <h3 class="contact_information_header">Контактная информация</h3>
    <div class="contact_information_content-wrapper">
        <div class="contact_information_btn-wrapper">
            <button class="contact_information_btn active" data-contact-information-btn>Уфаул</button>
            <button class="contact_information_btn" data-contact-information-btn>Ульяновск</button>
            <button class="contact_information_btn" data-contact-information-btn>Челябинск</button>
            <button class="contact_information_btn" data-contact-information-btn>Пермь</button>
            <button class="contact_information_btn" data-contact-information-btn>Москва</button>
        </div>
        <div class="contact_information_content_items">
            <div class="contact_information_content_item active" data-contact-information-content-item>
                <div class="contact_information_contacts">
                    <p class="contact_information_contacts_title">По любым вопросам:</p>
                    <a class="contact_information_contacts_item" href="tel:+7 922 224-49-31">+7 922 224-49-31</a>
                    <a class="contact_information_contacts_item" href="mailto:sale@mebelasm.ru">sale@mebelasm.ru</a>
                    <p class="contact_information_contacts_item">Уфаул, ул. Сельская Богородская, 51 оф. 203</p>
                </div>
                <div class="contact_information_person-data-wrapper">
                    <img class="contact_information_person_photo" src="images/Ellipse 324 (1).png" alt="">
                    <p class="contact_information_person_name"><span>Андрей</span>Менеджер</p>
                </div>
            </div>
            <div class="contact_information_content_item" data-contact-information-content-item></div>
            <div class="contact_information_content_item" data-contact-information-content-item></div>
            <div class="contact_information_content_item" data-contact-information-content-item></div>
            <div class="contact_information_content_item" data-contact-information-content-item></div>
        </div>
    </div>
</section>


<?php
$question_and_answer = [
    ['question' => 'Как узнать стоимость мебели?', 'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate delectus distinctio doloribus'],
    ['question' => 'Как узнать стоимость мебели?', 'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate delectus distinctio doloribus'],
    ['question' => 'Как узнать стоимость мебели?', 'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate delectus distinctio doloribus'],
    ['question' => 'Как узнать стоимость мебели?', 'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate delectus distinctio doloribus'],
    ['question' => 'Как узнать стоимость мебели?', 'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate delectus distinctio doloribus'],
];
?>

<section class="container-core questions-and-answer" data-questions-and-answer>
    <?php foreach ($question_and_answer as $item) { ?>
        <div class="questions-and-answer_item" data-questions-and-answer-item>
            <div class="questions-and-answer_item-question" data-questions-and-answer-question><?= $item['question'] ?></div>
            <div class="questions-and-answer_item-answer" data-questions-and-answer-answer><?= $item['answer'] ?></div>
        </div>
    <?php } ?>
    <div class="questions-and-answer_item show-more" data-questions-and-answer-item>
        <button class="questions-and-answer_btn-show-more" data-questions-and-answer-question data-questions-and-answer_btn-show-more>Показать больше</button>
    </div>
</section>

<section class="container-core seo show-more" data-seo-wrapper>
    <h3 class="seo_title">Headline for seo-text</h3>
    <div class="seo-tex-wrapper">
        <p class="seo_text close" data-seo-text>Real estate is not just houses, apartments or commercial properties. It is the place where we live,
            work and develop. It is a space that provides comfort, security and coziness for each of us. In this section you
            will find everything related to real estate - from renting apartments to buying mansions, from investing in real
            estate to getting a mortgage loan. We offer you only proven and reliable options so that you can choose exactly
            what is right for you and your family. With us your real estate will become a reality!
        </p>
        <button class="seo_btn-show-all" data-seo-btn-show-all>Show all</button>
    </div>
</section>

<?php
include __DIR__ . '/footer.php';
?>
