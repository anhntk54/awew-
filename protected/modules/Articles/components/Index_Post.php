<?php
class Index_Post extends CWidget{
    public function init(){
        $criteria = new CDbCriteria;
        $criteria->order='id DESC';
        $criteria->condition='active=2';
        $criteria->limit = 4;
        $model = Articles::model()->findAll($criteria);
        $this->render('index_post',array('model'=>$model));
    }
}
?>