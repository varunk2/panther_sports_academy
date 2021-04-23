let formEditor;

ClassicEditor
.create( document.querySelector( '#editor' ) )
.then( editor => {
    editor.editing.view.change( writer => {
        writer.setStyle( 'height', '400px', editor.editing.view.document.getRoot() ); 
    });
    formEditor = editor;
})
.catch( error => {
    console.error( error );
} );

/**
 * Function for updating Home page content asynchronously.
*/
function sendHomeFormData(){
    const form = document.querySelector(".admin_home_form");
    const formData = new FormData(form);

    var object = {};
    formData.forEach((value, key) => object[key] = value);
    object['editor_text'] = formEditor.getData();
    var jsonData = JSON.stringify(object);

    console.log(jsonData);
    
    let url = base_url + "/admin/savepagedata/home";
    
    sendPostData(url, jsonData);
}

/**
 * Function for updating Thank You page content asynchronously.
 */
function sendThankYouFormData(){
    const form = document.querySelector(".admin_thankyou_form");
    const formData = new FormData(form);
    
    var object = {};
    formData.forEach((value, key) => object[key] = value);
    object['editor_text'] = formEditor.getData();
    var jsonData = JSON.stringify(object);
    console.log(jsonData);

    let url = base_url + "/admin/savepagedata/thankyou";

    sendPostData(url, jsonData);
}

/**
 * Function for updating Contact page content asynchronously.
*/
function sendContactFormData(){
    const form = document.getElementById("admin_contact_form");
    const formData = new FormData(form);
    
    var object = {};
    formData.forEach((value, key) => object[key] = value);
    var jsonData = JSON.stringify(object);
    
    let url = base_url + "/admin/savepagedata/contact";
    
    sendPostData(url, jsonData);
}

function sendPostData(targetURL, jsonData){
    fetch(targetURL, {
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
}

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