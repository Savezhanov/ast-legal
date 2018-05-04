<?
class Booklet extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function modelTitle()
    {
        return 'БРОШЮРЫ И ИНФОГРАФИКА';
    }

    public function tableName()
    {
        return 'booklet';
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
            array('src_link', 'length', 'max'=>255),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Название',
            'date' => 'Дата принятия',
            'link' => 'Онлайн src',
            'src_link' => 'src',
        );
    }

}
?>
