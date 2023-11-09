// function fetch_data() {
//
//     $.ajax({
//         url: "../" + folder + "/" + table + "-data.php",
//         method: "POST",
//         success: function(data) {
//             $('#data').html(data);
//         }
//     });
// }

function fetch_data_ready() {
  var page_start = 1;
  var page_items = 3;
    $.ajax({
        url: "../" + folder + "/" + table + "-data.php",
        method: "POST",
        data: {
            page_start: page_start,
            page_items: page_items
        },
        success: function(data) {
            $('#data').html(data);
        }
    });
}
function fetch_data() {
    $.ajax({
        url: "../" + folder + "/" + table + "-data.php",
        method: "POST",
        success: function(data) {
            $('#data').html(data);
        }
    });
}
