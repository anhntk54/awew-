<div id="primary-left">  
<?php foreach($model->articles as $row):?>
        <?php $this->widget('Articles.components.Index_OnePost',array('value'=>$row));?>
<?php endforeach;?>
</div>