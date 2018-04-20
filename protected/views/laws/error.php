 <div class="mobile-visible mobile-laws">
        <div class="l-flex">
            <div class="l-flex-item active">
                <span>Закон</span>
            </div>
            <div class="l-flex-item">
                <span>Кодекс</span>
            </div>
        </div>

        <select>
            <option selected disabled>Статус</option>
            <option>Действующий</option>
            <option>Прекративший действие</option>
        </select>
        <select>
            <option selected disabled>Дата принятия</option>
            <option>2017 (67)</option>
            <option>2016 (110)</option>
            <option>2015 (159)</option>
            <option>2014 (111)</option>
            <option>2013 (92)</option>
            <option>2012 (105)</option>
            <option>2011 (146)</option>
            <option>2010 (146)</option>
            <option>2019 (146)</option>
        </select>
        <select>
            <option selected disabled>Сфера правоотношений</option>
            <option>Конституционный строй и основы государственного управления (28)</option>
            <option>Междунаpодные отношения Республики Казахстан (36)</option>
            <option>Финансы (10)</option>
            <option>Тpанспоpт (7)</option>
            <option>Судопpоизводство (7)</option>
            <option>Хозяйственная деятельность (4)</option>
            <option>Судопpоизводство (7)</option>
            <option>Хозяйственная деятельность (4)</option>
        </select>

    </div>


    <div class="doc laws-b">
        <div class="doc-left laws">
            <div class="laws-menu">
                <div class="result-block">
                    <p class="result-title"><?=$get_sphere?></p>
                    <!--<span class="result">Найденно 4 документа</span>-->
                </div>
                <div class="laws-menu-item">
                    <div class="laws-item first">
                        <p>Законодательство</p>
                        <div class="laws-border">
                            <div class="border-top"></div>
                            <div class="border-bottom"></div>
                            <div class="select">
                                <ul class="group1">
                                    <li><input  type="radio" name="group1" id="r1"><label data-choice="0"><a class="active" href="?ch=1&st=<?=$get_status?>&dt=<?=$get_date?>&sph=<?=$get_sphere?>">Закон</a></label></li>
                                    <li><input  type="radio" name="group1" id="r2"><label data-choice="1"><a href="?ch=2&st=<?=$get_status?>&dt=<?=$get_date?>&sph=<?=$get_sphere?>">Кодекс</a></label></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="laws-item">
                        <p>Статус</p>
                        <div class="laws-border">
                            <div class="border-top"></div>
                            <div class="border-bottom"></div>
                            <div class="select">
                                <ul class="group2">
                                    <li><input  type="radio" name="group2" id="r3"><label data-status="0"><a class="active" href="?ch=<?=$get_choice?>&st=0&dt=<?=$get_date?>&sph=<?=$get_sphere?>">Действующий</a></label></li>
                                    <li><input  type="radio" name="group2" id="r4"><label data-status="1"><a href="?ch=<?=$get_choice?>&st=1&dt=<?=$get_date?>&sph=<?=$get_sphere?>">Прекративший действие</a></label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="laws-menu">
                <div class="laws-menu-item">
                    <div class="laws-item first">
                        <p>Дата принятия</p>
                        <div class="laws-border second">
                            <div class="border-top"></div>
                            <div class="border-bottom"></div>
                            <div class="select">
                                <ul class="group3">
                                    <? foreach ($laws_year as $key=>$value) {?>
                                        <? if($key == 0 ){?>
                                            <li><input  type="radio" name="group3" id="r<?=(5+$key)?>"><label data-year="<?=$value->adoption_date?>" ><a class="active" href="?ch=<?=$get_choice?>&st=<?=$get_status?>&dt=<?=$value->adoption_date?>&sph=<?=$get_sphere?>"><?=$value->adoption_date?></a></label></li>
                                        <? }else {?>
                                            <li><input  type="radio" name="group3" id="r<?=(5+$key)?>"><label data-year="<?=$value->adoption_date?>" ><a href="?ch=<?=$get_choice?>&st=<?=$get_status?>&dt=<?=$value->adoption_date?>&sph=<?=$get_sphere?>"><?=$value->adoption_date?></a></label></li>
                                        <? } ?>

                                    <? } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="show-1">
                            <div class="show-img"><img src="/media/img/show.png"></div>
                            <div class="show-text">+ Развернуть</div>
                        </div>
                        <div class="hide-1">
                            <div class="show-img"><img src="/media/img/show.png"></div>
                            <div class="show-text">+ Свернуть</div>
                        </div>
                    </div>
                    <div class="laws-item">
                        <p>Сфера правоотношений</p>
                        <div class="laws-border second2">
                            <div class="border-top"></div>
                            <div class="border-bottom"></div>
                            <div class="select">
                                <ul class="group4">
                                    <? foreach ($laws_sphere as $key=>$value) { ?>
                                        <? if ($key == 0) { ?>
                                            <li><input type="radio" name="group4" id="r<?=(100+$key)?>"><label data-name="<?=$value->sphere?>"><a class="active" href="?ch=<?=$get_choice?>&st=<?=$get_status?>&dt=<?=$get_date?>&sph=<?=$value->sphere?>"><?=$value->sphere?></a></label></li>
                                        <? }else {?>
                                            <li><input type="radio" name="group4" id="r<?=(100+$key)?>"><label data-name="<?=$value->sphere?>"><a href="?ch=<?=$get_choice?>&st=<?=$get_status?>&dt=<?=$get_date?>&sph=<?=$value->sphere?>"><?=$value->sphere?></a></label></li>
                                        <? } ?>
                                    <? } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="show-2">
                            <div class="show-img"><img src="/media/img/show.png"></div>
                            <div class="show-text">+ Развернуть</div>
                        </div>
                        <div class="hide-2">
                            <div class="show-img"><img src="/media/img/show.png"></div>
                            <div class="show-text">+ Свернуть</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="laws-right">
            <div class="laws-right-con" id="laws-items-1">
                    <a class="laws-right-item">
                        <div class="laws-number"></div>
                        <ul>
                            <h2>По вашему запросу ничего не найдено.<br>Попробуйте другие ключевые слова.<br><br></h2>
                        </ul>
                    </a>
            </div>
            <div class="pagination">
                <ul>
                    <?php $this->widget('application.components.WPages',array('_pages'=>$pages)); ?>
                </ul>
            </div>
        </div>
    </div>
