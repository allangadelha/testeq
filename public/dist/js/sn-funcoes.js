$(document).ready(function() {
    $('.conteudotextarea').summernote({
        onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0],editor,welEditable);
        },
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['fontsize']],
//            ['font', ['fontsize', 'fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
//            ['view', ['fullscreen']],
            ['style', ['style']],
//            ['table', ['table']],
//            ['insert', ['link', 'picture', 'hr']],
//            ['help', ['help']]
        ],
        lang: 'pt-BR',
        video: 'false',
        height: 300,
        tabsize: 2,
        placeholder: 'Escreva aqui as observações sobre o prontuário',
        selectFromFiles: 'imagens'
    });
    
    $('[data-toggle="popover"]').popover();
    
});