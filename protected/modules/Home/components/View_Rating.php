<?php class View_Rating extends CWidget{
    public $model;
    public function init(){
        $this->render('view_rating',array('model'=>$this->model));
    }
}?>