document.querySelector("#admin_contact_form_button").addEventListener("click", () => {
    const form = document.getElementById("admin_contact_form");
    const formData = new FormData(form);

    var object = {};
    formData.forEach((value, key) => object[key] = value);
    var jsonData = JSON.stringify(object);

    fetch("http://localhost:8080/admin/savepagedata/contact", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: jsonData,
    })
    .then(response => response.json())
    .then(data => {
        if(data.result == 'success') {
            var parentAlertNode = createAlertMessageNode();
            
            const target = document.querySelector(".card-outline");
            target.before(parentAlertNode);

            removeAlertAfter2Seconds(parentAlertNode);
        }
    });
});

function createAlertMessageNode(){
    var parentAlertNode = document.createElement('div');
    parentAlertNode.setAttribute('class', 'alert alert-success alert-dismissible');
    
    var alertCloseButton = document.createElement('button');
    alertCloseButton.setAttribute('type', 'button');
    alertCloseButton.setAttribute('class', 'close');
    alertCloseButton.setAttribute('data-dismiss', 'alert');
    alertCloseButton.innerHTML = "&times;";
    
    parentAlertNode.innerHTML = "Page successfully updated!";
    parentAlertNode.appendChild(alertCloseButton);

    return parentAlertNode;
}

function removeAlertAfter2Seconds(parentAlertNode){
    setTimeout(() => {
        parentAlertNode.remove();
    }, 2000);
}