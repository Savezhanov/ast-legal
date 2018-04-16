<div class="row">
    <div class="offset">
        <p class="pull-right">
            <a class="btn" href="<?=$this->createUrl('update', array('id' => $data->id))?>"><i class="icon-pencil"></i> Ред.</a>
            <a class="btn btn-danger delete-link-list" href="#modal-delete" data-toggle="modal" data-title="<?=CHtml::encode($data->name_text)?>" data-id="<?=$data->id?>"><i class="icon-trash"></i> Уд.</a>
        </p>
        <p class="pull-right">
            <?=CHtml::checkbox('ArticlesCheck[status_int][' . $data->id . ']', $data->status_int, array('class' => 'toggle-on-check'))?>
            <span class="label label-info"><i class="icon-eye-open"></i> Видимость</span>
        </p>
        <div style = "display:inline-block; vertical-align: top; margin-right:10px;">
            <? $img = json_decode($data->image, true); ?>
            <img width = "100" src = "/upload/Articles/tm/<?=$img[0]?>">
        </div>
        <div style="display: inline-block">
            <span class="label label-info"><?=date('d.m.Y', $data->created_at)?></span>
            <? $img = json_decode($data->image, true); ?>
            <h3 style = "margin-top:5px;">
                <a target = "_blank" href = "/articles/<?=$data->url_text?>"><?=$data->name_text?></a>
            </h3>
            <?php $parentname = Articlescategory::model()->find(" id = '$data->parent_id'")->name_text; ?>
            <?php $financename = Financecategory::model()->find(" id = '$data->finance_id'")->name_text; ?>
            <p style = "margin-left:0; font-weight:bold;">Порядковый номер: <?=$data->serial_number?></p>
            <p style = "margin-left:0; font-weight:bold;">Категория статей: <a target="_blank"><?=$parentname?></a></p>
            <p style = "margin-left:0; font-weight:bold;">Тэги по услугам: <a target="_blank"><?=$financename?></a></p>
        </div>
    </div>
</div>