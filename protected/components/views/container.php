<!-- Header group -->
<div class="container">
    <!-- Top menu -->
    <?php $this->widget('application.components.Top_Menu');?> 
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