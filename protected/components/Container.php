<?php
class Container extends CWidget{
    public function init(){
        $criteria = new CDbCriteria;
        $criteria->condition='parent_id=0';
        $criteria->order='order_possition DESC';
        $model_parent_cate = Categories::model()->findAll($criteria);
        $this->render('container',array('model_parent_cate'=>$model_parent_cate));
    }   
}
?>