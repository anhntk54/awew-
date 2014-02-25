
<ul id="menu">
	<li><a href="index-2.html" class="current"><i class="icon-home"></i></a></li>
    <?php foreach($model_parent_cate as $row_parent_cate):?>
    <li><a href="#"><?php echo $row_parent_cate->title;?></a>
        <?php
            $criteria = new CDbCriteria;
            $criteria->condition='parent_id='.$row_parent_cate->id;
            $criteria->order='order_possition asc';
            $model_children_cate = Categories::model()->findAll($criteria);
        ?>
        <ul>
            <?php foreach($model_children_cate as $row_children_cate):?>
                <li><a href="post-1.html"><?php echo $row_children_cate->title;?></a></li>
            <?php endforeach;?>
        </ul>
    </li>
    <?php endforeach;?>
        
    <?php foreach($model_menu as $row):?>
        <li><a href="#"><?php echo $row->name;?></a></li>
    <?php endforeach;?>
</ul>   