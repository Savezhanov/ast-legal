<?php
class FinanceController extends Controller {
    public function actionIndex() {

        $criteria = new CDbCriteria();
        $criteria->condition = "status_int ='1'";
        $criteria->order = "serial_number";

        $financecategory = Financecategory::model()->findAll($criteria);
        $financemenu = Financemenu::model()->findAll($criteria);
        $finance = Finance::model()->findAll($criteria);

        $this->pageTitle = "AST";
        $this->render('index',array("financecategory" => $financecategory,"financemenu" => $financemenu, "finance" =>$finance ));

    }
    public function actionCategory($url) {

        $check = Financecategory::model()->find( "status_int = 1 AND url_text = '$url'");

        $criteria = new CDbCriteria();
        $criteria->condition = "status_int ='1' AND category_id = '$check->id' ";
        $criteria->order = "serial_number";
        $financemenu = Financemenu::model()->findAll($criteria);

        $cr = new CDbCriteria();
        $cr->condition = "status_int = 1 AND finance_id = '$check->id' ";
        $cr->order = 'RAND()';
        $cr->limit = 4;
        $articles = Articles::model()->findAll($cr);

        $ids = array();
        foreach ($financemenu as $key=>$value){
            $ids[$key] = $value->id;
        }

        $finance = Finance::model()->findAllByAttributes(array("menu_id"=>$ids));

        //find all legislations
        $legislation = Legislation::model()->findAll();

        //find all booklets
        $booklet = Booklet::model()->findAll();


            if ($check!=null) {
                $this->pageTitle = "AST";
                $this->render('category', array("financemenu" => $financemenu, "finance" => $finance ,"articles"=>$articles, "url" => $url, "legislation" => $legislation, "booklet" => $booklet));
            } else {
                throw new CHttpException(404, 'Странца не существует.');
            }


    }
    public function actionLegislation($url){
        $id = (int) filter_var($url, FILTER_SANITIZE_NUMBER_INT);
        if( $id!= null) {
            $this->pageTitle = "AST";
            $legislation = Legislation::model()->find("id = '$id'");
            if( $legislation != null ){
                $this->render('legislation',array("url" => $url, "id" => $id, "model" => $legislation));
            }else{
                throw new CHttpException(404, 'Странца не существует.');
            }
        }else{
            throw new CHttpException(404, 'Странца не существует.');
        }

    }
    public function actionGetservices(){
        $menu_id = $_POST['menu'];
        $finance = Finance::model()->findAll(" status_int= 1 AND menu_id = '$menu_id' ");

        /*foreach ( $finance as $key=>$value ){
            if ($key == 0)
        }
            echo '<a href="#" data-finance="'.$value->id.'" data-id="'.($key+1).'"><li>'.$value->name_text.'</li></a>';
        }*/
        $var ='';
        foreach ($finance as $key=>$value) {
            if ( $key == 0) {
                $var = $var.'<a class="active" href="#" data-finance="' . $value->id . '"  data-id="' . ($key + 1) . '"><li>' . $value->name_text . '</li></a>';
            } else $var = $var.'<a href="#" data-finance="'.$value->id.'"  data-id="' . ($key + 1) . '"><li>'.$value->name_text.'</li></a>';
         }

        echo '<ul class="finance-id">'.$var.'</ul>';
    }

    public function actionGetservicestext(){
        $menu_id = $_POST['menu'];
        $finance = Finance::model()->findAll(" status_int= 1 AND menu_id = '$menu_id' ");

        echo $finance[0]->description;

    }

    public function actionGettext(){
        $finance_id = $_POST['finance'];
        $finance = Finance::model()->find(" id='$finance_id'");

        $pag = $_POST['id'];
        if( isset($pag) ) {
            $start_position = (0 + (600 * ($pag-1) ));
        }else $start_position = 0;

        echo $finance->description;

        /*$text = $finance->description;
        $max_lengh = 600;
        $text = str_replace("img src"," ", $text);
        if(mb_strlen($text, "UTF-8") > $max_lengh) {
            $text_cut = mb_substr($text, $start_position, $max_lengh, "UTF-8");
            $text_explode = explode(" ", $text_cut);
            unset($text_explode[count($text_explode) - 1]);
            $text_implode = implode(" ", $text_explode);
            echo $text_implode.'...';
        } else { echo $text;}*/

    }

}
?>