<script>
    var url = window.location.href;
    $(".select .group1 li").each(function () {
        var href = $(this).find("a").attr("href");
        console.log();
        if (decodeURI(url).indexOf(decodeURI(href)) + 1) {
            $(this).find("a").addClass('active');
        }else $(this).find("a").removeClass('active');
    });
    $(".select .group2 li").each(function () {
        var href = $(this).find("a").attr("href");
        console.log();
        if (decodeURI(url).indexOf(decodeURI(href)) + 1) {
            $(this).find("a").addClass('active');
        }else $(this).find("a").removeClass('active');
    });
    $(".select .group3 li").each(function () {
        var href = $(this).find("a").attr("href");
        console.log();
        if (decodeURI(url).indexOf(decodeURI(href)) + 1) {
            $(this).find("a").addClass('active');
        }else $(this).find("a").removeClass('active');
    });
    $(".select .group4 li").each(function () {
        var href = $(this).find("a").attr("href");
        console.log();
        if (decodeURI(url).indexOf(decodeURI(href)) + 1) {
            $(this).find("a").addClass('active');
        }else $(this).find("a").removeClass('active');
    });
    $(".select li a.active").parent('label').parent('li').find('input').css({'background-color':'#00b7f4'})

    /*$(".select li").click(function (e) {
        e.preventDefault();

    })*/
    /*var url = window.location.href;
    $(".menu-item").each(function () {
        var href = $(this).find("a").attr("href");
        if (url.indexOf(href) + 1) {
            $(this).addClass('active');
        }
    });*/
</script>
<!-- <script>
     $(document).ready(function () {
         var adoption_date = $(".group3 label.active").data('year');
         console.log("test");
         console.log(adoption_date);
         var status = $(".group2 label.active").data('status');
         var choice = $(".group1 label.active").data('choice');
         $.ajax({
             url: "/Laws/index",
             type: "post",
             data: {'adoption_date': adoption_date, 'status': status, 'choice': choice},
         })
     });
 </script>-->