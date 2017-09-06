
/****************************************
***** For more information contact ******
*********** kkhatti@gmail.com ***********
****************************************/

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#DADADA';

	//Developed by Kamlesh - Dilse
	config.toolbar_Custom_mini =
	[
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
		{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'Undo', 'Redo' ] },
		'/',
		{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize', 'TextColor', 'BGColor' ] },
		{ name: 'tools', items: [ 'Maximize' ] }	
		
	];

	//Developed by Kamlesh - Dilse
	config.toolbar_Custom_medium =
	[
	
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', 'Preview', 'Print' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'Undo', 'Redo' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },		
		'/',
		{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize', 'TextColor', 'BGColor' ] },
		{ name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule'] },
		{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] }

		
	];	
//http://cakephpclues.blogspot.sg/2012/01/ckeditor-kcfinder-integration-with.html
	var xbasepath = 'http://localhost/backup/cakephp/js/kcfinder/';
	
	config.filebrowserBrowseUrl 		= 	xbasepath + 'browse.php?type=files';
	config.filebrowserImageBrowseUrl 	= 	xbasepath + 'browse.php?type=images';
	config.filebrowserFlashBrowseUrl	= 	xbasepath + 'browse.php?type=flash';
	config.filebrowserUploadUrl 		= 	xbasepath + 'upload.php?type=files';
	config.filebrowserImageUploadUrl 	= 	xbasepath + 'upload.php?type=images';
	config.filebrowserFlashUploadUrl 	= 	xbasepath + 'upload.php?type=flash';
	config.allowedContent = true;
	config.ignoreEmptyParagraph = false;
	config.extraAllowedContent = 'ul ol li';
};
