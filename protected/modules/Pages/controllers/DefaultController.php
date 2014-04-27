<?php

class DefaultController extends Controller
{
	public function actionCreate()
	{
		if (Yii::app()->request->isAjaxRequest) {
<<<<<<< HEAD
			if (isset($_POST['c']) && isset($_POST['t'])) {
=======
			if (isset($_POST['c']) && isset($_POST['t'])){
>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
				$c = $_POST['c'];
				$t = $_POST['t'];
				$model = new Pages;
				$model->content = $c;
				$model->user_id = Yii::app()->user->id;
				$model->create_date= date('Y-m-d H:i:s');
				$model->type = $t;
<<<<<<< HEAD
				if ($model->save()) {
=======
				if ($model->save(false)){
>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
					$this->renderPartial('create', array('model'=>$model));
				}
			}
		}
	}
<<<<<<< HEAD
=======
    
    public function actionDeletepost(){
        //var_dump($_POST['post_id']);
        if(isset($_POST['post_id']) and $_POST['post_id'] != null ){
            $post_id = $_POST['post_id'];
            Pages::model()->deleteByPk($post_id);
            //echo $post_id;
        }
    }
>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
}