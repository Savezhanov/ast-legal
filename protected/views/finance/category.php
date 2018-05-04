<div class="finance">
    <div class="service-box">

        <?foreach ($financemenu as $key=>$value){?>
            <?$img = json_decode($value->image,true);?>
                <div class="service-box-item" data-menu="<?=$value->id?>" data-id="<?=($key+1)?>">
                    <div class="service-arr"></div>
                    <div class="service-box-body">
                        <div class="service-box-top">
                            <div class="box-top-img">
                                <!--<img src="/upload/Financemenu/full/<?/*=$img[0]*/?>">-->
                                <img src="/media/img/services/33.png">
                            </div>
                            <div class="box-top-text">
                                <span>0<?=($key+1)?></span>
                            </div>
                        </div>
                        <div class="service-box-bottom">
                            <span><?=$value->name_text?></span>
                        </div>
                    </div>
                </div>
        <? } ?>

        <?foreach ($finance as $key=>$value) {?>
            <div class="mobile-dropdown" id="mobile-dropdown-id-<?=($key+1)?>">
                    <div class="mobile-dropdown-con">
                        <ul class="finance-id">
                            <a href="#" data-id="1"><li>Консультации по финансовым вопросам</li></a>
                            <a href="#" data-id="1"><li>Банкротство физических и юридических лиц</li></a>
                            <a href="#" data-id="1"><li>Юридическое сопровождение компании на аутсорсинге</li></a>
                        </ul>
                    </div>
            </div>
        <? } ?>

        <div class="mobile-dropdown" id="mobile-dropdown-id-2">
            <div class="mobile-dropdown-con">
                <ul class="finance-id">
                    <a href="#" data-id="1"><li>Взыскание долгов и неустоек</li></a>
                    <a href="#" data-id="1"><li>Аудит финансовой деятельности</li></a>
                    <a href="#" data-id="1"><li>Представление интересов бизнеса в суде</li></a>
                    <a href="#" data-id="1"><li>Консультации по финансовым вопросам</li></a>
                    <a href="#" data-id="1"><li>Банкротство физических и юридических лиц</li></a>
                    <a href="#" data-id="1"><li>Юридическое сопровождение компании на аутсорсинге</li></a>
                </ul>
            </div>
        </div>


        <div class="mobile-dropdown" id="mobile-dropdown-id-3">
            <div class="mobile-dropdown-con">
                <ul class="finance-id">
                    <a href="#" data-id="1"><li>Взыскание долгов и неустоек</li></a>
                    <a href="#" data-id="1"><li>Аудит финансовой деятельности</li></a>
                    <a href="#" data-id="1"><li>Представление интересов бизнеса в суде</li></a>
                    <a href="#" data-id="1"><li>Консультации по финансовым вопросам</li></a>
                    <a href="#" data-id="1"><li>Банкротство физических и юридических лиц</li></a>
                    <a href="#" data-id="1"><li>Юридическое сопровождение компании на аутсорсинге</li></a>
                </ul>
            </div>
        </div>



        <div class="mobile-dropdown" id="mobile-dropdown-id-4">
            <div class="mobile-dropdown-con">
                <ul class="finance-id">
                    <a href="#" data-id="1"><li>Взыскание долгов и неустоек</li></a>
                    <a href="#" data-id="1"><li>Аудит финансовой деятельности</li></a>
                    <a href="#" data-id="1"><li>Представление интересов бизнеса в суде</li></a>
                    <a href="#" data-id="1"><li>Консультации по финансовым вопросам</li></a>
                    <a href="#" data-id="1"><li>Банкротство физических и юридических лиц</li></a>
                    <a href="#" data-id="1"><li>Юридическое сопровождение компании на аутсорсинге</li></a>
                </ul>
            </div>
        </div>


        <div class="mobile-dropdown" id="mobile-dropdown-id-5">
            <div class="mobile-dropdown-con">
                <ul class="finance-id">
                    <a href="#" data-id="1"><li>Взыскание долгов и неустоек</li></a>
                    <a href="#" data-id="1"><li>Аудит финансовой деятельности</li></a>
                    <a href="#" data-id="1"><li>Представление интересов бизнеса в суде</li></a>
                    <a href="#" data-id="1"><li>Консультации по финансовым вопросам</li></a>
                    <a href="#" data-id="1"><li>Банкротство физических и юридических лиц</li></a>
                    <a href="#" data-id="1"><li>Юридическое сопровождение компании на аутсорсинге</li></a>
                </ul>
            </div>
        </div>



        <div class="mobile-dropdown" id="mobile-dropdown-id-6">
            <div class="mobile-dropdown-con">
                <ul class="finance-id">
                    <a href="#" data-id="1"><li>Взыскание долгов и неустоек</li></a>
                    <a href="#" data-id="1"><li>Аудит финансовой деятельности</li></a>
                    <a href="#" data-id="1"><li>Представление интересов бизнеса в суде</li></a>
                    <a href="#" data-id="1"><li>Консультации по финансовым вопросам</li></a>
                    <a href="#" data-id="1"><li>Банкротство физических и юридических лиц</li></a>
                    <a href="#" data-id="1"><li>Юридическое сопровождение компании на аутсорсинге</li></a>
                </ul>
            </div>
        </div>


        <div class="mobile-dropdown" id="mobile-dropdown-id-7">
            <div class="mobile-dropdown-con">
                <ul class="finance-id">
                    <a href="#" data-id="1"><li>Взыскание долгов и неустоек</li></a>
                    <a href="#" data-id="1"><li>Аудит финансовой деятельности</li></a>
                    <a href="#" data-id="1"><li>Представление интересов бизнеса в суде</li></a>
                    <a href="#" data-id="1"><li>Консультации по финансовым вопросам</li></a>
                    <a href="#" data-id="1"><li>Банкротство физических и юридических лиц</li></a>
                    <a href="#" data-id="1"><li>Юридическое сопровождение компании на аутсорсинге</li></a>
                </ul>
            </div>
        </div>

    </div>
