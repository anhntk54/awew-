<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
        $criteria = new CDbCriteria;
        $criteria->order='id DESC';    
        $criteria->condition='type != "S"';
        $count=Articles::model()->count($criteria);
        $pages=new CPagination($count);
        $pages->pageSize=12;
        $pages->applyLimit($criteria);
		$model = Articles::model()->findAll($criteria);
        
		$this->render('index',array('model'=>$model,'pages'=>$pages));
	}
    public function actionView($id){
        $model = Articles::model()->findByPk($id);
        if($model != null){
            $this->render('view',array('model'=>$model));
        }else{
            throw new CHttpException(404,'The requested page does not exist.');
        }
    }
    public function actionError(){
        $this->render('error');
    }
    public function actionRating()
	{
		if (isset($_POST['rate'])) {
            $value_rate = $_POST['rate'];
            $article_id = $_POST['gid'];
            
			$rate = new Rating;	
			$rate->user_id = 0;
			$rate->article_id = $_POST['gid'];
            $rate->rate = $value_rate;
            $rate->save(false);
            
            $criteria = new CDbCriteria;
            $criteria->condition='article_id='.$article_id;
            $model_rate = Rating::model()->findAll($criteria);
            $count = count($model_rate);
            $sum_rate = 0;
            foreach($model_rate as $row){
                $sum_rate = $sum_rate + $row->rate;
            }
            $avg_rate = $sum_rate/$count;
            Articles::model()->updateByPk($article_id,array('rate'=>$avg_rate));
		}
	}
}