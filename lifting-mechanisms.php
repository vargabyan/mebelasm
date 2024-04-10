<?php
include __DIR__ . '/head.php';
?>


<section class="container-core work-with-business" data-page-type="lifting-mechanisms">
    <div class="work-with-business_item">
        <?php
        include __DIR__ . '/breadcrumb.php';
        breadcrumb([['url' => '', 'name' => 'Для бизнеса']]);
        ?>
        <h1 class="work-with-business_header">Работаем с бизнесом</h1>
        <p class="work-with-business_sub-title">Поставляем фабричную мебель со скидкой до 30%</p>
        <a class="work-with-business_link" href="">
            <p class="work-with-business_text">
                Мебель для ресторанов и кафе
                <span>Со скидкой до 40%</span>
            </p>
            <img class="work-with-business_img" src="images/07176f4853cb21ab94de0cdfa1410bdf.jpeg" alt="">
        </a>
    </div>
    <div class="work-with-business_item">
        <a class="work-with-business_link" href="">
            <p class="work-with-business_text">
                Хостелы и отели
                <span>Со скидкой до 40%</span>
            </p>
            <img class="work-with-business_img" src="images/dfb85e788711b6a408aaa624ab7837dc.jpeg" alt="">
        </a>
    </div>
    <div class="work-with-business_item">
        <a class="work-with-business_link" href="">
            <p class="work-with-business_text">
                Офисы и коворки
                <span>Со скидкой до 40%</span>
            </p>
            <img class="work-with-business_img" src="images/92cadcd773070ec0fb23f162d65781e1.jpeg" alt="">
        </a>
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
