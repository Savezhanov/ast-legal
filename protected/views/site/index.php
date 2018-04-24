<p class="center-2">Интересы общества – наши интересы!</p>
<div class="about2 ind shadow">
    <div class="about-box flex">
        <div class="box-text">
            <span class="title mobile-none">Сфера</span><br><span class="title not mobile-none">нашей деятельности</span>
            <span class="title mobile-visible">Сфера нашей деятельности</span>
            <p class="small-margin mobile-none">Мы оказываем полный спектр юридических услуг для граждан и коммерческих предприятий.</p>
        </div>
    </div>
    <div class="i-call header-bottom-right">
        <div class="bottom-right-form">
            <div class="form-text2">
                <p class="upper3">Закажите звонок<br> и получите помощь специалистов, </p>
                <span class="italic">которые знают правоохранительную, фискальную и судебную практику!</span>
            </div>
            <form action="" method="">
                <div class="mobile-visible close"></div>
                <div class="result2">
                    <p class="bold">Спасибо, Ваша заявка принята!</p>
                    <p>Ожидайте звонка</p>
                </div>
                <input type="text" name="name" placeholder="Имя">
                <input type="text" name="phone" class="phone_number" placeholder="Телефон">
                <img src="/media/img/line2-2.png" class="line2 animate4">
                <button type="submit" class="animate5 btn-5"> Заказать звонок</button>
            </form>
            <a class="mobile-visible vap m-js2">ЗАКАЗАТЬ ЗВОНОК</a>
        </div>
    </div>
    <div class="line-3">
        <img src="/media/img/line3.png">
    </div>
    <div class="m-margin">
        
        <? foreach ($financecategory as $finance_key => $finance_value) { ?>  
            <? $number = $finance_key+1; ?>
            <div class="sfera a<?=$number?>">
                <a href="finance/<?=$finance_value->url_text?>" class="sfera-img parallax">
                    <?if( ($number) == 1){ ?>
                    <img src="/media/img/icon-1.png">
                    <? } ?>
                    <?if( ($number) == 2){ ?>
                    <img src="/media/img/icon-3.png">
                    <? } ?>
                    <?if( ($number) == 3){ ?>
                    <img src="/media/img/icon-2.png">
                    <? } ?>
                    <?if( ($number) == 4){ ?>
                    <img src="/media/img/icon-4.png">
                    <? } ?>
                    <?if( ($number) == 5){ ?>
                    <img src="/media/img/icon-korean.png">                    
                    <? } ?>
                </a>
            <div class="sfera-text">
                <p class="number">0<?=$finance_value->serial_number?></p>
                <p class="sfera-title"><?=$finance_value->name_text?></p>
            </div>
            </div>
        <? } ?>

        <!-- <div class="sfera a2">
            <a href="finance" class="sfera-img parallax2">
                <img src="/media/img/icon-3.png">
            </a>
            <div class="sfera-text">
                <p class="number">02</p>
                <p>Лицензирование</p>
            </div>
        </div>

        <div class="sfera a3">
            <a href="finance" class="sfera-img parallax3">
                <img src="/media/img/icon-2.png">
            </a>
            <div class="sfera-text">
                <p class="number">03</p>
                <p>Собственность</p>
            </div>
        </div>

        <div class="sfera a6">
            <a href="finance" class="sfera-img parallax2">
                <img src="/media/img/icon-6.png">
            </a>
            <div class="sfera-text">
                <p class="number mobile-none">06</p>
                <p class="mobile-visible number">04</p>
                <p>Финансы <br class="mobile-visible"> и кредиты</p>
            </div>
        </div>

        <div class="sfera a4">
            <a href="finance" class="sfera-img parallax2">
                <img src="/media/img/icon-4.png">
            </a>
            <div class="sfera-text">
                <p class="number mobile-none">04</p>
                <p class="mobile-visible number">05</p>
                <p>Судебные решения <br>и приговоры</p>
            </div>
        </div>

        <div class="sfera a7">
            <a href="finance" class="sfera-img parallax">
                <img src="/media/img/icon-7.png">
            </a>
            <div class="sfera-text">
                <p class="number mobile-none">07</p>
                <p class="mobile-visible number">06</p>
                <p>Гражданское право</p>
            </div>
        </div>

        <div class="sfera a5">
            <a href="finance" class="sfera-img parallax">
                <img src="/media/img/icon-5.png">
            </a>
            <div class="sfera-text">
                <p class="number mobile-none">05</p>
                <p class="mobile-visible number">07</p>
                <p>Административные <br>и уголовные дела</p>
            </div>
        </div>
 -->

    </div>
</div>

