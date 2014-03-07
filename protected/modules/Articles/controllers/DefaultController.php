<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
        $criteria = new CDbCriteria;
        $criteria->condition='type="A" and parent_id = 0 and "1" = "1"';
        $model = Categories::model()->findAll($criteria);
        $this->render('index',array('model'=>$model));
	}
    
    public function actionError(){
        $this->render('error');
    }
}