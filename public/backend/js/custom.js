/****************To get the sub category by id on the add page********/
$(document).ready(function() {
    $("#selected_category_id").change(function() {
        var id = $("#selected_category_id").val();
        $.ajax({
            type: "GET",
            url: "/get_sub_cat/" + id,
            dataType: "html",
            success: function(response) {
                $('#selected_sub_cat_id').html(response);
            }
        });
    });
});


$(function() {
    $("#input_file_choose").change(function() {
        readURL(this);
    });
});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            //alert(e.target.result);
            $('#input_image_selected_show').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}






$(function() {
    $("#input_file_choose_tow").change(function() {
        readURLTow(this);
    });
});


function readURLTow(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            //alert(e.target.result);
            $('#input_image_selected_show_tow').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}


$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});