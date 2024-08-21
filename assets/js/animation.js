window.addEventListener('scroll', reveal);

function reveal() {
    reveals=document.querySelectorAll('.reveal');

    for(var i=0; i<reveals.length;i++){
        
        var windowHeight=window.innerHeight;
        var revealTop=reveals[i].getBoundingClientRect().top;
        var revealPoint=30;

        if (revealTop < windowHeight - revealPoint) {
            reveals[i].classList.add('active');
        }
        else{
            reveals[i].classList.remove('active');
        }
    }


    
    reveals_ext=document.querySelectorAll('.reveals_ext');
    for(var i=0; i<reveals_ext.length;i++){
        
        var windowHeight=window.innerHeight;
        var revealTop=reveals_ext[i].getBoundingClientRect().top;
        var revealPoint=30;

        if (revealTop < windowHeight - revealPoint) {
            reveals_ext[i].classList.add('active');
        }
        else{
            reveals_ext[i].classList.remove('active');
        }
    }


    reveal_right=document.querySelectorAll('.reveal_right');
    for(var i=0; i<reveal_right.length;i++){
        
        var windowHeight=window.innerHeight;
        var revealTop=reveal_right[i].getBoundingClientRect().top;
        var revealPoint=30;

        if (revealTop < windowHeight - revealPoint) {
            reveal_right[i].classList.add('active');
        }
        else{
            reveal_right[i].classList.remove('active');
        }
    }

} 

window.addEventListener('DOMContentLoaded', reveal);