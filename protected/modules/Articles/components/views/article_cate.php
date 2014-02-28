<div id="primary-left">
    <div class="category-title">
        <h4><?php echo $model->title;?></h4>
        <span><a href="#">View all posts</a></span>
    </div>
<?php foreach($model->articles as $row):?>
        <?php $this->widget('Articles.components.Index_OnePost',array('value'=>$row));?>
<?php endforeach;?>
</div>