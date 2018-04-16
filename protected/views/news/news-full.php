<div class="box">
    <div class="box-container">
        <div class="newsfull-img">
            <?$img = json_decode($news->image,true);?>
            <img src="/upload/News/full/<?=$img[0]?>">
        </div>
        <p class="box-header"><?=$news->name_text?></p>
        <?=$news->description?>
    </div>
</div>