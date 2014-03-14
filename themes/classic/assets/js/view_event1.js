function EventView (data) {
	this.init = function () {
		// alert(this.data);
	};
	jQuery(data.buttonUpload).click(function () {
		jQuery(data.fileUpload).click();
	});
}
// console.log('a');