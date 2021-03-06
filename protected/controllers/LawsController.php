<?php
class LawsController extends Controller {
    public function actionIndex() {
        $this->pageTitle = "AST";

        $get_choice = $_GET['ch']; //берем Законы либо Кодексы
        $get_status = $_GET['st']; //берем статус Действующий
        $get_date = $_GET['dt']; //берем Дату принятия
        $get_sphere = $_GET['sph']; //берем название сферы

        //Проверяем нажаты Законы или Кодексы
            if(isset($get_choice) AND $get_choice == 1){

            $criteria = new CDbCriteria();
            $criteria->select = 'sphere';
            $criteria->condition = "status = '$get_status'";
            $criteria->group = "sphere";
            $laws_sphere = Laws::model()->findAll($criteria);

            $cr_year = new CDbCriteria();
            $cr_year->select = 'adoption_date';
            $cr_year->condition = "sphere = '$get_sphere' AND status = '$get_status'";
            $cr_year->group = "adoption_date";
            $cr_year->order ='adoption_date DESC';
            $laws_year = Laws::model()->findAll($cr_year);

            $get_choice = $_GET['ch']; //берем Законы либо Кодексы
            $get_status = $_GET['st']; //берем статус Действующий
            $get_date = $_GET['dt']; //берем Дату принятия
            $get_sphere = $_GET['sph']; //берем название сферы

                if( $get_sphere == null && $get_status == null && $get_sphere == null ){
                    $cr = new CDbCriteria();
                    //Берем все Законы
                    $count = Laws::model()->count($cr);
                    $pages = new CPagination($count);
                    $pages->pageSize = 3;
                    $pages->applyLimit($cr);
                    $laws = Laws::model()->findAll($cr);

                    $this->render('index',array("laws_sphere"=>$laws_sphere,"laws"=>$laws,"pages"=>$pages,"laws_year"=>$laws_year,"get_choice"=>$get_choice,"get_status"=>$get_status,"get_date"=>$get_date,"get_sphere"=>$get_sphere));
                }
                $cr = new CDbCriteria();
                //Берем те Законы которые нужны
                $cr->condition = "status = '$get_status' AND adoption_date = '$get_date' AND sphere = '$get_sphere'";
                $count = Laws::model()->count($cr);
                $pages = new CPagination($count);
                $pages->pageSize = 4;
                $pages->applyLimit($cr);
                $laws = Laws::model()->findAll($cr);
                if($laws != null) {
                    $this->render('index',array("laws_sphere"=>$laws_sphere,"laws"=>$laws,"pages"=>$pages,"laws_year"=>$laws_year,"get_choice"=>$get_choice,"get_status"=>$get_status,"get_date"=>$get_date,"get_sphere"=>$get_sphere));
                }else {
                    $this->render('error',array("laws_sphere"=>$laws_sphere,"laws"=>$laws,"pages"=>$pages,"laws_year"=>$laws_year,"get_choice"=>$get_choice,"get_status"=>$get_status,"get_date"=>$get_date,"get_sphere"=>$get_sphere));
                }
            }else {
                $criteria = new CDbCriteria();
                $criteria->select = 'sphere';
                $criteria->group = "sphere";
                $criteria->condition = "status = '$get_status'";
                $laws_sphere = Codex::model()->findAll($criteria);

                $cr_year = new CDbCriteria();
                $cr_year->select = 'adoption_date';
                $cr_year->condition = "sphere = '$get_sphere' AND status = '$get_status'";
                $cr_year->group = "adoption_date";
                $cr_year->order ='adoption_date DESC';
                $laws_year = Codex::model()->findAll($cr_year);

                if( $get_sphere == null && $get_status == null && $get_sphere == null ){
                    $cr = new CDbCriteria();
                    //Берем все Кодексы
                    $count = Codex::model()->count($cr);
                    $pages = new CPagination($count);
                    $pages->pageSize = 4;
                    $pages->applyLimit($cr);
                    $laws = Codex::model()->findAll($cr);

                    $this->render('index',array("laws_sphere"=>$laws_sphere,"laws"=>$laws,"pages"=>$pages,"laws_year"=>$laws_year,"get_choice"=>$get_choice,"get_status"=>$get_status,"get_date"=>$get_date,"get_sphere"=>$get_sphere));
                }

                $cr = new CDbCriteria();
                //Берем те Кодексы которые нужны
                $cr->condition = "status = '$get_status' AND adoption_date = '$get_date' AND sphere = '$get_sphere'";
                $count = Codex::model()->count($cr);
                $pages = new CPagination($count);
                $pages->pageSize = 4;
                $pages->applyLimit($cr);
                $laws = Codex::model()->findAll($cr);
                if($laws != null) {
                    $this->render('index',array("laws_sphere"=>$laws_sphere,"laws"=>$laws,"pages"=>$pages,"laws_year"=>$laws_year,"get_choice"=>$get_choice,"get_status"=>$get_status,"get_date"=>$get_date,"get_sphere"=>$get_sphere));
                }else {
                    $this->render('error',array("laws_sphere"=>$laws_sphere,"laws"=>$laws,"pages"=>$pages,"laws_year"=>$laws_year,"get_choice"=>$get_choice,"get_status"=>$get_status,"get_date"=>$get_date,"get_sphere"=>$get_sphere));
                }
            }

    }

    public function actionFull($url) {
        $ch = substr($url,0,3);
        $id = filter_var($url, FILTER_SANITIZE_NUMBER_INT);
        $criteria = new CDbCriteria();
        $criteria->select = 'document';
        $criteria->condition = "id = '$id' ";

        if($ch == "law") {
            $laws_document = Laws::model()->findAll($criteria);

            if ( $laws_document == null) {
                throw new CHttpException(404, 'Странца не существует.');
            } else {
                $this->pageTitle = "AST";
                $this->render('lawsfull', array("id" => $id, "laws_document" => $laws_document));
            }
        }else {
            $laws_document = Codex::model()->findAll($criteria);

            if ( $laws_document == null) {
                throw new CHttpException(404, 'Странца не существует.');
            } else {
                $this->pageTitle = "AST";
                $this->render('lawsfull', array("id" => $id, "laws_document" => $laws_document));
            }
        }


    }
}

?>
