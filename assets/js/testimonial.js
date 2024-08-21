tem=document.querySelector(".tem");
next=document.querySelector(".next2");
prev=document.querySelector(".prev2");

pos=0;

next.onclick = () => {
    pos-=12;
    tem.style.transform="translateX(" + -pos +"rem)";
}

prev.onclick = () => {
    pos+=12;
    tem.style.transform="translateX(" + pos +"rem)";
}