$('#add').click(function() {
    addNew();
    return false;
});
function addNew() {
    var data = new FormData(document.querySelector('#form-add-post')); // using the FormData API to submit form
    var this_elem = $("#add");
    load_img ="<img style='display:block' src='../layout/images/load.gif' />";
    this_elem.before(load_img);
    $.ajax({
        url: "../" + folder + "/" + table + "-insert.php",
        type: 'post',
        data: data,
        processData: false,
        contentType: false,
        dataType: 'html',
        success: function(data) {
        fetch_data();
        this_elem.prev().remove();
        success_msg ="<div class='update-msg'>Inserted Successfully</div>";
        this_elem.before(success_msg);
        }
    });
}
