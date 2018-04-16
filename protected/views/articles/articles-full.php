 <div class="box">
        <div class="box-container">
            <?$img = json_decode($articles->image,true);?>
            <img src="/upload/Articles/full/<?=$img[0]?>">
            <p class="box-header"><?=$articles->name_text?></p>
            <?=$articles->description?>
        </div>
 </div>