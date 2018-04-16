<?php
class ArticlesController extends Controller {
    public function actionIndex() {
        $criteria = new CDbCriteria();
        $criteria->condition = "status_int ='1'";
        $criteria->order = "serial_number";

        $count = Articles::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 6;
        $pages->applyLimit($criteria);

        $articles = Articles::model()->findAll($criteria);

        $cr = new CDbCriteria();
        $cr->condition = "status_int='1'";
        $cr->order = "serial_number";
        $category = Articlescategory::model()->findAll($cr);

        $this->pageTitle = "AST";
        $this->render('index',array( "articles"=>$articles,"category"=>$category,"pages"=>$pages));
    }

    public function actionShow($url) {
        $criteria = new CDbCriteria();
        $criteria->condition = "status_int ='1' AND url_text = '$url'";
        $criteria->order = "created_at DESC";

        $articles = Articles::model()->find($criteria);
        if ( $articles == null) {
            throw new CHttpException(404, 'Странца не существует.');
        } else {
        $this->pageTitle = "AST";
        $this->render('articles-full',array( "articles" => $articles)); }
    }
    public function actionGetarticles(){
        $id = $_POST['id'];

        $criteria = new CDbCriteria();
        $criteria->condition = "status_int ='1' AND parent_id ='$id' ";
        $criteria->order = "serial_number";

        $count = Articles::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 6;
        $pages->applyLimit($criteria);

        $articles = Articles::model()->findAll($criteria);

        $var ='<div class="news-center-box" id="articles-1">';
        foreach ($articles as $key=>$value) {
            $img = json_decode($value->image,true);
            $var = $var.'
                <div class="news-block">
                    <div class="news-img">  
                        <img src="/upload/Articles/full/'.$img[0].'">
                    </div>
                    <div class="news-body">
                        <p class="news-title">'.$value->name_text.'</p>
                    <hr>
                        <span>
                              '.$value->short_description.'  
                        </span>
                    </div>
                            <a href="/articles/'.$value->url_text.'">Читать статью</a>
                    </div>';
        }
        $var = $var.'</div>';

        echo $var;

    }
}
?>
