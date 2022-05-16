const mainFirst = document.querySelector(".main1");
const mainSecond = document.querySelector(".main2");
const mainThird = document.querySelector(".main3");
const nextPage = document.querySelector("#next");
const finishPage = document.querySelector("#finish");

const hideNext = document.querySelector("#next");
const hideFinish = document.querySelector("#finish");


nextPage.addEventListener("click",()=>{
    mainFirst.classList.add("hid");
    mainSecond.classList.add("act");
})

finishPage.addEventListener("click", ()=>{
    mainSecond.classList.remove('act');
    mainSecond.classList.add("hid");
    mainThird.classList.add("act");
})