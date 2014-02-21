<?php
class One_Post extends CWidget{
	public $value;
    public function init(){
        $this->render('one_post',array('row'=>$this->value));
    }
}
?>