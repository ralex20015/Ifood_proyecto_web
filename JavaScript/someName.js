function checkOptionSelected() {

    var optionSubir = document.getElementById("uploadImage");
    if (optionSubir.checked) {
        console.log("hola que hace");
    }
    if (document.getElementById("addFromLink").checked) {
        console.log("no hago nada");
        
    }
}

function markRadio(event){
    var uploadImage = document.getElementById("load");
    var addLink = document.getElementById("link");

}

function getEventTarget(e) {
    return e.target; 
}