<?php
class AboutController extends Controller {
    public function actionIndex() {
        $this->pageTitle = "AST";
        $criteria = new CDbCriteria();
        $criteria -> condition = " status_int = 1";
        $criteria -> order = " serial_number";
        $page = Pages::model()->findAll($criteria);

        $this->render('index', array( "page" => $page) );
    }
}
?>
