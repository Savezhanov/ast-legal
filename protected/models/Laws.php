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
            array('title,', 'length', 'max'=>5000),
            array('sphere','length','max'=>5000),
            array('document', 'length', 'max'=>9000000),
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
