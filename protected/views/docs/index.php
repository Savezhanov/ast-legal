<div class="mobile-visible mobile-select">
        <div class="back">
            <img src="/media/img/m-arr.png">
        </div>
        <select>
            <option data-id="1">Договоры</option>
            <option data-id="1">Возврат долга</option>
            <option data-id="1">Трудовые отношения</option>
            <option data-id="1">Интернет и право</option>
            <option data-id="1">ТОО</option>
            <option data-id="1">Некоммерческие организации</option>
            <option data-id="1">Государственные закупки</option>
            <option data-id="1">Некоммерческие организации</option>
            <option data-id="1">Государственные закупки</option>
            <option data-id="1">Проверки гос. органов</option>
            <option data-id="1">Другие документы</option>
            <option data-id="1">Налогообложение</option>
            <option data-id="1">Судебное производство</option>
        </select>
    </div>

    <div class="doc">
        <div class="doc-left">
            <div class="doc-menu">
                <div class="border-top"></div>
                <div class="border-bottom"></div>
                <div class="doc-menu-con">
                    <ul>
                        <?foreach ($doc_category as $key => $value) {
                            if($key+1 == 1) {?>
                                <a href="#" class="active" data-id="<?=($key+1)?>" data-category="<?=$value->category_title?>"><li><?=$value->category_title?></li></a>
                            <? }else { ?>
                                <a href="#"  data-id="<?=($key+1)?>" data-category="<?=$value->category_title?>"><li><?=$value->category_title?></li></a>
                            <? } ?>
                        <? } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="doc-right">
            <div class="doc-right-content active" id="doc-1">
                <? foreach ($doc_folder as $folder_key => $folder_value){ ?>
                <a href="" class="doc-items" data-id="<?=($folder_key+1)?>" data-folder="<?=$folder_value->folder_title?>">
                        <span><?=$folder_value->folder_title?></span>
                    </a>
                <? } ?>
            </div>


            <div class="doc-open" id="doc-open-1">
                <p class="doc-title">Учредительные документы</p>
                <div class="doc-open-container">
                    <div class="doc-header">
                        <div class="doc-header-con">
                            <img src="/media/img/doc2.png">
                            <p>Решение единственного участника</p>
                        </div>
                    </div>
                    <div class="doc-body">
                        <a class="doc-item" data-id="1">
                            <img src="/media/img/doc3.png">
                            <p>Решение единственного участника об утверждении устава в новой редакции</p>
                        </a>
                        <a class="doc-item" data-id="1">
                            <img src="/media/img/doc3.png">
                            <p>Решение единственного участника о создании ТОО</p>
                        </a>
                        <a class="doc-item last" data-id="1">
                            <img src="/media/img/doc3.png">
                            <p>Решение единственного участника о назначении (избрании) и (или) досрочном прекращении полномочий руководителя исполнительного органа товарищества</p>
                        </a>
                    </div>
                </div>

                <div class="doc-open-container">
                    <div class="doc-header">
                        <div class="doc-header-con">
                            <img src="/media/img/doc2.png">
                            <p>Филиалы и представительства</p>
                        </div>
                    </div>
                    <div class="doc-body">
                        <a class="doc-item" data-id="1">
                            <img src="/media/img/doc3.png">
                            <p>Тест для тех, кто хочет избежать финансовых потерь при ведении бизнеса</p>
                        </a>
                    </div>
                </div>

                <div class="doc-open-container">
                    <div class="doc-header">
                        <div class="doc-header-con">
                            <img src="/media/img/doc2.png">
                            <p>Протокол общего собрания участников</p>
                        </div>
                    </div>
                    <div class="doc-body">
                        <a class="doc-item" data-id="1">
                            <img src="/media/img/doc3.png">
                            <p>Протокол общего собрания участников об утверждении устава в новой редакции</p>
                        </a>
                        <a class="doc-item last" data-id="1">
                            <img src="/media/img/doc3.png">
                            <p>Протокол общего собрания участников о назначении (избрании) и (или) досрочном прекращении полномочий руководителя исполнительного органа товарищества</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="doc-open-full" id="doc-open-full-1">
                <div class="doc-open-full-page">
                    <div class="close"></div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>

<script>
    //click menu, categories
    $( ".doc-menu-con a" ).live("click",function(e) {
            var category = $(this).data('category');
            e.preventDefault();
            $( ".doc-menu-con a" ).removeClass('active');
            if(!$(this).hasClass('active')){
                $(this).addClass('active')
            }
            $('.doc-open').fadeOut(0);
            $('.doc-open-full').fadeOut(0);
        $.ajax({
            url: "/Docs/getfolders",
            type: "post",
            data: {
                'category': category
            },
            success:function(data){
                $(".doc-right-content").fadeOut().promise().done(function () {
                    $(".doc-right-content").html(data).fadeIn();
                });
            }
        })
    }
    );

    //Click folder
    $(".doc-items").live("click",function(e) {
            e.preventDefault();
            var folder = $(this).data('folder');
                $.ajax({
                    url: "/Docs/getsubfolders",
                    type: "post",
                    data: {
                        'folder': folder
                    },
                    success:function(data){
                        $('.doc-right-content').fadeOut().promise().done(function () {
                            $('.doc-open').html(data).fadeIn();
                        });
                    }
                })
        }
    );
    //Click subfolder
    $(".doc-item-folder").live("click",function (e) {
       e.preventDefault();
        var subfolder = $(this).data('subfolder');
        $.ajax({
            url: "/Docs/getdocuments",
            type: "post",
            data: {
                'subfolder': subfolder
            },
            success:function(data){
                $('.doc-open').fadeOut().promise().done(function () {
                    $('.doc-open').html(data).fadeIn();
                });
            }
        })
    });

    //Click subsubfolder
    $("#doc-subsubfolder").live("click",function(e) {
        e.preventDefault();
            var subsubfolder = $(this).data('subsubfolder');
        $.ajax({
            url: "/Docs/getdocuments",
            type: "post",
            data: {
                'subsubfolder': subsubfolder
            },
            success:function(data){
                $('.doc-open').fadeOut().promise().done(function () {
                    $('.doc-open').html(data).fadeIn();
                });
            }
        })
        }
    );

    /*
    $(".doc-item").click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $('.doc-open').fadeOut().promise().done(function () {
                $('#doc-open-full-' + id).fadeIn();
            })
        }
    );*/

</script>