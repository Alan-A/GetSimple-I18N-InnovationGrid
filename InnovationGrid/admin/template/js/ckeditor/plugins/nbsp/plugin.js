/**
 * @file insert Non-Breaking Space for CKEditor
 * Copyright (C) 2014 Alfonso Martínez de Lizarrondo
 * Create a command and enable the Ctrl+Space shortcut to insert a non-breaking space in CKEditor
 *
 * Modified with added button and icon functions.
 * Modification copyright (C) 2020 Alan Amos
 * 
 */

CKEDITOR.plugins.add( 'nbsp',
{
	icons: 'nbsp',
	init : function( editor )
	{
		// Insert &nbsp; if Ctrl+Space is pressed:
		editor.addCommand( 'insertNbsp', {
			exec: function( editor ) {
//			editor.insertHtml( 'nb', 'text' );
				editor.insertHtml( '&nbsp;', 'text' );
//			editor.insertHtml( 'sp', 'text' );
			}
		});
		
		editor.ui.addButton( 'nbsp', {
			label: 'Insert nbsp',
			command: 'insertNbsp',
//		allowedContent: '&nbsp;',
			toolbar: 'insert'
		});
		
		editor.setKeystroke( CKEDITOR.CTRL + 32 /* space */, 'insertNbsp' );
	}

} );
