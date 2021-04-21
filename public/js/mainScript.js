// $(document).ready(function () {
//     $("#copyLink").click(function () {
//         $(this).select();
//     });
//     $("#copyLink").keyup(function () {
//         $(this).html('&lt;script src="https://rgbplaza.github.io/RGBSlide/rgbSlide.min.js"> &lt;/script>');
//     });

//     $("#exampleSlider").rgbslide();
// });

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

function ToggleButtonActivation(coachingType){
    console.log("Inside ToggleButtonActivation()");
    const checkBox = "." + coachingType + "_rules_checkbox";
    const formButton = "." + coachingType + "_form_submit";

    var checkboxNode = document.querySelector(checkBox);
    var formButtonNode = document.querySelector(formButton);

    if(checkboxNode.checked){
        formButtonNode.classList.remove("disabled");
    } else {
        formButtonNode.classList.add("disabled");
    }
}

function sendData(){
    const form = document.getElementById("contactForm");
    const formData = new FormData(form);

    var object = {};
    formData.forEach((value, key) => object[key] = value);
    var jsonData = JSON.stringify(object);

    fetch("http://localhost:8080/home/contact", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: jsonData,
    })
    .then(response => response.json())
    .then(data => {
        if(data.status == 'success') {
            document.getElementById("contactForm").reset();
            var parentAlertNode = createAlertMessageNode(data.message);
            
            const target = document.querySelector(".agile_team_grids_top");
            target.before(parentAlertNode);

            removeAlertAfter4Seconds(parentAlertNode);
        }
    });
}

function clearContactFormFields(){
    const form = document.getElementById("contactForm");
}

function createAlertMessageNode(message){
    var parentAlertNode = document.createElement('div');
    parentAlertNode.setAttribute('class', 'alert alert-success alert-dismissible');
    
    var alertCloseButton = document.createElement('a');
    alertCloseButton.setAttribute('href', '#');
    alertCloseButton.setAttribute('class', 'close');
    alertCloseButton.setAttribute('data-dismiss', 'alert');
    alertCloseButton.setAttribute('aria-label', 'close');
    alertCloseButton.innerHTML = "&times;";

    var strongTag = document.createElement("strong");
    strongTag.innerHTML = message;
    
    parentAlertNode.appendChild(alertCloseButton);
    parentAlertNode.appendChild(strongTag);

    return parentAlertNode;
}

function removeAlertAfter4Seconds(parentAlertNode){
    setTimeout(() => {
        parentAlertNode.remove();
    }, 4000);
}