$(function() {
    function readURL(input) {
        $(input.files).each(function(i, el) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('<img class="img-input">').attr('src', e.target.result).appendTo('#im');
            };
            reader.readAsDataURL(input.files[i]);
        });
    }

    $("#imgInput").change(function() {
        readURL(this);
    });
});