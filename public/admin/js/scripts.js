$(document).ready(function(){
$( "#menu-icon" ).click(function() {
$(this).next().slideToggle();
});
});

    const form = document.getElementById("form")
    form.addEventListener("submit",(e)=>{

        e.preventDefault()
        const formdata = new FormData(form)
    



fetch("/admin/categories/add", {
    method: "POST",
    headers: {
        'Content-Type':'application/json'
    },
    body:  JSON.stringify(formdata)
    // body:  {
    //     name:"mohamed"
    // }
})
// .then(function(response){ 
//     return response.json(); 
// })
.then(function(data){ 
    console.log(data)
});
})
