 <div class="news">
        <div class="news-box">
            <div class="news-center-box">
                <? foreach ( $news as $key=>$value ) {?>
                <?$img = json_decode($value->image,true)?>
                <div class="news-block">
                    <div class="news-img">
                        <p class="news-date"><?=date('d.m.y',$value->created_at)?></p>
                        <img src="/upload/News/full/<?=$img[0]?>">
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
                                    <p><?=$text_implode."...";?></p>
                                <?} else { ?> <p> <?=$text;?> </p>
                                <?  }   ?>
                            </span>
                    </div>
                    <a data-id="<?=$value->id?>" href="/news/<?=$value->url_text?>">Читать новость</a> <!--href="/news/--><?/*=$value->url_text*/?>
                </div>
                <? } ?>
            </div>
        </div>
 </div>
<script>
    $('body').on('click','a',function(){
        var id = $(this).data('id');
        $.ajax({
            url: "/News/getid",
            type: "post",
            data: {'id':id},
            success:function(data){
                /*$('.news-center-box').html(data);*/
                console.log(data);
            }
        })
    });
</script>