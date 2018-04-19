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
        $cr_year->order ='adoption_date DESC';
        $laws_year = Laws::model()->findAll($cr_year);

        $get_choice = $_GET['ch']; //берем Законы либо Кодексы
        $get_status = $_GET['st']; //берем статус Действующий
        $get_date = $_GET['dt']; //берем Дату принятия
        $get_sphere = $_GET['sph']; //берем название сферы

        //Проверяем нажаты Законы или Кодексы
        if(isset($get_choice) AND $get_choice == 1){
            $cr = new CDbCriteria();
            //Берем те Законы которые нужны
            $cr->condition = "status = '$get_status' AND adoption_date = '$get_date' AND sphere = '$get_sphere'";
            $count = Laws::model()->count($cr);
            $pages = new CPagination($count);
            $pages->pageSize = 4;
            $pages->applyLimit($cr);
            $laws = Laws::model()->findAll($cr);
        }

        $this->pageTitle = "AST";
        $this->render('index',array("laws_sphere"=>$laws_sphere,"laws"=>$laws,"pages"=>$pages,"laws_year"=>$laws_year,"get_choice"=>$get_choice,"get_status"=>$get_status,"get_date"=>$get_date,"get_sphere"=>$get_sphere));
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
}

?>
