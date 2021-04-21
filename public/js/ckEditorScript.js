ClassicEditor
    .create( document.querySelector( '#editor' ), {
      
      toolbar: {
        items: [
          'heading',
          '|',
          'bold',
          'italic',
          'link',
          'bulletedList',
          'numberedList',
          '|',
          'outdent',
          'indent',
          '|',
          'undo',
          'redo'
        ]
      },
      language: 'en',
      licenseKey: '',
    } )
    .then( editor => {
      editor.editing.view.change( writer => { writer.setStyle( 'height', '400px', editor.editing.view.document.getRoot() ); } );
      window.editor = editor;
    } )
    .catch( error => {
      console.error( 'Oops, something went wrong!' );
      console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
      console.warn( 'Build id: 5jqe5mxvu8fo-a3158np2os9l' );
      console.error( error );
    } );