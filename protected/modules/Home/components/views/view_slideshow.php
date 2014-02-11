 <?php if($model->articleimages != null){?>
<div class="slideshow">
    <div class="nivoSlider">
            <?php foreach($model->articleimages as $image):?>
                <img src="<?php echo Yii::app()->baseUrl.formatPath($image->path).$image->image;?>" alt="<?php echo $image->alt;?>"/>
            <?php endforeach;?>
    </div>
</div>
<?php }else{?>
    <?php if($model->path != "" and $model->image != ""):?>
    <div class="entry-thumb hover-image-alt1 picture">
    	<a href="<?php echo Yii::app()->request->baseUrl.'/'.formatPath($model->path).'thumbai_300/'.$model->image;?>" rel="prettyPhoto">
            <img alt="<?php echo $model->title;?>" src="<?php echo  Yii::app()->request->baseUrl.'/'.formatPath($model->path).'thumbai_300/'.$model->image;?>" style="opacity: 1;"/>
        </a>
    </div>
    <?php endif;?>
<?php }?>