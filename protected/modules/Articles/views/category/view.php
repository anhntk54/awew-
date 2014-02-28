<div id="primary-left">  
<?php foreach($model as $row):?>
        <?php $model_a = Articles::model()->findByPk($row->table_id);?>
        <?php $this->widget('Articles.components.Index_OnePost',array('value'=>$model_a));?>
<?php endforeach;?>

<?php 
    $this->widget('CLinkPager', array(
        'pages' => $pages,
    ));
?>
</div>