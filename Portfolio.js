console.log("This is my portfolio");

let Home = document.getElementById('Home');
let About = document.getElementById('About');
let Service = document.getElementById('Service');
let Sign = document.getElementById('SignUp');
let Contact = document.getElementById('Contact');
let TotalMember = document.getElementById('TotalMember');
let Equipment = document.getElementById('Equipment');


// let Update = document.getElementById('Update');

// let main = document.querySelector(".main-content");
// let about = document.querySelector(".About-content");
// let service = document.querySelector(".Services-content");
// let contact = document.querySelector(".Contact-content");

let main = document.querySelector(".main-content");
let about = document.querySelector(".About");
let service = document.querySelector(".services");
let sign = document.querySelector(".signUp");
let contact = document.querySelector(".contact");
// let update = document.querySelector(".update");

Home.addEventListener("click",()=>{
     main.classList.remove("hidden");
     console.log("you click");
     about.classList.add("hidden");
     service.classList.add("hidden");
     contact.classList.add("hidden");
     sign.classList.add("hidden");
})
About.addEventListener("click",()=>{
    about.classList.remove("hidden");
    console.log("you click");
    main.classList.add("hidden");
    service.classList.add("hidden");
    contact.classList.add("hidden");
    sign.classList.add("hidden");
})
Service.addEventListener("click",()=>{
    service.classList.remove("hidden");
    about.classList.add("hidden");
    main.classList.add("hidden");
    contact.classList.add("hidden");
    sign.classList.add("hidden");
}
)
Sign.addEventListener("click", ()=>{
    console.log("Click Sign")
    sign.classList.remove("hidden");
    service.classList.add("hidden");
    about.classList.add("hidden");
    main.classList.add("hidden");
    contact.classList.add("hidden");
})
Contact.addEventListener("click",()=>{
    console.log("Click Contact")
    contact.classList.remove("hidden");
    service.classList.add("hidden");
    about.classList.add("hidden");
    main.classList.add("hidden");
    sign.classList.add("hidden");

})
// Update.addEventListener("click",()=>{
//     console.log("Click Update")
//     contact.classList.add("hidden");
//     service.classList.add("hidden");
//     about.classList.add("hidden");
//     main.classList.add("hidden");
//     sign.classList.add("hidden");
//     update.classList.remove("hidden");

// })
// main.classList.add("hidden");