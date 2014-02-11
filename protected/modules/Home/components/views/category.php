<div id="filters">
	<a class="show-category">
		<span>Show category</span>
        <!--<div class="search-form" style="float: right; overflow: hidden; width: 30%;">
        	<input type="text" placeholder="Search..." style="float: left; width: 82%;"/>
        	<input type="submit" style="float: right;" id="_search"/>
        </div>-->
	</a>
	<ul class="portfolio-filter">
		<li><a href="#" class="selected-portfolio-filter" data-filter="*">All</a></li>
        <?php foreach($model as $key=>$row):?>
        <li><a href="#" data-filter=".cat<?php echo $key+1;?>"><?php echo $row->title;?></a></li>
        <?php endforeach;?>
	</ul>
</div>