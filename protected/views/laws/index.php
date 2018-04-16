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
                    <?/*$result = $_GET['sphere']*/?>
                    <?=$get_date?>
                    <p class="result-title"><?=$result?></p>
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
                                    <li><input  type="radio" name="group1" id="r1"><label data-choice="0" for="r1" class="active">Закон</label></li>
                                    <li><input  type="radio" name="group1" id="r2"><label data-choice="1" for="r2">Кодекс</label></li>
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
                                    <li><input  type="radio" name="group2" id="r3"><label data-status="0" for="r3" class="active">Действующий</label></li>
                                    <li><input  type="radio" name="group2" id="r4"><label data-status="1" for="r4">Прекративший действие</label></li>
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
                                    <? foreach ($laws_year as $key=>$value) {
                                        if($key == 0){ ?>
                                            <li><input  type="radio" name="group3" id="r<?=(5+$key)?>"><label data-year="<?=$value->adoption_date?>" class="active" for="r<?=(5+$key)?>"><a href="?year=<?=$value->adoption_date?>"><?=$value->adoption_date?></a></label></li>
                                        <? }else { ?>
                                            <li><input  type="radio" name="group3" id="r<?=(5+$key)?>"><label data-year="<?=$value->adoption_date?>" for="r<?=(5+$key)?>"><a href="?year=<?=$value->adoption_date?>"><?=$value->adoption_date?></a></label></li>
                                        <? }
                                    } ?>
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
                                            <li><input type="radio" name="group4" id="r<?=(100+$key)?>"><label data-name="<?=$value->sphere?>" class="active" for="r<?=(100+$key)?>"><a href="?sphere=<?=$value->sphere?>"><?=$value->sphere?></a></label></li>
                                        <? }else { ?>
                                            <li><input  type="radio" name="group4" id="r<?=(100+$key)?>"><label data-name="<?=$value->sphere?>" for="r<?=(100+$key)?>"><a href="?sphere=<?=$value->sphere?>"><?=$value->sphere?></a></label></li>
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
                <? foreach ($laws as $key=>$value){ ?>
                    <a href="laws/law<?=$value->id?>" class="laws-right-item">
                        <div class="laws-number"><?=$key+1?><img src="/media/img/after2.png"></div>
                        <ul>
                            <li class="laws-title"><?=$value->law_title?></li>
                            <!--<li class="laws-text">Кодекс Республики Казахстан от 5 июля 2014 года № 234-V ЗРК.</li>-->
                        </ul>
                    </a>
                <? } ?>
            </div>
            <div class="pagination">
                <ul>
                    <?php $this->widget('application.components.WPages',array('_pages'=>$pages)); ?>
                </ul>
            </div>
        </div>
    </div>
<!--
 <script>
     $(document).ready(function () {
         var adoption_date = $(".group3 label.active").data('year');
         var status = $(".group2 label.active").data('status');
         var choice = $(".group1 label.active").data('choice');
         $.ajax({
             url: "/Laws/getlaws",
             type: "post",
             data: {'adoption_date': adoption_date, 'status': status, 'choice': choice},
             success:function(data) {
                 console.log(data);
             }
         })
     });
 </script>-->