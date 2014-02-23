<?php
class Index_OnePost extends CWidget{
	public $value;
    public function init(){
        $this->render('index_onepost',array('row'=>$this->value));
    }
}
?>