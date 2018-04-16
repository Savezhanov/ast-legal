<?
class Documents extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function modelTitle()
    {
        return 'Документы';
    }

    public function tableName()
    {
        return 'documents';
    }

    public function getNiceDate() {
        return date( 'd.m.Y', $this->created_at );
    }

    public function rules()
    {
        return array(
            array('document_name,document_url', 'length', 'max'=>255),
            array('category_title', 'length', 'max'=>255),
            array('folder_title,subfolder_title,subsubfolder_title', 'length', 'max'=>255),
            array('document_text', 'length', 'max'=>9000000),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'document_name' => 'Название документа',
            'document_url' => 'Ссылки документов',
            'category_title' => 'Название категории',
            'folder_title' => 'Название папки',
            'subfolder_title' => 'Название под папки',
            'subsubfolder_title' => 'Название под под папки',
            'document_text' => 'Текст документов',
        );
    }

}
?>
