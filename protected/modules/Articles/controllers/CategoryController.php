<?php

class CategoryController extends Controller
{
	public function actionViewArticleOfCate($id)
	{
        $model = Categories::model()->findByPk($id);
        $this->render('view',array('model'=>$model));
	}
}