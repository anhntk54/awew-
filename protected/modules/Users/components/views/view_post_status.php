<div class="post-status-user">
	<textarea id="comments" placeholder="Bạn đang nghĩ gì?"></textarea>
	<div class="div-button">
		<i class="fa fa-camera"></i>
		<button>Đăng bài</button>
	</div>
	<div class="clr"></div>
</div>
<script type="text/javascript">
	var txt = jQuery('#comments'),
    hiddenDiv = jQuery(document.createElement('div')),
    content = null;

	txt.addClass('txtstuff');
	hiddenDiv.addClass('hiddendiv common');

	jQuery('body').append(hiddenDiv);

	txt.on('keyup', function () {

	    content = jQuery(this).val();

	    content = content.replace(/\n/g, '<br>');
	    hiddenDiv.html(content + '<br class="lbr">');
	    height = hiddenDiv.height() > 40 ? hiddenDiv.height() : 40;
	    jQuery(this).css('height', height);

	});
</script>