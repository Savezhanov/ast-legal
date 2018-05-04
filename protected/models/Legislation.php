<?
class Legislation extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function modelTitle()
    {
        return 'НОРМАТИВНАЯ БАЗА';
    }

    public function tableName()
    {
        return 'legislation';
    }

    public function getNiceDate() {
        return date( 'd.m.Y', $this->created_at );
    }

    public function rules()
    {
        return array(
            array('name,', 'length', 'max'=>255),
            array('date','length','max'=>255),
            array('link', 'length', 'max'=>255),
            array('document', 'length', 'max'=>9000000),
            array('column_number', 'numerical', 'integerOnly'=>true),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Название',
            'date' => 'Дата принятия',
            'link' => 'Онлайн src',
            'column_number' => 'Номер колонки',
            'document' => 'Текст документа',
        );
    }

}
?>
