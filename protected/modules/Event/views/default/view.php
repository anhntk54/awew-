<section id="main" class="prl-span-9">
	<div id="slider">
		<div id="homeslider" class="fullwidth flexslider">
			<article>
				<div class="image-logo">
					<a href="#">
						<img class="drag" src="./images/event/image.jpg">
					</a>
					<button class="chang-image prl-button prl-button-primary">Thay đổi ảnh bìa </button>
				</div>
				<div class="slider-title">
					<h2>
						<a href="single.php"><?php echo $model->title; ?></a> <span class="prl-badge prl-badge-success">Dicussion</span>
					</h2>
				</div>
				<div class="slider-meta">
					<span>Nov 23th, 2013</span> 
					<i class="fa fa-comment-o"></i> 
					<span class="cm">04</span>
				</div>				
			</article>
		</div><!-- #slider -->	
	</div>
</section>
<input type="file" name="filesToUpload[]" id="filesToUpload" />
<style type="text/css">
#filesToUpload{
	display: none;
}
</style>
<script type="text/javascript">
$('.chang-image').click(function(e) {
	document.getElementById('filesToUpload').click();
});
var count = 0;
function TypeFile()
{
    var fup = document.getElementById('filesToUpload');
    var fileName = fup.value;
    var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
    if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "PNG" || ext == "png" )
    {
        return ext;
    }
}
function fileSelect(evt) {
    if (window.File && window.FileReader && window.FileList && window.Blob) {

        var files = evt.target.files;
        var result = '';
        var file;
        console.log(files);
        for (var i = 0; file = files[i]; i++) {
            // if the file is not an image, continue
            if (!file.type.match('image.*')) {
                continue;
            }
            reader = new FileReader();
            reader.onload = (function (tFile) {
                return function (evt) {
                    var div = document.createElement('div');
                    var type_image = TypeFile();
                    var data = [];
                    data.push({
		                image : evt.target.result,
		                type : type_image,
		            });
		            sendImages(data);
                };
            }(file));
            reader.readAsDataURL(file);
            
        }
    } else {
        alert('The File APIs are not fully supported in this browser.');
    }
}
var heightImage = 0;
function sendImages (ima) {
	jQuery.ajax({
	  url: '<?php echo Yii::app()->createUrl("/Event/default/image") ?>',
	  type: 'POST',
	  data: {data: JSON.stringify(ima)},
	  success: function(data) {
	  	console.log(data.linkI);
	    $('.image-logo a img').attr('src',data.linkI);
	    $('.image-logo').attr('style','height: 385px;');
	  	heightImage = data.heightI;
	  	console.log(heightImage);
	  },
	});
	
}
document.getElementById('filesToUpload').addEventListener('change', fileSelect, false);

var _startX = 0;			// mouse starting positions
var _startY = 0;
var _offsetX = 0;			// current element offset
var _offsetY = 0;
var _dragElement;			// needs to be passed from OnMouseDown to OnMouseMove
var _oldZIndex = 0;			// we temporarily increase the z-index during drag
var _debug = $('debug');	// makes life easier


InitDragDrop();

function InitDragDrop()
{
	document.onmousedown = OnMouseDown;
	document.onmouseup = OnMouseUp;
}

function OnMouseDown(e)
{
	// IE is retarded and doesn't pass the event object
	if (e == null) 
		e = window.event; 
	
	// IE uses srcElement, others use target
	var target = e.target != null ? e.target : e.srcElement;
		// console.log(e.button,window.event);
	// for IE, left click == 1
	// for Firefox, left click == 0
	if ((e.button == 1 && window.event != null || e.button == 0) && target.className == 'drag'){
		// console.log(e.target);
		// grab the mouse position
		_startX = e.clientX;
		_startY = e.clientY;
		
		// grab the clicked element's position
		_offsetX = ExtractNumber(target.style.left);
		_offsetY = ExtractNumber(target.style.top);
		
		// bring the clicked element to the front while it is being dragged
		_oldZIndex = target.style.zIndex;
		target.style.zIndex = 10000;
		
		// we need to access the element in OnMouseMove
		_dragElement = target;

		// tell our code to start moving the element with the mouse
		document.onmousemove = OnMouseMove;
		
		// cancel out any text selections
		document.body.focus();
		
		// prevent text selection in IE
		document.onselectstart = function () { return false; };
		// prevent IE from trying to drag an image
		target.ondragstart = function() { return false; };
		
		// prevent text selection (except IE)
		return false;
	}
}

function ExtractNumber(value)
{
	var n = parseInt(value);
	
	return n == null || isNaN(n) ? 0 : n;
}

function OnMouseMove(e)
{
	if (e == null) 
		var e = window.event; 
		var changX = _offsetX + e.clientX - _startX ;
		var changY = _offsetY + e.clientY - _startY;
		console.log(_startX,_startY,_offsetX,_offsetY,changX,changY);
		// if((changX == 0)){
			if((changY >= -110)){
				_dragElement.style.position = 'relative';
				// _drag?Element.style.left = changX + 'px';
				_dragElement.style.top = changY + 'px';
			}
	
		// }
	// 	_dragElement.style.position = 'relative';
	// 	_dragElement.style.left = (_offsetX + e.clientX - _startX) + 'px';
	// _dragElement.style.top = (_offsetY + e.clientY - _startY) + 'px';
	// 	console.log(_startX,_startY,_offsetX,_offsetY);
}

function OnMouseUp(e)
{
	if (_dragElement != null)
	{
		_dragElement.style.zIndex = _oldZIndex;
		// _dragElement.style.position = 'static';
		// we're done with these events until the next OnMouseDown
		document.onmousemove = null;
		document.onselectstart = null;
		_dragElement.ondragstart = null;

		// this is how we know we're not dragging
		_dragElement = null;
	}
}
</script>