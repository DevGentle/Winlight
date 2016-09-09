/**
 * Created by Godoak on 9/8/2016 AD.
 */

jQuery(document).ready(function ($) {
    $('body').on('click', 'a.delete-btn', function (e) {
        e.preventDefault();

        var data = {
            "_method": "DELETE",
            "_token": jQuery(this).data('token')
        };

        jQuery.post(jQuery(this).attr('href'), data, function (response) {
            if (response) {
                window.location.reload('admin/services');
            }
        });
    });
});
