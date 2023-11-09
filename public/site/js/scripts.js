document.addEventListener("DOMContentLoaded", () => {
    overlay.classList.add("remove")

});
const toggleMenuBtn = document.querySelector("#toggle-menu-btn");
const Menu = document.querySelector("#menu");
toggleMenuBtn.onclick = ()=>{
    Menu.classList.toggle("view");
    toggleMenuBtn.classList.toggle("fa-xmark");

}
console.log(toggleMenuBtn)
console.log(Menu)
/*-- Display and hide nav dropmenu when click  dropdown-toggle --*/

const dropdownBtn = document.querySelector(".dropdown-toggle");
let toggleDropmenu = (e) => {
    e.target.nextElementSibling.classList.toggle("viewdropmenu")
}
dropdownBtn.addEventListener("click", toggleDropmenu);


