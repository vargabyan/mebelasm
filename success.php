<?php
include __DIR__ . '/head.php';
?>

<section class="container-core">
    <div class="success-page">
        <div class="success-page_logo"></div>
        <h1 class="success-page_title">Заказ <span>№ 124 573</span> оформлен</h1>
        <p class="success-page_sub-title">С вами свяжется менеджер для уточнения деталей заказа.</p>
        <div class="success-page_grade-wrapper" data-success-page_grade-wrapper>
            <p class="success-page_grade_title" data-title-rate-the-service>Оцените сервис</p>
            <p class="success-page_grade_title" data-title-thank-you>спасибо, что помогаете нам стать лучше</p>
            <form action="" class="success-page_grade_items" data-success-page-grade-items>
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <label class="success-page_grade" data-success-page_grade>
                        <input type="checkbox" value="<?= $i ?>">
                    </label>
                <?php } ?>
            </form>
        </div>
        <a class="success-page_go-to-home-page" href="/">На главную страницу</a>
    </div>
</section>


<section class="help-us-become-better-modal-wrapper" data-help-us-become-better-modal-wrapper>
    <div class="help-us-become-better-modal">
        <div class="help-us-become-better-modal_btn-header-wrapper">
            <p class="help-us-become-better-modal_title">Помогите нам стать лучше!</p>
            <button class="help-us-become-better-modal_btn-close" data-help-us-become-better-modal_btn-close></button>
        </div>
        <form class="help-us-become-better-modal_from" action="">
                <div class="help-us-become-better-modal_label-wrapper">
                    <p>Что <span>ПОНРАВИЛОСЬ</span> при использовании сайта</p>
                    <label class="help-us-become-better-modal_label" for="">
                        <input type="text" placeholder="Например, простое оформление заказа">
                    </label>
                </div>
                <div class="help-us-become-better-modal_label-wrapper">
                    <p>Что <span>НЕ ПОНРАВИЛОСЬ</span> при использовании сайта</p>
                    <label class="help-us-become-better-modal_label" for="">
                        <input type="text" placeholder="Например, не понравился поиск">
                    </label>
                </div>
            <div class="help-us-become-better-modal_btn-footer-wrapper">
                <button class="help-us-become-better-modal_btn-footer" data-help-us-become-better-modal-btn-footer-close type="button">Пропустить</button>
                <input class="help-us-become-better-modal_btn-footer green-btn" data-help-us-become-better-modal-btn-footer-submit type="submit" value="Отправить оценку">
            </div>
        </form>
    </div>
</section>


<?php
include __DIR__ . '/footer.php';
?>
