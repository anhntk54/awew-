<div class="slideshow">
    <div class="nivoSlider">
    <?php foreach($model as $row):?>
        <?php echo Articles::model()->getImageForSlideShow($row);?>
    <?php endforeach;?>
    </div>
    <?php foreach($model as $row):?>
    <div id="htmlcaption<?php echo $row->id;?>" class="nivo-html-caption">
        <h3><a href="<?php echo Articles::model()->getTitleURL($row);?>"></a><?php echo Articles::model()->getTitle($row);?></h3>
        <ul class="entry-meta">
            <li class="posted-date"><?php echo Articles::model()->getDate($row);?></li>
            <li class="posted-comments"><a href="#">23 Comments</a></li>
        </ul>
    </div>
    <?php endforeach;?>
</div>