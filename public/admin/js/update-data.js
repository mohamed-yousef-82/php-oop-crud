$('.popup .form').submit(function(){
  var page_start = 1;
  var page_items = 3;
  var data = new FormData(this);
     $.ajax({
      url: "../" + folder + "/" + table + "-update.php",
      type: 'post',
      data : data,
      processData: false,
      contentType: false,
      dataType : 'html',
      success : function(data)
      {
      $("body").append("<div class='msg'>Updated Successfully</div>");
      $(".msg").delay(2000).fadeOut(2000);
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
          // $.ajax({
          //     url: "../" + folder + "/" + table + "-data.php",
          //     method: "POST",
          //     success: function(data) {
          //         $('#data').html(data);
          //     }
          // });
          // $.getScript("data-fetch.js");
          // fetch_data();
  }
});
});
