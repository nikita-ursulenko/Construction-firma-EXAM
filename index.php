<?php get_header(); ?>
<?php 
/* Template Name: main */
?>
    <main>
        <section class="about" id="about" style="background-image: url('<?php echo B_IMG_DIR; ?>/bg_about.jpeg')">
            <div class="about_wrapper ">
                <div class="about_wrapper_content">
                    <h2 class="text_shadow">Скидка на ремонтно-отделочные услуги 20%!</h2>
                    <p>Оставь заявку</p>
                    <a href="#footer" class="text_shadow button_a button_hover">Заказать ремонт</a>
                </div>
            </div>
        </section>
        <section class="team container animated-block">
            <div class="team_flex">
                <img src="<?php echo B_IMG_DIR; ?>/team/coupon.png" alt="">
                <div>
                    <h3>Скидка 5% на все работы</h3>
                    <p>Скидка 5% на все виды работ при заказе через сайт</p>
                </div>
            </div>
            <div class="team_flex">
                <img src="<?php echo B_IMG_DIR; ?>/team/guarantee-certificate.png" alt="">
                <div>
                    <h3>Профессиональные мастера</h3>
                    <p>В нашем штате работают исключительно опытные и квалифицированные мастера</p>
                </div>
            </div>
            <div class="team_flex">
                <img src="<?php echo B_IMG_DIR; ?>/team/24-hours-support.png" alt="">
                <div>
                    <h3>Гарантия качества 100%</h3>
                    <p>Гарантия от производителя, имеются все сертификаты качества</p>
                </div>
            </div>
            <div class="team_flex">
                <img src="<?php echo B_IMG_DIR; ?>/team/tools.png" alt="">
                <div>
                    <h3>Возможен ремонт под ключ</h3>
                    <p>Все работы выполняются точно в срок, а порой даже раньше</p>
                </div>
            </div>

        </section>
        <section class="company" id="company">
            <div class="container animated-block">
                <img src="<?php echo B_IMG_DIR; ?>/company/family.jpeg" alt="">
                <div><br>
                    <h3>Наша компания уже ...</h3><br>
                    <p>Не секрет, что ремонт, если браться за него исключительно своими силами, дело крайне трудоемкое, затратное и зачастую длительное. Ремонт может долго отнимать Ваши время, нервы и деньги, а потому мы предлагаем Вам избавиться от подобной головной боли и обратиться к профессионалам.</p><br>
                    <p>Наша компания давно зарекомендовала себя как ответственный и надежный исполнитель ремонтно-строительных работ.</p><br>
                    <p>Мы предоставляем исчерпывающий комплекс услуг: ремонтные работы в квартире, офисе или загородном доме, капитальный или косметический ремонт - наши специалисты готовы выполнить работы любой сложности.</p>
                </div>
            </div>
        </section>
        <section class="order container animated-block">
            <h2>Как проходит работа</h2>
            <div class="order_wrapper">
                <div class="order_wrapper_item">
                    <div class="order_wrapper_item_case">
                        <h3>Вы оставляете заявку</h3>
                        <p>Вы оставляете заявку на нашем сайте или связываетесь любым удобным для вас способом.</p>
                    </div>
                    <div class="order_number">
                        <span><p>1</p></span>
                    </div>
                </div>
                <div class="order_wrapper_item">
                    <div class="order_wrapper_item_case grid_revert_text">
                        <h3>Уточняем детали</h3>
                        <p>Практическое домашнее задание с проверкой и обратной связью</p>
                    </div>
                    <div class="order_number grid_revert_number">
                        <span><p>2</p></span>
                    </div>
                </div>
                <div class="order_wrapper_item">
                    <div class="order_wrapper_item_case">
                        <h3>Заключение договора</h3>
                        <p>После заключения договора вы вносите предоплату в размере от 50% до 70%.</p>
                    </div>
                    <div class="order_number">
                        <span><p>3</p></span>
                    </div>
                </div>
                <div class="order_wrapper_item">
                    <div class="order_wrapper_item_case grid_revert_text">
                        <h3>Сдача работ</h3>
                        <p>Принимаете выполненные работы по договору и оплачиваете остаток от общей суммы.</p>
                    </div>
                    <div class="order_number grid_revert_number">
                        <span class="last_child_span"><p>4</p></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="price" id="price">
            <div class="price_text animated-block">
                <h3>Наши тарифы</h3>
                <p>Поможем в отделке квартир быстро и недорого</p>
            </div>
            <div class="wrapper container animated-block">
                <div class="price_case">
                    <div class="price_case_img">
                        <div class="price_case_img_item">
                            <img src="<?php echo B_IMG_DIR; ?>/price/spaklevka.jpeg" alt="">
                        </div>
                        <div class="price_case_img_text">
                            <h4>Косметический ремонт</h4>
                            <p>Демонтаж отделочных материалов, окон и дверей, ремонт полов и напольных покрытий (вплоть до полной замены)</p>
                        </div>
                    </div>
                    <div class="price_case_inner">
                        <div class="price_case_inner_other">
                            <p class="price_item">Стоимость услуги<br><span>от 100€</span></p>
                            <a href="#footer" class="button button_a button_hover">Заказать услугу</a>
                        </div>
                    </div>
                </div>
                <div class="price_case">
                    <div class="price_case_img">
                        <div class="price_case_img_item">
                            <img src="<?php echo B_IMG_DIR; ?>/price/oboi.jpg" alt="">
                        </div>
                        <div class="price_case_img_text">
                            <h4>Капитальный ремонт</h4>
                             <p>От операций по демонтажу напольных покрытий и потолков до установки электропроводки и сантехники.</p>
                        </div>
                    </div>
                    <div class="price_case_inner">
                         <div class="price_case_inner_other">
                             <p class="price_item">Стоимость услуги<br><span>от 100€</span></p>
                             <a href="#footer" class="button_a button_hover">Заказать услугу</a>
                         </div>
                     </div>   
                </div>
                <div class="price_case">
                    <div class="price_case_img">
                        <div class="price_case_img_item">
                            <img src="<?php echo B_IMG_DIR; ?>/price/all_remont.jpeg" alt="">
                        </div>
                        <div class="price_case_img_text">
                            <h4>Комплексный ремонт</h4>
                            <p>Выравнивание стен, настил покрытий, монтаж потолков и многое другое.</p>
                        </div>
                    </div>
                    <div class="price_case_inner">
                        <div class="price_case_inner_other">
                            <p class="price_item">Стоимость услуги<br><span>от 100€</span></p>
                            <a href="#footer" class="button_a button_hover">Заказать услугу</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="slider animated-block" id="galery">
            <div class="slider_text">
                <h3>В нашей компании</h3>
                <p>лучшие условия для клиентов</p>
            </div>
            <div class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                      <ul class="splide__list">
                          <li class="splide__slide"><img src="<?php echo B_IMG_DIR; ?>/slide/slide1.jpeg" alt=""></li>
                          <li class="splide__slide"><img src="<?php echo B_IMG_DIR; ?>/slide/slide2.jpeg" alt=""></li>
                          <li class="splide__slide"><img src="<?php echo B_IMG_DIR; ?>/slide/slide3.jpeg" alt=""></li>
                          <li class="splide__slide"><img src="<?php echo B_IMG_DIR; ?>/slide/slide4.jpeg" alt=""></li>
                          <li class="splide__slide"><img src="<?php echo B_IMG_DIR; ?>/slide/slide5.jpeg" alt=""></li>
                          <li class="splide__slide"><img src="<?php echo B_IMG_DIR; ?>/slide/slide6.jpeg" alt=""></li>
                      </ul>
                </div>
            </div>
        </section>
        <section class="call_back animated-block">
            <div class="call_back_wrapper">
                <div class="call_text">
                    <div class="call_text_img">
                        <div class="call_text_img_content" style="background-image: url('<?php echo B_IMG_DIR; ?>/phone-call.png');">
                        </div>
                    </div>
                    <div class="call_text_content">
                        <h3>
                            Хотите мы перезвоним вам за 60 секунд и ответим на вопросы?
                        </h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews" id="reviews">
            <h3 class="animated-block">
                Отзывы наших клиентов
            </h3>
            <div class="reviews_wrapper animated-block">
                <div class="reviews_wrapper_item">
                    <h4>Виктор Александрович</h4>
                    <span>Ремонт дома</span>
                    <p>Давно хотелось обустроить свой дом, сделать его уютнее. Мастера компании справились с этим более чем на отлично - просто фантастически. Отдельное спасибо дизайнеру Ольге - очень удачно подобрали материал и цветовое решение для квартиры.</p>
                </div>
                <div class="reviews_wrapper_item">
                    <h4>Виктор Александрович</h4>
                    <span>Ремонт дома</span>
                    <p>Большое спасибо мастерам компании за невероятно качественно выполненный ремонт - ни единой претензии. Все выполнили в срок. Если честно, даже не ожидала таких результатов. Огромное спасибо!</p>
                </div>
                <div class="reviews_wrapper_item">
                    <h4>Виктор Александрович</h4>
                    <span>Ремонт дома</span>
                    <p>Хотелось бы поблагодарить команду за столь ответственное отношение к работе - все сделали даже раньше назначенного срока, учли все пожелания, и по семейному бюджету ремонт в итоге ударил не так сильно, как если бы мы решились делать его сами. Большое спасибо! Очень довольны!</p>
                </div>
                <div class="reviews_wrapper_item">
                    <h4>Виктор Александрович</h4>
                    <span>Ремонт дома</span>
                    <p>Все, что было указано в договоре, выполнено в срок, поэтому могу поставить вашей компании "отлично" и советовать другим обращаться только к вам. Приятно удивлен уровнем ваших мастеров и их дисциплиной. Спасибо вам большое!</p>
                </div>
            </div>
        </section>
    </main>
 <?php get_footer(); ?>