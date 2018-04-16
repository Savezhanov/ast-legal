<?php
class ArticlescategoryController extends RController
{
    public $filterOption = array(
        'model'  => 'Articlescategory',
        'fields' => array(
            'name_text'=>array('type'=>'text'),
			'created_at'=>array('type'=>'date'),
			'status_int'=>array('type'=>'checkbox'),

        )
    );

    public $defaultAction = 'list';

    public function actionIndex() {
        $this->redirect('list');
    }

    public function actionList() {
        $model = new Articlescategory('search');
        $model->unsetAttributes();

        if (isset($_GET['Articlescategory'])) {
            $model->attributes = $_GET['Articlescategory'];
            Yii::app()->user->setState('_filter_Articlescategory', $_GET['Articlescategory']);
        } else
            if (Yii::app()->user->hasState('_filter_Articlescategory')) {
                $model->attributes = Yii::app()->user->getState('_filter_Articlescategory');
            }
        $this->filter = $model->attributes;
        if (isset($_GET['ajax'])) {
            $this->renderPartial(
                '_list', array(
                              'model' => $model,
                         ));
        } else
            $this->render(
                'list', array(
                             'model' => $model,
                        ));
    }

    public function actionCreate() {
        $model = new Articlescategory;
        $model -> title = $_POST['Articlescategory']['name_text'];

        $this->performAjaxValidation($model);

        if (isset($_POST['Articlescategory'])) {
            $model->attributes = $_POST['Articlescategory'];
            $model->image=$this->saveFile($model,'image');
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'Сохранено');
                $this->redirect(array('list'));
            } else {
                Yii::app()->user->setFlash('error', 'Ошибка при сохранении');

            }
        } else {
			$model->created_at = time();
        }
        $this->render(
        'create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $this->performAjaxValidation($model);
        $page = (int)Yii::app()->request->getParam('Articlescategory_page');

        if (isset($_POST['Articlescategory'])) {
            $model -> title = $_POST['Articlescategory']['name_text'];
            $model->attributes = $_POST['Articlescategory'];
            $model->image=$this->saveFile($model,'image');
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'Сохранено');

                $this->redirect(
                    array(
                            'list',
                         'Articlescategory_page' => $page));
            } else {
                Yii::app()->user->setFlash('error', 'Ошибка при сохранении');
            }
        }
        $this->render(
            'update', array(
                           'model' => $model,
                           'page'  => $page
                      ));
    }

    /**
     * Удаление модели
     */
    public function actionDelete($id) {
       //$id = Yii::app()->request->getParam('id');
            //$this->loadModel(1)->delete();
			$model = Articlescategory::model()->find("id = '".$id."'");
			$model->delete();
            if (!isset($_GET['ajax'])) {
               // $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('list'));
            }

    }
    /**
     * Загрузка модели по ID
     *
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
                    $model = Articlescategory::model()->find("id = '".$id."'");

        if ($model === null) {
            throw new CHttpException(404, 'Страница не существует.');
        }
        return $model;
    }

    /**
     * AJAX валидация
     *
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'Articlescategory-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function beforeAction($action) {
        if ($_GET['ajax'] === 'state')
            if (count($_GET['ArticlescategoryCheck']) > 0) {
                foreach ($_GET['ArticlescategoryCheck'] as $column => $value) {
                    foreach ($value as $id => $val) {
                        Articlescategory::model()->updateByPk((int)$id, array($column => (int)$val));
                    }
                }
                Yii::app()->end();
            }

        return parent::beforeAction($action);
    }
}


