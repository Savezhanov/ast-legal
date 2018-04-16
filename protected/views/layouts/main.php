<!DOCTYPE html>
<html>
<head>
    <meta http-equiv = "Content-Type" content = "text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="/media/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/media/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="/media/css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="/media/css/fansybox.css"/>
    <link rel="stylesheet" type="text/css" href="/media/css/owl.css"/>
    <link rel = "icon" type = "image/png" href = "/media/img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="/media/js/script.js"></script>
    <script type="text/javascript" src="/media/js/mask.js"></script>
    <script type="text/javascript" src="/media/js/fansybox.js"></script>

    <script>
        jQuery(function($){
            $(".phone_number").inputmask("+7 (999) 999 99 99");
        });
    </script>

    <!--<script type="text/javascript" src="/media/js/jquery.js"></script>
    <script type="text/javascript" src="/media/js/script.js"></script>
-->
    <title><?=$this->pageTitle?></title>
</head>
<body>
<section id="home">
    <?
    $criteria = new CDbCriteria();
    $criteria->condition = "status_int ='1'";
    $criteria->order = "serial_number";

    $social = Social::model()->findAll($criteria);
    $contacts = Contacts::model()->findAll($criteria);
    $financecategory = Financecategory::model()->findAll($criteria);
    ?>
    <?$this->renderPartial('/layouts/header',array("social"=>$social,"financecategory" => $financecategory));?>
    <? if ( Yii::app()->controller->id == "site" || Yii::app()->controller->id == "about" )
    { $this->renderPartial('/layouts/header-bottom'); }
    else {
        $this->renderPartial('/layouts/header-bottom2');
    }?>
</section>
    <?=$content?>
<section id="footer">
    <?$this->renderPartial('/layouts/footer',array("social"=>$social,"contacts"=>$contacts));?>
</section>
</body>
</html>