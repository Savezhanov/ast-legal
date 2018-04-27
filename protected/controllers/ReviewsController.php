<?php
class ReviewsController extends Controller
{
    public function actionReviewform()
    {
        $name = $_POST['review_name'];
        $review = $_POST['review'];
        $age = $_POST['review_age'];
        $img = $_POST['image'];

        $model = new Reviews();
        $model->name_text = $name;
        $model->age = $age;
        $model->short_description = $review;
        $model->image=$this->saveFile($model,'image');
        /*$model->image=$img->saveFile($model,'image');*/
        $model->save();

        /*$model->image=$this->saveFile($model,'image');*/
        echo $name .' ' .$review . ' ' .$age .' ';

    }
}


