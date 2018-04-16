<?php
class DocsController extends Controller {
    public function actionIndex() {

        //находим заголовки
        $criteria_category = new CDbCriteria();
        $criteria_category->select = 'category_title';
        $criteria_category->group = 'category_title';
        $doc_category  = Documents::model()->findAll($criteria_category);

        //находим названия папок
        //только первой категорий
        $cat = $doc_category[0]->category_title;
        $criteria_folder = new CDbCriteria();
        $criteria_folder->select = 'folder_title,category_title';
        $criteria_folder->condition = "category_title = '$cat' ";
        $criteria_folder->group = 'folder_title';
        $doc_folder  = Documents::model()->findAll($criteria_folder);

        $this->pageTitle = "AST";
        $this->render('index',array('doc_category' => $doc_category, 'doc_folder' => $doc_folder,'cat'=>$cat));
    }
    public function actionGetfolders() {
        $category_title = $_POST['category'];

        $criteria_folder = new CDbCriteria();
        $criteria_folder->select = 'folder_title,category_title';
        $criteria_folder->condition = "category_title = '$category_title' ";
        $criteria_folder->group = 'folder_title';
        $doc_folder = Documents::model()->findAll($criteria_folder);

        $folder = '';
        foreach ($doc_folder as $folder_key => $folder_value){
            $folder = $folder.
                '<a href="" class="doc-items" data-id='.($folder_key+1).' data-folder = "'.$folder_value->folder_title.'">
                        <span>'.$folder_value->folder_title.'</span>
                 </a>';
        }
        echo $folder;
    }
    public function actionGetsubfolders(){
        //берем названия папки
        $folder_title = $_POST['folder'];

        //находим названия под папок, по названию папки
        $criteria_subfolder = new CDbCriteria();
        $criteria_subfolder->select = 'subfolder_title,document_name,folder_title';
        $criteria_subfolder->condition = "folder_title = '$folder_title'";
        $criteria_subfolder->group = 'subfolder_title';
        $doc_subfolder = Documents::model()->findAll($criteria_subfolder);

        $sub_folder = '<p class="doc-title">'.$folder_title.'</p>';
        $sub_documents = '';
        foreach ($doc_subfolder as $sub_key => $sub_value){
            //находим все документы относящиеся к папке
            $criteria_documents = new CDbCriteria();
            $criteria_documents->select = 'document_name';
            //проверяем нету ли под папок и находим документ по названию папки
            $criteria_documents->condition = "subfolder_title = '$sub_value->subfolder_title' AND subsubfolder_title = 'NULL' ";
            $docs = Documents::model()->findAll($criteria_documents);
            //проверка на под  под папки
            if ($docs != null) {
                foreach ($docs as $key => $value) {
                    $sub_documents = $sub_documents.'                      
                            <a class="doc-item" data-id="1">
                                <img src="/media/img/doc3.png">
                                <p>'.$value->document_name.'</p>
                            </a>';
                }
            }
            $sub_folder = $sub_folder.'
            <div class="doc-open-container">
                    <div class="doc-header">
                        <div class="doc-header-con">
                            <img src="/media/img/doc2.png">
                            <p>'.$sub_value->subfolder_title.'</p>
                        </div>
                    </div>
                    <div class="doc-body">
                        '.$sub_documents.'
                    </div>                                     
                </div>
            ';
            $sub_documents ='';
        }
        echo $sub_folder;
    }


}
?>
