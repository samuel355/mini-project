(function(){
    window.onload=function(){
        window.setTimeout(fadeout,500);
    }
function fadeout(){
    document.querySelector('.preloader').style.opacity='0';document.querySelector('.preloader').style.display='none';
}

window.onscroll=function(){var header_navbar=document.querySelector(".navbar-area");var sticky=header_navbar.offsetTop;var logo=document.querySelector('.navbar-brand img')
if(window.pageYOffset>sticky){header_navbar.classList.add("sticky");logo.src='assets/images/logo/logo.svg';}else{header_navbar.classList.remove("sticky");logo.src='assets/images/logo/white-logo.svg';}
var backToTo=document.querySelector(".scroll-top");if(document.body.scrollTop>50||document.documentElement.scrollTop>50){backToTo.style.display="flex";}else{backToTo.style.display="none";}};new WOW().init();let navbarToggler=document.querySelector(".mobile-menu-btn");navbarToggler.addEventListener('click',function(){navbarToggler.classList.toggle("active");});var elements=document.getElementsByClassName("portfolio-btn");for(var i=0;i<elements.length;i++){elements[i].onclick=function(){var el=elements[0];while(el){if(el.tagName==="BUTTON"){el.classList.remove("active");}
el=el.nextSibling;}
this.classList.add("active");};}})();