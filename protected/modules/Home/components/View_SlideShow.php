<?php class View_SlideShow extends CWidget{
    public $model;
    public function init(){
        $this->render('view_slideshow',array('model'=>$this->model));
    }
}?>