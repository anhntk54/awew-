<?php
class Article_Cate extends CWidget{
    public $model;
    public function init(){
        $this->render('article_cate',array('model'=>$this->model));
    }
}
?>