<head>
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools",
                "textcolor"
            ],
            style_formats: [
                {title: 'Div', format: 'div'}
            ],
            toolbar: "insertfile undo redo | fontsizeselect | forecolor backcolor | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
            content_css: [
                '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                '//www.tinymce.com/css/codepen.min.css'
            ],
            file_browser_callback: function(field_name, url, type, win) {
                win.document.getElementById(field_name).value = 'my browser value';
            },
            file_browser_callback_types: 'file image media',
            file_picker_types: 'file image media',
            images_upload_url: 'postAcceptor.php',
            images_upload_base_path: '/image/tinymce',
            images_upload_credentials: true
        });
    </script>
</head>
