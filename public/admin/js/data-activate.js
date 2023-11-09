$(document).on('click', '.active', function() {
    var id = $(this).attr("data-id");
    $.ajax({
        url: "../control/active.php",
        method: "POST",
        data: {
            id: id,
            table: table
        },
        dataType: "text",
        success: function(data) {
            fetch_data();
        }
    });
});
/*
Stop Data Function
*/
$(document).on('click', '.inactive', function() {
    var id = $(this).attr("data-id");
    $.ajax({
        url: "../control/inactive.php",
        method: "POST",
        data: {
            id: id,
            table: table
        },
        dataType: "text",
        success: function(data) {
            fetch_data();
        }
    });
});
