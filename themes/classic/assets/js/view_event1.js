function a(){
	this.name =1;
 	this.ba =function(){
 		console.log('a',this.name);
 	}
 };
 alert('a');
function EventView (data) {
	var statusUpimage = 0;
	var dataImage = null;
	var t = this;
	this.init = function () {
		alert('a');
	};
	this.TypeFile = function(){
	    var fup = document.getElementById('filesToUpload');
	    var fileName = fup.value;
	    var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
	    if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "PNG" || ext == "png" )
	    {
	        return ext;
	    }
	}
	this.sendImages = function (ima) {
		alert('1c');
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
		    // this.InitDragDrop();
		  },
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
	            reader.onload = (function (tFile) {
	                return function (evt) {
	                	var type_image = t.TypeFile();
	                    var dataU = [];
	                    dataU.push({
			                image : evt.target.result,
			                type : type_image,
			            });
			            t.sendImages(dataU);
	                };
	            }(file));
	            reader.readAsDataURL(file);
	        }
	    } else {
	        alert('The File APIs are not fully supported in this browser.');
	    }
	}
	document.getElementById('filesToUpload').addEventListener('change', t.fileSelect, false);
	jQuery(data.buttonUpload).click(function () {
		t.init();
		// console.log('bat su kien',data.fileUpload,this.data);
		if (statusUpimage == 0) {
			console.log('bat su kien',data.fileUpload);
			jQuery(data.fileUpload).click();
		}else{
			if (this.dataImage != null) {
				topImage = jQuery(data.nameImg).position().top;
				style = 'top:'+topImage +'px;position: relative;';
				jQuery.ajax({
				  url: 'http://localhost/giaingoaihang/index.php?r=Event/default/saveimage',
				  type: 'POST',
				  data: {name:this.dataImage.name,style:style,id:1},
				  success: function(data) {
				  	console.log(data);
				    jQuery(data.nameImg).attr('src',data.linkI);
				    jQuery('.save-image').html('Thay đổi ảnh bìa');
				    jQuery('.delete-image').hide();
				    jQuery('.event-title').show();
				    this.statusUpimage = 0;
					// this.destroyDrag();	    
					jQuery('.save-image').css('display','');
				  },
				});
			};
		};
	});
}