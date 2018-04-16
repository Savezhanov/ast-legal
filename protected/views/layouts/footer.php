<footer class="shadow">
    <div class="map">
        <div class="logo-text ' . $show . '">
            <span class="ast">AST</span>
            <span class="legal">legal</span>
        </div>
        <div class="info">
            <p>НАШИ КОНТАКТЫ</p>
            <div class="info-flex mobile-none">
                <div class="margin-right">
                    <?$img = json_decode($contacts[0]->image,true) ?>
                    <img src="/upload/Contacts/full/<?=$img[0]?>">
                </div>
                <?=$contacts[0]->description?>
            </div>
            <div class="m-flex">
                <div class="info-flex">
                    <div class="margin-right">
                        <?$img = json_decode($contacts[1]->image,true) ?>
                        <img src="/upload/Contacts/full/<?=$img[0]?>">
                    </div>
                    <div>
                        <span>
                           <?=$contacts[1]->description?>
                         </span>
                    </div>
                </div>
                <div class="m-width">
                    <div class="info-flex mobile-visible">
                        <div class="margin-right">
                            <?$img = json_decode($contacts[0]->image,true) ?>
                            <img src="/upload/Contacts/full/<?=$img[0]?>">
                        </div>
                            <?=$contacts[0]->description?>
                    </div>
                    <div class="info-flex">
                        <div class="margin-right">
                            <?$img = json_decode($contacts[2]->image,true) ?>
                            <img src="/upload/Contacts/full/<?=$img[0]?>">
                        </div>
                        <div class="m-minus">
                            <span><?=$contacts[2]->description?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-flex no-margin">
                <div class="margin-right">
                    <img src="/media/img/web.png" class="none">
                </div>
                <div class="social-icons">
                    <?foreach ( $social as $key=>$value) { ?>
                        <?$img = json_decode( $value->image, true);?>
                        <a href="<?=$value->url?>"><img src="/upload/Social/full/<?=$img[0]?>"></a>
                    <? } ?>
                </div>
            </div>

        </div>
        <a href="https://maint.kz" class="maint"><img src="/media/img/maint.png"></a>
       <?=$contacts[3]->short_description?>
    </div>
</footer>

