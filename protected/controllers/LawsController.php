<?php
class LawsController extends Controller {

    public function actionIndex() {

        $criteria = new CDbCriteria();
        $criteria->select = 'sphere';
        $criteria->group = "sphere";
        $laws_sphere = Laws::model()->findAll($criteria);

        $cr_year = new CDbCriteria();
        $cr_year->select = 'adoption_date';
        $cr_year->group = "adoption_date";
        $laws_year = Laws::model()->findAll($cr_year);


        $get_sphere = $_GET['sphere'];
        if(isset($_GET['adoption_date'])){
            $get_date = $_GET['adoption_date'];
        }else $get_date = 2018;
        $cr = new CDbCriteria();
        $cr->condition = "adoption_date = '$get_date' ";//sphere LIKE "Междунаpодные отношения Республики Казахстан"
        $count = Laws::model()->count($cr);
        $pages = new CPagination($count);
        $pages->pageSize = 4;
        $pages->applyLimit($cr);
        $laws = Laws::model()->findAll($cr);
        $this->pageTitle = "AST";
        $this->render('index',array("laws_sphere"=>$laws_sphere,"laws"=>$laws,"pages"=>$pages,"laws_year"=>$laws_year,"get_date"=>$get_date));
    }

    public function actionFull($url) {
        $id = filter_var($url, FILTER_SANITIZE_NUMBER_INT);

        $criteria = new CDbCriteria();
        $criteria->select = 'law_document';
        $criteria->condition = "id = '$id' ";
        $laws_document = Laws::model()->findAll($criteria);

        if ( $laws_document == null) {
            throw new CHttpException(404, 'Странца не существует.');
        } else {
            $this->pageTitle = "AST";
            $this->render('lawsfull', array("id" => $id, "laws_document" => $laws_document));
        }

    }

    public function actionGetlaws(){
        $get_date = $_POST['adoption_date'];
        echo $get_date;
       /* $sphere = $_POST['sphere'];
        $adoption_date = $_POST['adoption_date'];
        $status = $_POST['status'];
        $choice = $_POST['choice'];

        if($choice == 0) {
            $cr = new CDbCriteria();
            $cr->condition = " sphere LIKE '$sphere' AND adoption_date = $adoption_date AND status = $status";
            $count = Laws::model()->count($cr);
            $pages = new CPagination($count);
            $pages->pageSize = 4;
            $pages->applyLimit($cr);
            $laws = Laws::model()->findAll($cr);

            $law_display ='';
            foreach ($laws as $key=>$value){
                $law_display = $law_display.'  
                <a href="laws/law'.$value->id.'" class="laws-right-item">
                        <div class="laws-number">'.($key+1).'<img src="/media/img/after2.png"></div>
                        <ul>
                            <li class="laws-title">'.$value->law_title.'</li>
                            <!--<li class="laws-text">Кодекс Республики Казахстан от 5 июля 2014 года № 234-V ЗРК.</li>-->
                        </ul>
                 </a>';
            }

            echo '
        <div class="laws-right-con" id="laws-items-1">
                '.$law_display.'
        </div>                                     
        ';
        }*/
    }

    public function actionGetchoice(){
       echo "asd";
    }

}

?>
