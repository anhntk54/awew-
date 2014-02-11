<?php class View_SubmitRating extends CWidget{
    public $model;
    public function init(){
        $this->render('view_submitrating',array('model'=>$this->model));
    }
}?>