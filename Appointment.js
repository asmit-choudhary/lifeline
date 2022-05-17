const myAppointment = document.querySelector("#myap");
const createAppointment = document.querySelector("#createap");
const appointMents = document.querySelector("#appoint");

appointMents.addEventListener("click", ()=>{
    myAppointment.classList.remove("hidden");
    createAppointment.classList.remove("hidden");
})