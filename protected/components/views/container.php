<!-- Header group -->
<div class="container">
    <!-- Top menu -->
    <ul class="top-menu">
        <li><a href="index-2.html">Home</a></li>
        <li><a href="shortcodes.html">Shortcodes</a></li>
        <li><a href="404.html">404 Page</a></li>
        <li><a href="http://themeforest.net/user/Voodoo-pixel?ref=Voodoo-pixel" target="_blank">Buy template</a></li>
    </ul>    
    <!-- Header -->
	<div id="header">    
        <div id="logo">
        	<h1 class="site-title"><a href="index-2.html"><span>M</span>adidus</a></h1>
            <h2 class="site-description">Magazine Template</h2>
        </div>
        <div class="banner-top"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner.jpg" alt="Themeforest"></div>
    </div>    
    <!-- Primary navigation -->
    <ul id="menu">
    	<li><a href="index-2.html" class="current"><i class="icon-home"></i></a></li>
    	<li><a href="index-2.html">Home</a>
        	<ul>
                <?php foreach($model_parent_cate as $row_parent_cate):?>
            	   <li><a href="index-2.html"><?php echo $row_parent_cate->title;?></a></li>
                <?php endforeach;?>
            </ul>
        </li>
        <li><a href="blog-1.html">Blog category</a>
            <ul>
                <li><a href="blog-1.html">2 Columns posts</a></li>
                <li><a href="blog-2.html">1 Column posts</a></li>
                <li><a href="blog-3.html">Standard layout</a>
                	<ul>
                    	<li><a href="#">This is</a></li>
                        <li><a href="#">third</a></li>
                        <li><a href="#">dropdown link.</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="post.html">Single post</a>
            <ul>
                <li><a href="post-1.html">Post with image</a></li>
                <li><a href="post-2.html">Post with video</a></li>
                <li><a href="post-3.html">Post with slideshow</a></li>
            </ul>
        </li>
        <li><a href="shortcodes.html">Shortcodes</a></li>
        <li><a href="contact.html">Contact us</a></li>
    </ul>    
</div>