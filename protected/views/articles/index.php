<div class="mobile-visible mobile-laws articles-select">
        <select>
            <?foreach ( $category as $key=>$value ) {?>
            <option data-id="<?=$key+1?>"><?=$value->name_text?></option>
            <? } ?>
        </select>
    </div>

    <div class="doc">
        <div class="doc-left finance-left articles">
            <div class="doc-menu">
                <div class="border-top"></div>
                <div class="border-bottom"></div>
                <div class="doc-menu-con articles-id">
                    <ul>
                        <?foreach ($category as $key => $value){?>
                            <a href="#">
                                <li data-id="<?=$value->id?>"><?=$value->name_text?></li>
                            </a>
                        <? } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="finance-right articles-right">
            <div class="news-center-box" id="articles-1">
                <?foreach ($articles as $key=>$value ) {?>
                    <?$img = json_decode($value->image,true)?>
                        <div class="news-block">
                            <div class="news-img">
                                <img src="/upload/Articles/full/<?=$img[0]?>">
                            </div>
                            <div class="news-body">
                                <p class="news-title"><?=$value->name_text?></p>
                                <hr>
                                <span>
                                     <?
                                     $text = $value->short_description;
                                     $max_lengh = 390;																															$text = str_replace("img src"," ", $text);
                                     if(mb_strlen($text, "UTF-8") > $max_lengh) {
                                         $text_cut = mb_substr($text, 0, $max_lengh, "UTF-8");
                                         $text_explode = explode(" ", $text_cut);
                                         unset($text_explode[count($text_explode) - 1]);
                                         $text_implode = implode(" ", $text_explode); ?>
                                         <?=$text_implode."...";?>
                                     <?} else { ?> <?=$text;?>
                                     <?  }   ?>
                                </span>
                            </div>
                            <a href="/articles/<?=$value->url_text?>">Читать статью</a>
                        </div>
                <? } ?>
            </div>
            <div class="pagination">
                <ul>
                    <?php $this->widget('application.components.WPages',array('_pages'=>$pages)); ?>
                </ul>
            </div>
        </div>
    </div>
<script>
    $('body').on('click','li',function(){
        var id = $(this).data('id');
        $.ajax({
            url: "/Articles/getarticles",
            type: "post",
            data: {'id':id},
            success:function(data){
                $('.finance-right').html(data)
                console.log(data);
            }
        })
    });
</script>