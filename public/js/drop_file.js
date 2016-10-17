jQuery(function($) {		
	
	$('.modalform input[type=file]').ace_file_input({
		style:'well',
		btn_choose:'Drop files here or click to choose',
		btn_change:null,
		no_icon:'ace-icon fa fa-cloud-upload',
		droppable:true,
		thumbnail:'large'
	})
	

	$('.modalform').on('shown.bs.modal', function () {
		if(!ace.vars['touch']) {
			$(this).find('.chosen-container').each(function(){
				$(this).find('a:first-child').css('width' , '210px');
				$(this).find('.chosen-drop').css('width' , '210px');
				$(this).find('.chosen-search input').css('width' , '200px');
			});
		}
	})

});