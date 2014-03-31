<div class="post-status-user">
	<textarea id="comments" placeholder="Bạn đang nghĩ gì?"></textarea>
	<div class="div-button">
		<a href="javscript::void(0);"><i class="fa fa-camera"></i></a>
		<button>Đăng bài</button>
		<div class="status-post">
			<a href="javscript::void(0);">Công khai</a>
			<i class="fa fa-filter fa-lg"></i>
			<div class="types">
				<a href="javscript::void(0);">Riêng tư</a>
			</div>
		</div>
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
	jQuery('.status-post').click(function() {
		jQuery('.types').slideToggle();
	})
</script>