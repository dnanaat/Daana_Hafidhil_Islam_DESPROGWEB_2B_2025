const { cache } = require("react");

$(document).ready(function(){
    $('#file').change(function(){
        if(this.files.length > 0){
            $('#upload-button').prop('disabled', false).css('opacity', '1');
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', '0.5');
        }
    });

    $('#upload-form').submit(function(e){
        e.preventDefault(); // Prevent the default form submission

        var formData = new FormData(this); // Create a FormData object from the form

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $('#status').html(response); // Display the server response in the status element
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});