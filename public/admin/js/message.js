$(document).on('click', '.message-btn', function() {
    var data = new FormData(document.querySelector('#send_message')); // using the FormData API to submit form
    $.ajax({
        url: "../message/send.php",
        type: 'post',
        data: data,
        processData: false,
        contentType: false,
        dataType: 'html',
        success: function(data) {
          $("#send_message").prepend("<div class='send-msg'>Message Send Succefully</div>");
        }
    });

});
