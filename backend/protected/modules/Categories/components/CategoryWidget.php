<<<<<<< HEAD
<?php

class CategoryWidget extends CWidget
{
    public $model;
    public $type ='A';
    public function init()
    {

        $parents = Categories::model()->findAll('parent_id = 0 and type ="'.$this->type.'"');
        $this->render('category',array('parents'=>$parents));
    }
}

=======
<?php

class CategoryWidget extends CWidget
{
    public $model;
    public $type ='A';
    public function init()
    {

        $parents = Categories::model()->findAll('parent_id = 0 and type ="'.$this->type.'"');
        $this->render('category',array('parents'=>$parents));
    }
}

>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
?>