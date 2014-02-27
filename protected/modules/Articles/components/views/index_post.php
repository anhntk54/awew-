<div id="primary-left">   
    <?php 
        foreach($model as $row){
            $this->widget('Articles.components.Index_OnePost',array('value'=>$row));
        }
    ?>
</div>