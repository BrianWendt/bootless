var upload_target;
jQuery(document).ready(function ($) {

    $('.upload-button').click(function () {
        upload_target = $(this).data('target');
        formfield = $(upload_target).attr('name');
        tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
        return false;
    });

    window.send_to_editor = function (html) {
        imgurl = $('img', html).attr('src');
        $(upload_target).val(imgurl);
        tb_remove();
    };

});