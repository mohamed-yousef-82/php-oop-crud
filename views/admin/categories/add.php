<h3 class="table-title"><span><?php echo $lang["ADDNEW"] ?></span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form id="form" class="form add-form" method="post" enctype="multipart/form-data">
 <label>اسم القسم بالعربية :</label>
 <input type="text" name="name_ar" value="" />
 <label>اسم القسم بالإنجليزية :</label>
 <input type="text" name="name_en" value="" />
 <label>القسم الأب :</label>
 <select name="parent">
    <option value="0">بدون أب</option>
    <?php  
    var_dump($data);
foreach($data as $list){
?>
    <option value="<?php echo $list["id"] ?>"><?php echo $list["name_ar"] ?></option>
    <?php
}
?>
 </select>
 <input class="start-btn blue" type="submit" name="add" value="<?php echo $lang["ADDNEW"] ?>" />
</form>
<script>
//     const form = document.getElementById("form")
//     form.addEventListener("submit",(e)=>{

//         e.preventDefault()
//         const formdata = new FormData(form)
    



// fetch("/admin/categories/add", {
//     method: "POST",
//     headers: {
//         'Content-Type':'application/json'
//     },
//     body:  JSON.stringify(formdata)

// })
// .then(function(response){ 
//     return response.json(); 
// })

// })
</script>
</div>
