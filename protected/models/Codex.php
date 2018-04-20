<?
class Codex extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function modelTitle()
    {
        return 'Кодексы';
    }

    public function tableName()
    {
        return 'codex';
    }

    public function getNiceDate() {
        return date( 'd.m.Y', $this->created_at );
    }

    public function rules()
    {
        return array(
            array('title,', 'length', 'max'=>255),
            array('sphere','length','max'=>500),
            array('document', 'length', 'max'=>900000),
            array('status,adoption_date', 'numerical', 'integerOnly'=>true),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Название',
            'status' => 'Статус',
            'adoption_date' => 'Дата принятия',
            'sphere' => 'Сфера правоотношений',
            'document' => 'Документ закона',
        );
    }

}
?>
