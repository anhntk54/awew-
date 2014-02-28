<?php
class Index_Post extends CWidget{
    public function init(){
        $criteria = new CDbCriteria;
        $criteria->order='order_possition ASC';
        $criteria->condition='type = "A" and parent_id=0';
        $model = Categories::model()->findAll($criteria);
        $this->render('index_post',array('model'=>$model));
    }
}
?>