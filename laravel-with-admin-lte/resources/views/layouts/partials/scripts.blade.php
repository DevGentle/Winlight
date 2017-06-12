<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<script src="{{ asset('/sweetalert-master/dist/sweetalert.min.js') }}"></script>
<script>
    $('a.delete-image').on('click', function (e) {
        e.preventDefault();

        $('#photo-gallery').append('<input type="hidden" name="delete-photo[]" value="'+ $(this).data('image-id') +'" />');

        $(this).closest('.image-container').remove();
    });
</script>
<script>
    $('body').on('click', 'a.delete-btn', function (e) {
        e.preventDefault();

        if (confirm('Are you sure ? You will not be able to recover this imaginary file!')) {
            var data = {
                "_method": "DELETE",
                "_token": jQuery(this).data('token')
            };

            jQuery.post(jQuery(this).attr('href'), data, function (response) {
                if (response) {
                    window.location.reload('admin/services');
                }
            });
        }

//        swal({
//            title: "Are you sure?",
//            text: "You will not be able to recover this imaginary file!",
//            type: "warning",
//            showCancelButton: true,
//            confirmButtonColor: "#dd6b55",
//            confirmButtonText: "Yes, delete it!",
//            closeOnConfirm: false,
//            showLoaderOnConfirm: true
//        },
//        function(isConfirm) {
//            if (isConfirm) {
//                swal(
//                    'Deleted!',
//                    'Your file has been deleted.',
//                    'success'
//                );
//
//                var data = {
//                    "_method": "DELETE",
//                    "_token": jQuery(this).data('token')
//                };
//
//                jQuery.post(jQuery(this).attr('href'), data, function (response) {
//                    if (response) {
//                        window.location.reload('admin/services');
//                    }
//                });
//            }
//        });
    });
</script>
<script type="text/javascript" src="{!! asset('js/remove.js') !!}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->