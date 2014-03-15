function ViewEvent (id,e) {
	this.e = e;
	this.statusUpimage = 0,this.dataImage = null;
	this.maxHeight = 385,minHeight = 0;
	this._startX = 0;			// mouse starting positions
	this._startY = 0;
	// var _offsetX = 0;			// current element offset
	this._offsetY = 0;
	this._dragElement;			// needs to be passed from OnMouseDown to OnMouseMove
	// var _oldZIndex = 0;			// we temporarily increase the z-index during drag
	this.init = function () {
		console.log('aaaaaaaaaaaaaaa');
		document.getElementById('filesToUpload').addEventListener('change', this.fileSelect, false);
		this.clickSaveImage(this.e);
		alert('1c1');
	}
this.getMinHeight = function  () {
	if (jQuery('.drag').height() <= maxHeight) {
		minHeight = jQuery('.drag').height();
	}else{
		minHeight = maxHeight;
	}
	return minHeight;
}
this.TypeFile = function()
{
    var fup = document.getElementById('filesToUpload');
    var fileName = fup.value;
    var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
    if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "PNG" || ext == "png" )
    {
        return ext;
    }
}
this.clickSaveImage = function (e) {
	
	document.getElementById('filesToUpload').click();
	jQuery('.save-image').click(function(e) {
	if (this.statusUpimage == 0) {
		console.log('nnnnn');
		document.getElementById('filesToUpload').click();
	}else{
		if (this.dataImage != null) {
			topImage = jQuery('.drag').position().top;
			style = 'top:'+topImage +'px;position: relative;';
			jQuery.ajax({
			  url: 'http://localhost/giaingoaihang/index.php?r=Event/default/saveimage',
			  type: 'POST',
			  data: {name:this.dataImage.name,style:style,id:1},
			  success: function(data) {
			  	console.log(data);
			    jQuery('.image-logo a img').attr('src',data.linkI);
			    jQuery('.save-image').html('Thay đổi ảnh bìa');
			    jQuery('.delete-image').hide();
			    jQuery('.event-title').show();
			    this.statusUpimage = 0;
				this.destroyDrag();	    
				jQuery('.save-image').css('display','');
			  },
			});
		};
	};
});
}
this.fileSelect = function (evt) {
    if (window.File && window.FileReader && window.FileList && window.Blob) {

        var files = evt.target.files;
        var result = '';
        var file;
        console.log(files,'askj');
        alert('1c1');
        for (var i = 0; file = files[i]; i++) {
            // if the file is not an image, continue
            if (!file.type.match('image.*')) {
                continue;
            }
            if (file.size > 1000) {
            	// alert('Ảnh quá lớn');
            	// return false;
            };
            alert('1c');
            reader = new FileReader();
            status = 0;
            var imageU  = new Image();
            reader.onload = (function (tFile) {
                return function (evt) {
                	// imageU.src = evt.target.result;
                	alert('c');
                	imageU.onload = function() {
		            var w = this.width;
		                alert('a');
        			};
			        imageU.onerror= function() {
			            alert('Invalid file type: '+ file.type);
			        }; 
                	// alert(imageU.width); 
                	if (imageU.width >= 0) {
                		var div = document.createElement('div');
	                    var type_image = this.TypeFile();
	                    var dataU = [];
	                    dataU.push({
			                image : evt.target.result,
			                type : type_image,
			            });
			            this.sendImages(dataU);
                	}else{
                		status = 1;
                	}
                };
            }(file));
            if (status == 1) {
            	alert('aaa');
            }else{
            	reader.readAsDataURL(file);
            }
        }
    } else {
        alert('The File APIs are not fully supported in this browser.');
    }
}
this.sendImages = function (ima) {
	jQuery.ajax({
	  url: 'http://localhost/giaingoaihang/index.php?r=Event/default/image',
	  type: 'POST',
	  data: {data: JSON.stringify(ima)},
	  success: function(data) {
	  	this.dataImage = data;
	    jQuery('.image-logo a img').attr('src',data.linkI);
	    jQuery('.save-image').html('Lưu hình ảnh');
	    jQuery('.save-image').css('display','block');
	    jQuery('.delete-image').show();
	    jQuery('.event-title').hide();
	    this.statusUpimage = 1;
	    height = jQuery('.drag').width() * data.height / data.width;
	    console.log(height);
	    if (height >= maxHeight) {
	    	height = maxHeight;
	    };
	    jQuery('.image-logo').css('height',height);
	    this.InitDragDrop();
	  },
	});
	
}

this.destroyDrag = function  () {
	document.onmousedown = null;
	document.onmouseup = null;
}
this.InitDragDrop = function ()
{
	document.onmousedown = this.OnMouseDown;
	document.onmouseup = this.OnMouseUp;
}

this.OnMouseDown = function (e)
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
		this._startX = e.clientX;
		_startY = e.clientY;
		
		// grab the clicked element's position
		_offsetX = this.ExtractNumber(target.style.left);
		_offsetY = this.ExtractNumber(target.style.top);
		
		// bring the clicked element to the front while it is being dragged
		// _oldZIndex = target.style.zIndex;
		// target.style.zIndex = 10000;
		
		// we need to access the element in OnMouseMove
		this._dragElement = target;

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

this.ExtractNumber = function (value)
{
	var n = parseInt(value);
	
	return n == null || isNaN(n) ? 0 : n;
}

this.OnMouseMove = function (e)
{
	if (e == null) 
		var e = window.event; 
		var changY = this._offsetY + e.clientY -this._startY;
		var max = jQuery('.drag').height() - 385;
		if((changY >= -max) && changY <= 0){
			this._dragElement.style.position = 'relative';
			this._dragElement.style.top = changY + 'px';
		}
}

this.OnMouseUp = function(e)
{
	if (this._dragElement != null)
	{
		this._dragElement.style.zIndex = _oldZIndex;
		// this._dragElement.style.position = 'static';
		// we're done with these events until the next OnMouseDown
		document.onmousemove = null;
		document.onselectstart = null;
		this._dragElement.ondragstart = null;

		// this is how we know we're not dragging
		this._dragElement = null;
	}
}
}