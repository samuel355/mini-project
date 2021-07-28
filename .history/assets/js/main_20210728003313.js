(
    function(){
    window.onload=function(){
        window.setTimeout(fadeout,500);
    }

    function fadeout(){
        document.querySelector('.preloader').style.opacity='0';
        document.querySelector('.preloader').style.display='none';
    }

    window.onscroll=function(){
            var header_navbar=document.querySelector(".navbar-area");
            var sticky=header_navbar.offsetTop;
            var logo=document.querySelector('.navbar-brand')
        if(window.pageYOffset>sticky){
            header_navbar.classList.add("sticky");
        }else{header_navbar.classList.remove("sticky");
        }

        var backToTo=document.querySelector(".scroll-top");
        if(document.body.scrollTop>50||document.documentElement.scrollTop>50){
            backToTo.style.display="flex";
        }else{
            backToTo.style.display="none";
        }
    };

    new WOW().init();
    let navbarToggler=document.querySelector(".mobile-menu-btn");
    navbarToggler.addEventListener('click',function(){
        navbarToggler.classList.toggle("active");
    });

    var elements=document.getElementsByClassName("portfolio-btn");
    for(var i=0;i<elements.length;i++){
        elements[i].onclick=function(){
            var el=elements[0];while(el){
                if(el.tagName==="BUTTON"){
                    el.classList.remove("active");
                }
            el=el.nextSibling;
        }
        this.classList.add("active");
        };
    }}
)();

//signup
$(document).ready(function() {
    $('#signup-form').submit(function(e) {
        
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: "php/signup.php",
            //dataType: 'json',
            data: new FormData(this),
            processData: false,
            contentType: false,
            complete: function() {
                $('#process').fadeOut('slow');
                $('#submit').fadeIn('slow');
            },
            success: function(success) {
                $('#process').fadeOut('slow');
                $('#submit').fadeIn('slow');
                $('#alert').hide('slow');
                $('#add-student')[0].reset();
                $('#done').html(success);
                $('#succ').show();
                console.log(success);
            },
            error: function(error) {
                // 	s
                if (error) {
                    $('#succ').fadeOut('slow');
                    $('#messages').html(error.responseText);
                    $('#submit').fadeIn('slow');
                    $('#alert').show();
                    console.log(error.message);
                }

            }
        });
        return false;
    });

});

function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function pFunction() {
    var x = document.getElementById("cpassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
