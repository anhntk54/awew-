<?php
class SliderShow extends CWidget{
    public function init(){
        $model = Slideshow::model()->findAll();
        $this->render('slidershow',array('model'=>$model));
    }
}
?>