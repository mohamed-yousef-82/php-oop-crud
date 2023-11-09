$(document).on('click', '.delete', function() {
    var id = $(this).attr("data-id");
    if (confirm("Are you sure you want to delete this?")) {
        $.ajax({
            url: "../control/delete.php",
            method: "POST",
            data: {
                id: id,
                table: table
            },
            dataType: "text",
            success: function(data) {
              $.ajax({
                  url: "../" + folder + "/" + table + "-data.php",
                  method: "POST",
                  success: function(data) {
                      $('#data').html(data);
                  }
              });

            }

        });

    }
});
