<?php
include __DIR__ . '/head.php';
?>


<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '/job-vacancy.php', 'name' => 'Работа в компании'], ['url' => '', 'name' => 'Менеджер по подбору персонала']]);
?>

<?php
if(isset($_GET["id"])){
    $Data_id = $_GET["id"];
}
?>

<section class="container-core each-vacancy-separately-wrapper">
    <h1 class="site-header each-vacancy-separately-header">Работа в компании</h1>

    <div class="each-vacancy-separately">

        <div class="job-vacancy-wrapper">
            <div class="job-vacancy_item each-vacancy-separately_cancel-response">
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
                <a class="job-vacancy_item_btn-respond" href="#send-cv">Откликнуться</a>
            </div>
        </div>

        <div class="each-vacancy-separately_content">
            <ul>
                <li>Как понять, что эта работа вам подойдет:</li>
                <li>вы активный: склонны все делать быстро (кайфуете от скорости)</li>
                <li>вы работоспособный и целеустремленный человек</li>
                <li>вам нравится общаться с людьми (не устаете от общения)</li>
                <li>вы хотите попробовать себя в hr-направлении</li>
                <li>у вас есть мечта или цель и вам нужен быстрый и высокий заработок</li>
                <li>вас драйвит, когда вы достигаете результата</li>
            </ul>
            <ul>
                <li>Преимущества работы с нами:</li>
                <li>обучение всем процессам и нюансам работы</li>
                <li>обмен опытом и обучение с сильной командой</li>
                <li>возможность профессионального и карьерного роста (у нас большая hr-команда в разных направлениях hr-сферы)</li>
                <li>адекватные требования к кандидатам и релевантные условия труда</li>
                <li>высокая оплата за ваш труд (есть достойный оклад и премия)</li>
                <li>полностью официальный доход, официальное трудоустройство с 1го дня</li>
                <li>командная работа - у нас все процессы отлажены, тебе не придется делать работу за других</li>
            </ul>
            <ul>
                <li>Требования:</li>
                <li>активность и способность быть быстрым (быстро понимать и запоминать информацию, быстро думать)</li>
                <li>готовность много общаться (вам будет необходимо проводить за день по несколько несложных собеседований с кандидатами)</li>
                <li>готовность отвечать на "тысячу" одинаковых вопросов от кандидатов по вакансиям</li>
                <li>знание ПК (знать как пользоваться простыми функциями Word,Excel)</li>
            </ul>
            <ul>
                <li>Условия:</li>
                <li>наш уютный и комфортный офис находится в современном бизнес-парке</li>
                <li>график работы 5/2, выходные плавающие, время работы с 9-18, но бывают оплачиваемые переработки</li>
                <li>официальное трудоустройство по трудовому договору с первого дня</li>
                <li>официальная заработная плата (оклад + ежемесячная премия)</li>
            </ul>
            <p class="each-vacancy-separately_date-vacancy">Вакансия опубликована 18 ноября 2023 в Москве</p>
            <div class="each-vacancy-separately_form-wrapper" id="send-cv" data-each-vacancy-separately_form-<?= $Data_id ?>>
                <form action="">
                    <p class="each-vacancy-separately_form_title">Откликнуться на вакансию</p>
                    <label class="each-vacancy-separately_form_input"><input type="text" placeholder="Имя"></label>
                    <label class="each-vacancy-separately_form_input"><input type="tel" placeholder="+7"></label>
                    <label class="each-vacancy-separately_form_textarea"><textarea placeholder="Расскажите, почему вы нам подходите?"></textarea></label>
                    <label class="each-vacancy-separately_form_add-file"><input type="file">Прикрепить резюме</label>
                    <label class="each-vacancy-separately_form_btn-submit green-btn"><input type="submit" value="Откликнуться"></label>
                </form>
            </div>
        </div>

        <div class="each-vacancy-separately_similar-vacancies-wrapper">
            <h3 class="each-vacancy-separately_similar-vacancies-header">Похожие вакансии</h3>
            <a class="each-vacancy-separately_similar-vacancies_btn-list-vacancy" href="/job-vacancy.php">К списку с вакансиями</a>
        </div>

        <div class="job-vacancy_item-wrapper" data-similar-vacancies-wrapper>
            <div class="job-vacancy_item" data-job-vacancy-item>
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

            <div class="job-vacancy_item" data-job-vacancy-item>
                <div class="job-vacancy_item_title-wrapper">
                    <p class="job-vacancy_item_title">Менеджер по подбору персонала</p>
                    <p class="job-vacancy_item_salaries">45 000 – 60 000 ₽</p>
                </div>
                <div class="job-vacancy_item_other">
                    <ul class="job-vacancy_item_address">
                        <li>Екатеринбург</li>
                        <li>Асм-мебель</li>
                    </ul>
                </div>
                <a class="job-vacancy_item_btn-respond" href="/each-vacancy-separately.php?id=scroll">Откликнуться</a>
            </div>

            <div class="job-vacancy_item" data-job-vacancy-item>
                <div class="job-vacancy_item_title-wrapper">
                    <p class="job-vacancy_item_title">Менеджер по подбору персонала</p>
                    <p class="job-vacancy_item_salaries">45 000 – 60 000 ₽</p>
                </div>
                <div class="job-vacancy_item_other">
                    <ul class="job-vacancy_item_address">
                        <li>Екатеринбург</li>
                        <li>Асм-мебель</li>
                    </ul>
                </div>
                <a class="job-vacancy_item_btn-respond" href="/each-vacancy-separately.php?id=scroll">Откликнуться</a>
            </div>
        </div>

        <section class="container-core">
            <button class="each-vacancy-separately_btn-show-more green-btn" data-similar-vacancies-btn-open>Показать еще</button>
        </section>

        <div class="send-vc">
            <p class="send-vc_title">
                <span>Не нашли вакансию?</span>
                Наша компания постоянно развивается и растет, поэтому мы всегда ищем талантливых и целеустремленных
                людей. Если у Вас есть какие-то конкретные интересы или навыки, которые Вы хотели бы применить в
                работе, то отправляйте свое резюме, мы обязательно рассмотрим его
            </p>
            <button class="send-vc_btn-send green-btn">Отправить резюме</button>
        </div>

    </div>
