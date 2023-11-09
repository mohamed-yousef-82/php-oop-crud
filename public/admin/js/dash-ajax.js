$(document).ready(function(){
    $.ajax({
        url: "dashboard-data.php",
        method: "POST",
        success: function(data) {
            $('#dash-data').empty().html(data);
        }
    });
});
$(document).on('click', '.homepage', function() {
  $.ajax({
      url: "dashboard-data.php",
      method: "POST",
      success: function(data) {
          $('#dash-data').empty().html(data);
      }
  });
});
$(document).on('click', '.popup-close', function() {
  $.ajax({
      url: "dashboard-data.php",
      method: "POST",
      success: function(data) {
          $('#dash-data').empty().html(data);
      }
  });
});
$(document).on('click', '.data-update', function() {
  var table = $(this).attr("data-table");
  var folder = $(this).attr("data-folder");
  var this_elem = $(this);
  load_img ="<img style='display:block' src='../layout/images/load.gif' />";
  $(this).before(load_img);
  var data = new FormData( $(this).closest('form')[0] );
     $.ajax({
      url: "../" + folder + "/" + table + "-update.php",
      type: 'post',
      data : data,
      processData: false,
      contentType: false,
      dataType : 'html',
      success : function(data)
      {
      this_elem.prev().remove();
      success_msg ="<div class='update-msg'>Updated Successfully</div>";
      this_elem.before(success_msg);
      $(".popup .form").animate({ scrollTop: 500 }, 600);
      }
  });
  return false;
});


// $(document).on('click', '.active', function() {
//     var id = $(this).attr("data-id");
//     var table = $(this).attr("data-table");
//     $.ajax({
//         url: "../control/active.php",
//         method: "POST",
//         data: {
//             id: id,
//             table: table
//         },
//         dataType: "text",
//         success: function(data) {
//             fetch_data();
//         }
//     });
// });
/*
Stop Data Function
*/
//     $(document).on('click', '.inactive', function() {
//         var id = $(this).attr("data-id");
//         var table = $(this).attr("data-table");
//         $.ajax({
//             url: "../control/inactive.php",
//             method: "POST",
//             data: {
//                 id: id,
//                 table: table
//             },
//             dataType: "text",
//             success: function(data) {
//                 fetch_data();
//             }
//         });
//     });
$(document).on('click', '.dash-active', function() {
var id = $(this).attr("data-id");
var table = $(this).attr("data-table");
// var folder = $(this).attr("data-folder");
$.ajax({
    url: "../control/active.php",
    method: "POST",
    data: {
        id: id,
        table: table
    },
    dataType: "text",
    success: function(data) {
        // fetch_data();
        $.ajax({
            url: "../dashboard/dashboard-data.php",
            method: "POST",
            success: function(data) {
            $('#dash-data').empty().html(data);
            }
        });
    }
});
});
/*
Stop Data Function
*/
$(document).on('click', '.dash-inactive', function() {
var id = $(this).attr("data-id");
var table = $(this).attr("data-table");
// var folder = $(this).attr("data-folder");
$.ajax({
    url: "../control/inactive.php",
    method: "POST",
    data: {
        id: id,
        table: table
    },
    dataType: "text",
    success: function(data) {
        // fetch_data();
        $.ajax({
            url: "../dashboard/dashboard-data.php",
            method: "POST",
            success: function(data) {
                $('#dash-data').empty().html(data);
            }
        });
    }
});
});
$(document).on('click', '.dash-delete', function() {
var id = $(this).attr("data-id");
var table = $(this).attr("data-table");
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
              url: "../dashboard/dashboard-data.php",
              method: "POST",
              success: function(data) {
                  $('#dash-data').empty().html(data);
              }
          });

        }

    });

}
});
