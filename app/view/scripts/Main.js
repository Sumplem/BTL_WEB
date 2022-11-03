const toggle_btn = document.getElementById('toggle_btn');
const toggle_menu = document.getElementById('toggle_menu');

toggle_btn.onclick = function(){
    toggle_btn.classList.toggle('active');
    toggle_menu.classList.toggle('active');
}

document.onclick = function(event){
    if(event.target.id !== 'toggle_btn' && event.target.id !== 'toggle_menu'){
        toggle_btn.classList.remove('active');
        toggle_menu.classList.remove('active');
    }
}

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 25) {
        $('header').addClass('fixed');
    } else {
        $('header').removeClass('fixed');
    }
});