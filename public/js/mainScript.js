// $(document).ready(function () {
//     $("#copyLink").click(function () {
//         $(this).select();
//     });
//     $("#copyLink").keyup(function () {
//         $(this).html('&lt;script src="https://rgbplaza.github.io/RGBSlide/rgbSlide.min.js"> &lt;/script>');
//     });

//     $("#exampleSlider").rgbslide();
// });

document.querySelector(".cricket_rules_checkbox").addEventListener("change", () => {
    if(document.querySelector(".cricket_rules_checkbox").checked){
        document.querySelector(".cricket_form_submit").classList.remove("disabled");
    } else {
        document.querySelector(".cricket_form_submit").classList.add("disabled");
    }
});

document.querySelector(".football_rules_checkbox").addEventListener("change", () => {
    if(document.querySelector(".football_rules_checkbox").checked){
        document.querySelector(".football_form_submit").classList.remove("disabled");
    } else {
        document.querySelector(".football_form_submit").classList.add("disabled");
    }
});


document.querySelector(".bodyfitness_checkbox_cricket").addEventListener("change", () => {
    if(document.querySelector(".bodyfitness_checkbox_cricket").checked){
        document.querySelector(".bodyfitness_form_submit").classList.remove("disabled");
    } else {
        document.querySelector(".bodyfitness_form_submit").classList.add("disabled");
    }
});

// document.querySelector(".cricket_form_submit").addEventListener("click", () => {
//     const form = document.getElementById("cricket_form");
//     const FD = new FormData(form);
//     console.log([...FD]);
// });

// document.querySelector(".football_form_submit").addEventListener("click", () => {
//     const form = document.getElementById("football_form");
//     const FD = new FormData(form);
//     console.log([...FD]);
// });

// document.querySelector(".bodyfitness_form_submit").addEventListener("click", () => {
//     const form = document.getElementById("bodyfitness_form");
//     const FD = new FormData(form);
//     console.log([...FD]);
// });