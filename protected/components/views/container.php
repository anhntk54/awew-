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
    <?php $this->widget('application.components.Menu');?> 
</div>