</section>

<section class="container-core job-vacancy_about">
    <p class="job-vacancy_about_header">
        Группа компаний «АСМ» за <span>30 лет</span> успешной деятельности прочно заняла позицию одного из лидирующих в
        России
        предприятий мебельной и интерьерной отрасли.
    </p>
    <div class="job-vacancy_about_logo-wrapper">
        <div class="job-vacancy_about_logo">
            <img class="job-vacancy_about_logo_img" src="images/c5b2f36f8a524c5a0351404227315b1f.png" alt="">
            <p class="job-vacancy_about_logo_text">3.8</p>
        </div>
        <div class="job-vacancy_about_logo">
            <img class="job-vacancy_about_logo_img" src="images/5ae4f75e34a278130565bb0c0470afa0.png" alt="">
            <p class="job-vacancy_about_logo_text">4.8</p>
        </div>
    </div>
    <div class="job-vacancy_about_text-wrapper">
        <p class="job-vacancy_about_text-item">
            <span>13 фабрик входят в состав группы компаний</span>
            Собственное производство мягкой и корпусной мебели, матрасов и постельных принадлежностей, комплектующих и
            наполнителей
        </p>
        <p class="job-vacancy_about_text-item">
            <span>> 10 000 сотрудников</span>
            Федеральная сеть собственных фирменных салонов. –Уникальная и большая команда профессионалов
        </p>
        <p class="job-vacancy_about_text-item">
            <span>Крупная и надежная компания</span>
            Многое достигнуто, и мы продолжаем развиваться и не останавливаться на достигнутом. Мы предлагаем работу в
            крупной, надежной и стабильной компании.Приветствуем целеустремленных, амбициозных, позитивных и настроенных
            на результат соискаиелей. Результат работы профессионалов у нас всегда будет достойно оплачиваться. Для вас
            все возможности самореализации и достойного заработка.
        </p>
    </div>
</section>

<section class="container-core job-vacancy_contacts">
    <h3 class="job-vacancy_contacts_header">Контактная информация</h3>
    <div class="job-vacancy_contacts_item-wrapper">
        <div class="job-vacancy_contacts_item">
            <div class="job-vacancy_contacts_img-wrapper">
                <img class="job-vacancy_contacts_img" src="images/Rectangle 5292.png" alt="">
                <p class="job-vacancy_contacts_name"><span>HR-специалист</span> Наталья</p>
            </div>
            <div class="job-vacancy_contacts_data-wrapper">
                <p class="job-vacancy_contacts_data_item">Пн–пт с 9:00 –18:00
                    <a href="tel:+7 927 748 73 83">+7 927 748 73 83</a>
                </p>
                <p class="job-vacancy_contacts_data_item">Резюме отправлять на почту
                    <a href="mailto:HR@asm-modul.ru">HR@asm-modul.ru</a>
                </p>
            </div>
        </div>
        <div class="job-vacancy_contacts_item">
            <div class="job-vacancy_contacts_img-wrapper">
                <img class="job-vacancy_contacts_img" src="images/Rectangle 5292.png" alt="">
                <p class="job-vacancy_contacts_name"><span>HR-специалист</span> Наталья</p>
            </div>
            <div class="job-vacancy_contacts_data-wrapper">
                <p class="job-vacancy_contacts_data_item">Пн–пт с 9:00 –18:00
                    <a href="tel:+7 927 748 73 83">+7 927 748 73 83</a>
                </p>
                <p class="job-vacancy_contacts_data_item">Резюме отправлять на почту
                    <a href="mailto:HR@asm-modul.ru">HR@asm-modul.ru</a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/footer.php';
?>