<div class="about index3 shadow">
    <div class="about-box flex">
        <div class="box-text">
            <span class="title">О нас</span>
            <p class="small-margin mobile-none">Компания AST -Legal специализируется на задачах различной сложности, повышает правовую грамотность и налаживает диалог граждан с государством!</p>
            <div class="box-border">
                <div class="border-top"></div>
                <div class="border-bottom"></div>
                <div class="box-border-text">
                    <p>Миссия компании</p>
                    <ul>
                        <li>Отстаиваем интересы своих клиентов и помогаем разобраться в законах, говоря на понятном, а не на юридическом языке. </li>
                        <li>Консультируем и сопровождаем в ходе всего процесса – для вас работают высококлассные юристы.</li>
                        <li>Помогаем увидеть причины возникновения проблем и избежать их в будущем.</li>
                        <li>Даем профессиональные ответы на интересующие правовые вопросы. </li>
                    </ul>
                </div>
            </div>
            <div class="dalee">Далее...</div>
            <div class="dalee-text"><p class="small-margin">Компания AST -Legal специализируется на задачах различной сложности, повышает правовую грамотность и налаживает диалог граждан с государством!</p>
            </div>
        </div>
        <div class="box-form">
            <div class="mobile-help2">
                <div class="call">
                    <img src="/media/img/line4.png" class="line3 animate6">
                    <img src="/media/img/phone.png" class="phone2 animate7">
                </div>
                <div class="bottom-call">
                    <p class="margin mobile-none">Наш опыт позволяет вести продуктивный диалог с законом, государством и бизнесом. </p>
                    <span class="line-ht"><i>Доверяйте профессионалам – звоните по телефону </i></span>
                    <div class="phone-box">
                        <a href="tel: +7 (727) 327 72 04">
                            <div class="mobile-help">
                                <img src="/media/img/phone.png" class="mobile-visible"><span>+7 (727) 327 72 04</span>
                            </div>
                        </a>
                    </div>
                    <p>и мы поможем!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="preim">
    <div class="preim">
        <div class="preim-box">
            <div class="preim-box-item">
                <p class="preim-title">Преимущества</p>
                <div class="preim-flex">
                    <div class="preim-border3"></div>
                    <div class="preim-flex-item">
                        <img src="/media/img/arr.png" class="arr">
                        <div class="preim-border2"></div>
                        <div class="preim-border"></div>
                        <div class="preim-img">
                            <img src="/media/img/pr1.png" class="p1">
                        </div>
                        <div class="preim-text">
                            <div class="mobile-visible m-border"></div>
                            <div class="mobile-visible m-border2"></div>
                            <span>
                                Полный комплекс юридических услуг: от консультации до результата
                            </span>
                        </div>
                    </div>
                    <div class="preim-flex-item">
                        <div class="preim-border"></div>
                        <div class="preim-img">
                            <img src="/media/img/pr2.png" class="p2">
                        </div>
                        <div class="preim-text">
                            <div class="mobile-visible m-border"></div>
                            <div class="mobile-visible m-border2"></div>
                            <span>
                          Лучшие специалисты в своей сфере
                        </span>
                        </div>
                    </div>
                    <div class="preim-flex-item">
                        <div class="preim-border"></div>
                        <div class="preim-img">
                            <img src="/media/img/pr3.png" class="p3">
                        </div>
                        <div class="preim-text">
                            <div class="mobile-visible m-border"></div>
                            <div class="mobile-visible m-border2"></div>
                            <span>
                            Выгодное предложение индивидуально для каждого клиента
                        </span>
                        </div>
                    </div>
                    <div class="preim-flex-item">
                        <div class="preim-img">
                            <img src="/media/img/pr4.png" class="p4">
                        </div>
                        <div class="preim-text">
                            <div class="mobile-visible m-border"></div>
                            <div class="mobile-visible m-border2"></div>
                            <span>
                            Мы открыты для всех и готовы делиться своими знаниями
                        </span>
                        </div>
                    </div>
                    <div class="preim-flex-item2">
                        <div class="preim-border4"></div>
                        <img src="/media/img/pr5.jpg">
                    </div>
                </div>
            </div>
            <div class="preim-box-item">
                <p class="preim-title no mobile-none" id="preim-reviews">Отзывы наших<?=$review?></p><br>
                <p class="preim-title no2 mobile-none">клиентов</p>
                <button type="submit" class="button-review">Оставить отзыв</button>
                <p class="preim-title mobile-visible inline">Отзывы наших клиентов</p>
                <div class="reviews">
                    <?foreach ( $reviews as $key => $value ){?>
                        <? $img = json_decode($value->image,true);?>
                        <div class="review news-block">
                            <div class="news-img">
                                <img src="/upload/Reviews/full/<?=$img[0]?>">
                                <p class="name-r"><?=$value->name_text?>, <?=$value->age?> лет</p>
                            </div>
                            <div class="news-body">
                                <span><?=$value->short_description?></span>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
            <div id="review-modal">
                <div class="close-review"></div>
                <div class="bottom-right-form">
                    <div class="review_result3">
                        <p class="bold">Спасибо, Ваш отзыв принят!</p>
                        <p>После проверки модератором, ваш отзыв появиться на сайте</p>
                    </div>
                    <form id="review" class="form" >
                        <input type="text"  id="review_name" name="review_name" placeholder="Имя" required>
                        <input type="number" min="1" id="review_age" name="review_age"  placeholder="Возраст" required>
                        <textarea placeholder="Ваш отзыв" id="review" name="review"></textarea>
                        <input type="file" name="Reviews[image][0]" id="image" />
                        <button type="submit"> Оставить отзыв</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script> // from index
    if ($(window).width() > 950) {
        $(document).ready(function () {
            setTimeout(function () {
                $('.animate1').addClass('height');
            }, 1000);
            setTimeout(function () {
                $('.animate2').addClass('height');
            }, 2000);
        });
    }
</script>
