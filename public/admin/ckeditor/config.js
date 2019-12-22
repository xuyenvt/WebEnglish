
CKEDITOR.editorConfig = function( config )
{
        // Define changes to default configuration here. For example:
    config.language = 'en';
    
        // config.uiColor = '#AADC6E';
        
        config.toolbar_Full = [
            ['Source','-','Save','NewPage','Preview','-','Templates'],
            ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
            ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
            '/',
            ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
            ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
            ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
            ['BidiLtr', 'BidiRtl' ],
            ['Link','Unlink','Anchor'],
            ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe'],
            '/',
            ['Styles','Format','Font','FontSize'],
            ['TextColor','BGColor'],
            ['Maximize', 'ShowBlocks','-','About']
            ];
        
        config.entities = false;
        //config.entities_latin = false;
        

        config.filebrowserBrowseUrl = 'localhost/WebEnglish/public/admin/fckeditor/ckfinder/ckfinder.html';

        config.filebrowserImageBrowseUrl = 'localhost/WebEnglish/public/admin/fckeditor/ckfinder/ckfinder.html?type=Images';

        config.filebrowserFlashBrowseUrl = 'localhost/WebEnglish/public/admin/fckeditor/ckfinder/ckfinder.html?type=Flash';

        config.filebrowserUploadUrl = 'localhost/WebEnglish/public/admin/fckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

        config.filebrowserImageUploadUrl = 'localhost/WebEnglish/public/admin/fckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

        config.filebrowserFlashUploadUrl = 'localhost/WebEnglish/public/admin/fckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

        /*
        config.filebrowserBrowseUrl = '{{ url('public/admin/ckfinder/ckfinder.html') }}';

        config.filebrowserImageBrowseUrl = '{{ asset('public/admin/ckfinder/ckfinder.html?type=Images') }}';

        config.filebrowserFlashBrowseUrl = '{{ asset('public/admin/ckfinder/ckfinder.html?type=Flash') }}';

        config.filebrowserUploadUrl = '{{ asset('public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}';

        config.filebrowserImageUploadUrl = '{{ asset('public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}';

        config.filebrowserFlashUploadUrl ='{{ asset('public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}';*/

};  