
<ul id="menu">
	<li><a href="<?php echo Yii::app()->createUrl('/Home/default'); ?>" class="current"><i class="icon-home"></i></a></li>
    <?php foreach($model_parent_cate as $row_parent_cate):?>
    <li><a href="#"><?php echo $row_parent_cate->title;?></a>
        <ul>
            <?php foreach($row_parent_cate->children as $row_children_cate):?>
                <li><a href="post-1.html"><?php echo $row_children_cate->title;?></a></li>
            <?php endforeach;?>
        </ul>
    </li>
    <?php endforeach;?>
        
    <?php foreach($model_menu as $row):?>
        <li><a href="<?php echo $row->link; ?>"><?php echo $row->name;?></a></li>
    <?php endforeach;?>
</ul>   