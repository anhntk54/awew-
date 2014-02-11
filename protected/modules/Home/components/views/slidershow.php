<div class="slideshow">
    <div class="nivoSlider">
    	<?php foreach($model as $row):?>
        <img src="<?php echo Yii::app()->baseUrl.SLIDE_SHOW.$row->image;?>" alt="<?php echo $row->alt;?>" title="#<?php echo "slideshow".$row->id;?>" />
        <?php endforeach;?>
    </div>
    <?php foreach($model as $cate):?>
    <div id="<?php echo "slideshow".$cate->id;?>" class="nivo-html-caption">
    	<h3><a href="#"><?php echo $cate->categories->title;?></a></h3>
    	<ul class="entry-meta">
    		<li class="posted-date"><?php echo date('F j, Y, g:i a', strtotime ($cate->categories->create_date));?></li>
    		<li class="posted-comments"><a href="#"><?php echo CategoryRelation::model()->countArticleOfCate($cate->category_id). " (XxX)";?></a></li>
    	</ul>
    </div>
    <?php endforeach;?>
</div>
<div class="clear"></div>