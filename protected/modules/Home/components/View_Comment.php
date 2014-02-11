<?php
class View_Comment extends CWidget{
    public $model;
    public function init(){
        $this->render('view_comment',array('model'=>$this->model));
    }
}
?>