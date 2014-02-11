<div class="container">
    <!-- Slider -->
    <?php $this->widget('Home.components.SliderShow');?>
	<!-- Filters -->    
    <?php $this->widget('Home.components.Category');?>
    <!-- Primary content portfolio -->
    <div id="primary-fullwidth" class="portfolio-content clearfix">
        <!-- Post -->  
        <?php foreach($model as $row):?> 
        <article class="category-post-alt1">            
            <div class="entry-thumb hover-image-alt1 video">
            	<?php echo Articles::model()->getThumIndex($row);?>
			</div>
            <h3 class="entry-title">
            	<a href="<?php echo Articles::model()->getTitleURL($row);?>"><?php echo $row->title;?></a>
            </h3>
            <ul class="entry-meta">
                <li class="posted-date"><?php echo Articles::model()->getDate($row);?></li>
                <li class="posted-comments"><a href="#">23 Comments</a></li>
            </ul>
            <div class="entry-content">
                <?php foreach($row->articlefiles as $linkdown):?>
                <?php if($row->articlefiles != null):?>
            	   <div class="download">
                        <span class="text-download">DOWNLOAD: </span> 
                        <a href="<?php echo $linkdown->path;?>">PART <?php echo $linkdown->chapter;?></a>
                   </div>
                <?php endif;?>
                <?php endforeach;?>
                <!--<a href="#" class="more-link">Read more</a>-->
			</div>
        </article>
        <div class="clear"></div>
        <?php endforeach;?>  
    </div>
</div>