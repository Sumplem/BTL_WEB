const qst = document.getElementsByClassName("questions");
const ans = document.getElementsByClassName("answers");

for(let i=0;i< qst.length;i++){
    qst[i].onclick = function(){
        ans[i].classList.toggle("active");
    }
}