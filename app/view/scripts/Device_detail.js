const main_img = document.querySelector('#main_display img');
const hover_img = document.querySelectorAll('#sub_display div img');

for(let i=0;i< hover_img.length;i++){
    hover_img[i].onmouseover = function(){
        main_img.src = hover_img[i].src;
    }
}