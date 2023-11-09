$(document).ready(function(){
  $('input').each(function(){
    if($(this).attr('required') === 'required'){
      $(this).after('<span class="star">*</span>');
    }
  });

  //Convert  Password Field To Text Field

  $('.show-pass').hover(function(){
    $(".password").attr('type','text');
  },function(){
    $(".password").attr('type','password');
  });

// Delete Confirmation
// $('.confirm').click(function(){
//   return confirm('Are You Sure');
// });

});
