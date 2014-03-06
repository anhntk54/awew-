<header id="masthead" class="clearfix">
	<div class="prl-header-logo"><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/logo.png" alt="Original" /></a></div>
	
	<div class="prl-header-social">
		<a href="#" class="fa fa-facebook" title="Facebook" data-prl-tooltip></a>
		<a href="#" class="fa fa-twitter" title="Twitter" data-prl-tooltip></a>
		<a href="#" class="fa fa-pinterest" title="Pinterest" data-prl-tooltip></a>
		<a href="#" class="fa fa-google-plus" title="Google plus" data-prl-tooltip></a>
		<a href="#" class="fa fa-linkedin" title="LinkedIn" data-prl-tooltip></a>
	</div>
	<div class="prl-header-right">
		<span class="prl-header-custom-text"><i class="fa fa-phone-square"></i> +174 123 456 789</span>
		<span class="prl-header-time"><i class="fa fa-clock-o"></i> Monday - Nov 12th, 2013</span>
	</div>	
</header>
<script>
	$(function () {
		var example = $('#sf-menu').superfish({
			delay:       400,
			animation:   {opacity:'show',height:'show'},
			speed:       'fast', 
			autoArrows:  false
		});
		
	});
</script>