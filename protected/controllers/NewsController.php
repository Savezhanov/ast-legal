<?php
class NewsController extends Controller {
    public function actionIndex() {
        $criteria = new CDbCriteria();
        $criteria->condition = "status_int ='1'";
        $criteria->order = "created_at DESC,serial_number";
        $news = News::model()->findAll($criteria);


        $this->pageTitle = "AST";
        $this->render('index',array( "news" => $news ));
    }
    public function actionGetid(){
        $id = $_POST['id'];
         return $id;
    }
    public function actionShow($url) {

        $criteria = new CDbCriteria();
        $criteria->condition = "status_int ='1' AND url_text = '$url'";
        $criteria->order = "created_at DESC";
        $news = News::model()->find($criteria);

        if( $news == null ){
            throw new CHttpException(404, 'Странца не существует.');
        }else {
        $this->pageTitle = "AST";
        $this->render('news-full',array( "news" => $news));}
    }
}
?>
