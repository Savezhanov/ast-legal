<?
class Laws extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function modelTitle()
    {
        return 'Законы';
    }

    public function tableName()
    {
        return 'laws';
    }

    public function getNiceDate() {
        return date( 'd.m.Y', $this->created_at );
    }

    public function rules()
    {
        return array(
            array('law_title,', 'length', 'max'=>255),
            array('sphere','length','max'=>500),
            array('law_document', 'length', 'max'=>900000),
            array('status,adoption_date', 'numerical', 'integerOnly'=>true),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'law_title' => 'Название',
            'status' => 'Статус',
            'adoption_date' => 'Дата принятия',
            'sphere' => 'Сфера правоотношений',
            'law_document' => 'Документ закона',
        );
    }

}
?>
