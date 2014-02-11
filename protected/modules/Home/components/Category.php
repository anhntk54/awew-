<?php
class Category extends CWidget{
    public function init(){
        $criteria = new CDbCriteria;
        $criteria->condition = 'parent_id=0';
        $model = Categories::model()->findAll($criteria);
        $this->render('category',array('model'=>$model));
    }
}
?>