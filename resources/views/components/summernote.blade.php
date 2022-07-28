<link href="/libs/summernote/summernote-lite.min.css" rel="stylesheet">
<script src="/libs/summernote//summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('#{{ $textId }}').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                ['font', ['bold', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
                ['fontname', ['fontsize', 'fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['height', ['height']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['codeview']],
            ]
        });
    });
</script>
