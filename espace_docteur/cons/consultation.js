const slidePage = document.querySelector(".slidepage");
const FirstNextBtn = document.querySelector(".nextBtn");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let max = 4;
let current = 1;

FirstNextBtn.addEventListener("click", function(){

    console.log("marche");
    slidePage.style.marginLeft = "-25%";

    bullet[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current++;

})

nextBtnSec.addEventListener("click", function(){
    console.log("marche");
    slidePage.style.marginLeft = "-50%";

    bullet[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current++;

})

nextBtnThird.addEventListener("click", function(){
    console.log("marche");
    slidePage.style.marginLeft = "-75%";

    bullet[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current++;

})

submitBtn.addEventListener("click", function(){
    console.log("marche");

    bullet[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current++;
    setTimeout(function(){
        alert("thanks");
    }, 800)

})

prevBtnSec.addEventListener("click", function(){
    console.log("marche");
    slidePage.style.marginLeft = "0%";

    bullet[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current--;

})

prevBtnThird.addEventListener("click", function(){
    console.log("marche");
    slidePage.style.marginLeft = "-25%";

    bullet[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current--;

})

prevBtnFourth.addEventListener("click", function(){
    console.log("marche");
    slidePage.style.marginLeft = "-50%";

    bullet[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current--;

})