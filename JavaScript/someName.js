let buttonPurchasedCreated = false;
let idA = 0;
let total = 0;
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

function showModal() {
    let container = document.querySelector(".modal-container");
    container.style.display = "flex";
}

function addToCar(e) {
    let idElement = e.target.id;
    let nameParagraph = document.getElementById("recipeName"+idElement);
    let costParagraph = document.getElementById("recipeCost"+idElement);
    let name = nameParagraph.textContent;
    let value = costParagraph.textContent;

    let cost = getCost(value);

    let container = document.querySelector(".modal-content");
    let div = document.createElement("div");
    let element = document.createElement("p");
    let elementText = document.createTextNode(name);
    let costElement = document.createElement("p");
    let costText = document.createTextNode("$"+cost);
    let btnRemove = document.createElement("button");
    let btnValidatePurchase = document.createElement("button");

    btnRemove.textContent = "Eliminar";
    btnRemove.addEventListener("click",function() {
        removeFromCar(idElement);
    });
    btnRemove.classList.add("btn");
    btnRemove.classList.add("btn-primary");

    btnValidatePurchase.textContent = "Validar compra";
    btnValidatePurchase.addEventListener("click", getTotal);
    btnValidatePurchase.setAttribute("id","validatePurchase");
    btnValidatePurchase.classList.add("btn");
    btnValidatePurchase.classList.add("btn-primary");

    element.appendChild(elementText);
    costElement.appendChild(costText);

    div.appendChild(element)
    div.appendChild(costElement);
    div.appendChild(btnRemove);
    div.setAttribute("id","carElement"+idElement);


    div.classList.add("new-Product");
    total += parseFloat(cost);
    container.appendChild(div);
    console.log(total);
    let totalParagraph = document.getElementById("total");

    if (container.hasChildNodes && !buttonPurchasedCreated) {
        document.querySelector(".modal-footer").appendChild(btnValidatePurchase);
        buttonPurchasedCreated = true; 
    }
    totalParagraph.textContent = total;

}

function getCost(String) {
    let values = String.split('$');
    return cost = values[1]; 
}

function removeFromCar(id){
    let element = document.getElementById("carElement"+id);
    let container = document.querySelector(".modal-content");
    let totalParagraph = document.getElementById("total");
    element.remove();
    idA--;
    total -= parseFloat(getCost(element.textContent));
    console.log(total);
    if (container.childElementCount == 0) {
        let btn = document.getElementById("validatePurchase");
        btn.remove();
        buttonPurchasedCreated = false;
    }

    totalParagraph.textContent = total;
}

