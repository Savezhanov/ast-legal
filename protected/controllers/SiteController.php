<?php

class SiteController extends Controller {

    public function actions() {
        return array(
            'captcha' => array(
                'class'     => 'TCaptchaAction',
                'backColor' => 0xFFFFFF,
                'minLength' => 4,
                'maxLength' => 4
            ),
        );
    }

    public $pageKeywords = '';
    public $pageDescription = '';

    public function actionIndex() {
        $criteria = new CDbCriteria();
        $criteria->condition = "status_int ='1'";
        $criteria->order = "serial_number";
        $reviews = Reviews::model()->findAll($criteria);
		
        $financecategory = Financecategory::model()->findAll($criteria);
        $name = $_GET['name'];
        $this->pageTitle = "AST";
        $this->render('index',array( "reviews" => $reviews,"financecategory" => $financecategory ,"review"=>$name));
    }

    public function actionLogin() {
		$error = 0;
		Yii::app()->user->setState('loginError',0);
		Yii::app()->user->setState('loginFail',0);
        $this->pageTitle = 'Вход в Административную часть';
        if (Yii::app()->user->isGuest) {
            //$error = (int)Yii::app()->user->getState('loginError');
            //$fail = (int)Yii::app()->user->getState('loginFail');
            if ($error <= (time()-3600)) {
                $error = 0;
                Yii::app()->user->setState('loginError',0);
                Yii::app()->user->setState('loginFail',0);
            }
            if ($fail < 35) {
                $model = new LoginForm('login');
                if (isset($_POST['LoginForm'])) {
                    $model->attributes = $_POST['LoginForm'];
                    if ($model->validate()) {
                        if ($model->login()) {
                            $this->redirect('/timesafe/news/');
                        }
                    }
                    else {
                        $fail++;
                        if ($fail >= 35){
                            Yii::app()->user->setState('loginError',time());
                        }
                        Yii::app()->user->setState('loginFail',$fail);
                    }
                }
                if (Yii::app()->request->isAjaxRequest) {
                    $this->renderPartial('_login', array('model' => $model));
                }
                else {
                    $this->render('login', array('model' => $model));
                }
            }
            else {
                $this->render('login', array('error' => $error));
            }
        }
        else {
            $this->redirect('/timesafe/news');
        }
    }
    public function actionError() {
        $type  = (int)Yii::app()->request->getParam('type');
        if (!$type) {$type = 404;}
        if ($type == "403"){
            Yii::app()->user->logout();
            $this->redirect("/site/login");
        }
        $this->pageTitle = "Ошибка ".$type;
        $this->render('error', array('type'=>$type));
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }


}

?>
