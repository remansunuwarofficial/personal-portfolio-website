const navbar = document.querySelector(".navbar")
const navlist = document.querySelector(".navlist")
const faBar = document.querySelector(".fa-bars")

faBar.addEventListener("click", function(){
    navbar.classList.toggle("navHeightActive")
    navlist.classList.toggle("navOpacityVisible")
})

