<div class="row">
    <?php 
        foreach($model as $row){
            $this->widget('Home.components.Index_OnePost',array('value'=>$row));
        }
    ?>
</div>