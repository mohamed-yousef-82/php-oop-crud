</main><!--End Start-->
</body>

<script src="<?php echo ADMINJS ?>\jquery.min.js"></script>
<script src="<?php echo ADMINJS ?>\navToggle.js"></script>
<script src="<?php echo ADMINJS ?>\popper.min.js"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script> -->
<!-- <script src='<?php echo ADMINJS ?>\tinymce.min.js'></script> -->
<!-- <script src='<?php echo ADMINJS ?>\tinymce-handle.js'></script> -->
<script src='<?php echo ADMINJS ?>\jquery.dataTables.min.js'></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
      overlay.classList.add("remove")

});
// $(document).ready( function () {
//     $('#myTable').DataTable();
// } );
// tinymce.init({
//   selector: '.textarea',  // change this value according to your HTML
//   plugins: 'advlist link image lists'
// });
</script>
<script src="<?php echo ADMINJS ?>\ckeditor.js"></script>
<script>
            var allEditors = document.querySelectorAll('.textarea');
        for (var i = 0; i < allEditors.length; ++i) {
            
          ClassicEditor.create(allEditors[i]);
 
        }

        ClassicEditor.editorConfig = function( config )
            {
            // config.language = 'en';
            enterMode : ClassicEditor.ENTER_BR;
            }
</script>

</html>