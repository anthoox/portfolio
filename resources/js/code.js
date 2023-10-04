window.onload = function(){
    const headerDesk = document.querySelector('.header__desktop');
    const headerMovil = document.querySelector('.header__movil');
    const main = document.querySelector('.main');
    const scrollDesk = 10;
    window.addEventListener("scroll", ()=>{
        if(window.scrollY > scrollDesk){
            headerDesk.classList.add("fixeder_header");
            headerMovil.classList.add("fixeder_header");
            main.classList.add("position__main");
            main.classList.add("position__main2")
        }else{
            headerDesk.classList.remove("fixeder_header");
            headerMovil.classList.remove("fixeder_header");
            main.classList.remove("position__main");
            main.classList.remove("position__main2")
        }
    })
}