</div>

<div class="doc" id="service-id-1">
    <div class="doc-left finance-left">
        <div class="result-block">
            <span class="title">Финансовое</span><br>
            <span class="title not">законодательство</span>
            <span class="result">Сфера, в которой самому разобраться сложно. Воспользуйтесь нашими услугами и получите профессиональную помощь!</span>
        </div>
        <div class="doc-menu">
            <div class="border-top"></div>
            <div class="border-bottom"></div>
            <div class="doc-menu-con finance-id">
                <ul class="finance-id">
                    <? foreach ($finance as $key=>$value) {?>
                        <a <?if( $key==0){?>class="active" <?}?> href="#" data-finance="<?=$value->id?>"  data-id="<?=($key+1)?>"><li><?=$value->name_text?></li></a>
                    <? } ?>
                </ul>
            </div>
        </div>
    </div>


    <div class="finance-right" id="finance-1">
        <div class="mobile-visible back">
            <img src="/media/img/m-arr.png">
        </div>
        <img src="/media/img/after2.png" class="finance-right-img">
        <div class="finance-right-item">
            <?=$finance[0]->description?>
        </div>
        <div class="pagination">
            <div class="n-news-button">
                <div class="animated-height"></div>
                <a href="#">Читать дальше</a>
            </div>
        </div>
    </div>
</div>

<p class="preim-title no mobile-none" style="margin-left:10%;">НОРМАТИВНАЯ</p><br>
<p class="preim-title no2 mobile-none" style="margin-left:10%;">БАЗА</p>
<p class="preim-title mobile-visible inline">НОРМАТИВНАЯ БАЗА</p>
<div class=" static">
    <table align="left" class="table-narrow-first" style="table-layout: auto">
        <tbody>
            <tr>
                <td>№</td>
                <td><strong>Наименование документа</strong></td>
                <td><strong>Дата принятия</strong></td>
                <td><strong><strong>Источник</strong></strong></td>
            </tr>
            <? foreach ($legislation as $key => $value){?>
            <tr>
                <td><?=$value->column_number?></td>
                <td><?=$value->name?></td>
                <td><?=$value->date?></td>
                <td><a href="<?=$_SERVER['REQUEST_URI']?>/legislation<?=$value->id?>" target="_blank">Подробнее</a></td>
            </tr>
            <? } ?>
        </tbody>
    </table>
    <p>&nbsp;</p>
</div>

    <p class="preim-title no mobile-none">БРОШЮРЫ И</p><br>
    <p class="preim-title no2 mobile-none">ИНФОГРАФИКА</p>
    <p class="preim-title mobile-visible inline">БРОШЮРЫ И ИНФОГРАФИКА</p>
    <div class="slider-box2">
        <?foreach ($booklet as $key => $value ) { ?>
            <div class="booklet-items">
                <a href="<?=$value->src_link?>" target="_blank" class="material_docs">
                    <div class="flex">
                        <div>
                            <img src="/media/img/booklet/ic_jpg.svg" alt="">
                        </div>
                        <div class="material__text">
                            <h2><?=$value->name?></h2>
                            <span><?=$value->date?></span>
                        </div>
                    </div>
                    <div class="material__button">Загрузить</div>
                    <div style="clear: both"></div>
                </a>
            </div>
        <? } ?>
    </div>


<script type="text/javascript" src="/media/js/owl-slider.js"></script>

