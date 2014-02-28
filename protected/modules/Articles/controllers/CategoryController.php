<?php

class CategoryController extends Controller
{
	public function actionViewArticleOfCate($id)
	{
        $criteria = new CDbCriteria;
        $criteria->order='id DESC';
        $criteria->condition='category_id='.$id;
                
        $count=CategoryRelation::model()->count($criteria);
        $pages=new CPagination($count);
        $pages->pageSize=1;
        $pages->applyLimit($criteria);
        	   	   
        $model = CategoryRelation::model()->findAll($criteria);
                        
        $this->render('view',array('model'=>$model,'pages'=>$pages));
	}
}