  $.getScript("../layout/js/data-fetch.js");
$(document).on('click', '.admin-nav .link', function() {
    var table = $(this).attr("data-table");
    var folder = $(this).attr("data-folder");
  $.ajax({
      url: "../" + folder + "/" + table + ".php",
      method: "POST",
      success: function(data) {
          $('.main-section').html(data);
          fetch_data_ready();
      }
  });
  });