<!--<div class="row row_16">
    <div class="flex">
        <?/*foreach ($booklet as $key => $value ) { */?>
        <div>
            <a href="/storage/46/4660cac0848ecb308bd94e5e884c0dc2.jpg" download="Инфографика по химической промышленности .jpg" target="_blank" class="material_docs">
                <div class="flex">
                    <div>
                        <img src="/media/img/booklet/ic_jpg.svg" alt="">
                    </div>
                    <div class="material__text">
                        <h2>Инфографика по химической промышленности </h2>
                        <span>20 декабря</span>
                    </div>
                </div>
                <div class="material__button">Загрузить</div>
                <div style="clear: both"></div>
            </a>
        </div>
        <?/* } */?>
        <a href="/storage/46/4660cac0848ecb308bd94e5e884c0dc2.jpg" download="Инфографика по химической промышленности .jpg" target="_blank" class="material_docs">
            <div class="flex">
                <div>
                    <img src="/media/img/booklet/ic_jpg.svg" alt="">
                </div>
                <div class="material__text">
                    <h2>Инфографика по химической промышленности </h2>
                    <span>20 декабря</span>
                </div>
            </div>
            <div class="material__button">Загрузить</div>
            <div style="clear: both"></div>
        </a>
        <a href="/storage/46/4660cac0848ecb308bd94e5e884c0dc2.jpg" download="Инфографика по химической промышленности .jpg" target="_blank" class="material_docs">
            <div class="flex">
                <div>
                    <img src="/media/img/booklet/ic_jpg.svg" alt="">
                </div>
                <div class="material__text">
                    <h2>Инфографика по химической промышленности </h2>
                    <span>20 декабря</span>
                </div>
            </div>
            <div class="material__button">Загрузить</div>
            <div style="clear: both"></div>
        </a>
        <a href="/storage/46/4660cac0848ecb308bd94e5e884c0dc2.jpg" download="Инфографика по химической промышленности .jpg" target="_blank" class="material_docs">
            <div class="flex">
                <div>
                    <img src="/media/img/booklet/ic_jpg.svg" alt="">
                </div>
                <div class="material__text">
                    <h2>Инфографика по химической промышленности </h2>
                    <span>20 декабря</span>
                </div>
            </div>
            <div class="material__button">Загрузить</div>
            <div style="clear: both"></div>
        </a>
    </div>
</div>
-->
<script>
    /*$('body').on('click','.service-box-item',function(){*/
    //menu clicked
    $('.service-box-item').live("click",function () {
        var menu = $(this).data('menu');
        $.ajax({
            url: "/Finance/getservices",
            type: "post",
            data: {'menu':menu},
            success:function(data){
                $('.finance-id').html(data);
            }
        })
    });
    $('.service-box-item').live("click",function () {
        var menu = $(this).data('menu');
        $.ajax({
            url: "/Finance/getservicestext",
            type: "post",
            data: {'menu':menu},
            success:function(data){
                $('.finance-right-item').html(data);
                console.log(data);
            }
        })
    });


    /*$('body').on('click','.finance-id a',function(){*/
    $('.finance-id a').live("click",function () {
        var finance = $(this).data('finance');
        $.ajax({
            url: "/Finance/gettext",
            type: "post",
            data: {'finance':finance},
            success:function(data){
                $('.finance-right-item').html(data);
                console.log(data);
            }
        })
    });

    $('body').on('click','#pagin',function(){
        var id = $(this).data('id');
        var finance = $('.finance-id a.active').data('finance');

        $.ajax({
            url: "/Finance/gettext",
            type: "post",
            data: {'id':id, 'finance':finance},
            success:function(data){
                $('.finance-right-item').html(data);
            }
        })
    });
</script>


<div class="state">
    <div class="state-left">
        <div class="state-left-container">
            <?foreach ($articles as $key=>$value) { ?>
                <?$img = json_decode($value->image,true)?>
                    <a href="/articles/<?=$value->url_text?>" class="state-item">
                        <div class="state-item-img">
                            <img src="/upload/Articles/full/<?=$img[0]?>">
                        </div>
                        <div class="state-item-text">
                            <span><?=$value->name_text?></span>
                        </div>
                    </a>
            <? } ?>
        </div>
    </div>

    <div class="state-right">
        <div class="state-right-title">
            <img src="/media/img/blue.png" class="blue-img animate6">
            <img src="/media/img/state.png" class="pen animate7">
            <p>Полезные статьи</p>
        </div>
        <div class="bottom-right-form">
            <form action="" method="">
                <p class="upper3">Не нашли решение своей проблемы? </p>
                <span class="italic">Оставьте заявку, и мы придумаем, как помочь!</span>
                <input type="text" name="name" placeholder="Имя">
                <input type="text" name="phone" class="phone_number" placeholder="Телефон">
                <img src="/media/img/line2-2.png" class="line2 animate8">
                <button type="submit" class="animate9 btn-5">Заказать звонок</button>
            </form>
        </div>
    </div>

</div>

<script>// from finance
    $(document).ready(function () {
        var scrollPos7 = $('.state').offset().top - 400;
        var once7 = false;
        $(window).scroll(function() {
            var scrolled = $(window).scrollTop();
            if ((scrolled > scrollPos7) && !once7) {
                once7 = true;
                setTimeout(function () { $('.animate6').addClass('height');}, 500);
                setTimeout(function () { $('.animate7').addClass('height animated jello');}, 1500);
                setTimeout(function () { $('.animate8').addClass('height');}, 2500);
                setTimeout(function () { $('.animate9').addClass('height');}, 3500);
            }
        });});
</script>
