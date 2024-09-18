let burger = document.querySelector(".burger")
let links = document.querySelector(".nav-bar")
let Text = document.querySelector(".text")
burger.addEventListener('click',()=>{
    links.classList.toggle("nav-show");
    Text.classList.toggle("Textareahide");
})
