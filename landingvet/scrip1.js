let nav = document.getElementById('nav');
let menu = document.getElementById('enlaces');
let abrir =document.getElementById('open');
let botones = document.getElementsByClassName('btn-header');
let cerrado = true;


function menus() {
    let desplazamiento_actual = window.pageYOffset;
    if (desplazamiento_actual  <= 300) {
        nav.classList.remove('nav2');
        nav.className = ('nav1');
        nav.style.transition = '1s';
        menu.style.top ='80px';
    } else {
        nav.classList.remove('nav1');
        nav.className = ('nav2');
        nav.style.transition = '1s';
        menu.style.top ='100px';

        
    }
}
function apertura() {
    if(cerrado){
        menu.style.width='70vw';
        cerrado = false;
    }else{
        menu.style.width='0%';
        menu.style.overflow = 'hidden';
        cerrado = true;
    }
}
window.addEventListener('load',function () {
    menus();
});
window.addEventListener('scroll', function(){
    console.log(window.pageYOffset);
    menus();
});
window.addEventListener('click',function (e) {
    console.log(e.target)
});

abrir.addEventListener('click', function name(params) {
    apertura();
});