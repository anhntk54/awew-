<?php

class DefaultController extends Controller
{
	public function actionCreate()
	{
		if (Yii::app()->request->isAjaxRequest) {
			if (isset($_POST['c']) && isset($_POST['t'])) {
				$c = $_POST['c'];
				$t = $_POST['t'];
				$model = new Pages;
				$model->content = $c;
				$model->user_id = Yii::app()->user->id;
				$model->create_date= date('Y-m-d H:i:s');
				$model->type = $t;
				if ($model->save()) {
					$this->renderPartial('create', array('model'=>$model));
				}
			}
		}
	}
}