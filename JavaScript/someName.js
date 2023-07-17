let buttonPurchasedCreated = false;
let idA = 0;
let idPreviousId = -1;
let total = 0;
let numberOfItems = 0;
let recipes = [];
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
    let carContainer = document.querySelector(".modal-content");

    // for (let index = 0; index < recipes.length; index++) {
    //     let recipe = recipes[index];
    //     carContainer.appendChild(createItemOnTheCar(recipe.name, recipe.cost, recipe.quantity, recipe.total, index));
    // }
    container.style.display = "flex";
}

//Nombre, cantidad, precio unitario, total
//TODO: Add like headers to distiguish what field is what
//TODO: Update total values according to the array of objects
function addToCar(e) {
    hideToast();
    showToast();
    let idElement = e.target.id;
    let nameParagraph = document.getElementById("recipeName"+idElement);
    let costParagraph = document.getElementById("recipeCost"+idElement);
    let name = nameParagraph.textContent;
    let value = costParagraph.textContent;

    let cost = getCost(value);
    numberOfItems++;
    let container = document.querySelector(".modal-content");
    let totalText = document.querySelector("#totalText");
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
    //This button hide when there isn't items on the car and is for register on the database
    btnValidatePurchase.textContent = "Validar compra";
    btnValidatePurchase.setAttribute("id","validatePurchase");
    btnValidatePurchase.addEventListener("click", function generatePDF() {
        let amountOfRecipesPurchased = document.getElementById("amountOfRecipesPurchased");
        amountOfRecipesPurchased.value = numberOfItems;
        let totalOfCar = document.getElementById("totalOfCar");
        totalOfCar.value = total;
        let btnSubmint = document.getElementById("submit-pdf");
        btnSubmint.click();
    });

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
        totalText.parentNode.insertBefore(btnValidatePurchase, totalText.nextSibling);
        buttonPurchasedCreated = true; 
    }
    totalParagraph.textContent = total;
}

function getCost(String) {
    let values = String.split('$');
    return cost = values[1]; 
}

//TODO: change the removeMethod when the quantity is more than one
function removeFromCar(id){
    let element = document.getElementById("carElement"+id);
    let container = document.querySelector(".modal-content");
    let totalParagraph = document.getElementById("total");
    element.remove();
    idA--;
    numberOfItems--;
    total -= parseFloat(getCost(element.textContent));
    console.log(total);
    if (container.childElementCount == 0) {
        let btn = document.getElementById("validatePurchase");
        btn.remove();
        buttonPurchasedCreated = false;
    }

    totalParagraph.textContent = total;
}
function itemExistOnTheCar(name){
    if (recipes.length===0) {
        return false;
    }else{
        for(let i=0; i < recipes.length; i++){
            if(recipes[i].name === name){
                return true
            }
        }
        return false;
    }
}

function getIndexOfTheItemThatExists(name){
    for (let index = 0; index < recipes.length; index++) {
        if (recipes[index].name === name) {
            return index;
        }
    }
    return -1;
}

function addRecipeToTheListOfObjects(name, cost) {
    if (itemExistOnTheCar(name) === false) {
        let recipe = {
            name: name,
            cost: parseInt(cost),
            quantity: 1,
            total: parseInt(cost)
        }
        recipes.push(recipe);
        console.log(recipes);
    }else{
        let indexOfTheItemOnTheList = getIndexOfTheItemThatExists(name);

        recipes[indexOfTheItemOnTheList].quantity++;
        let currentQuantity = recipes[indexOfTheItemOnTheList].quantity;
        let cost = recipes[indexOfTheItemOnTheList].cost;
        let total = currentQuantity * cost;
        recipes[indexOfTheItemOnTheList].total = total;
    }
}

function createItemOnTheCar(name, cost, quantity, total, id) {
    let divItem = document.createElement("div");
    let itemName = createElement("p",name);
    let itemCost = createElement("p",cost);
    let itemQuantity = createElement("p",quantity);
    let totalOfItem = createElement("p",total);
    let btnRemove;
    if (cost === total) {
        btnRemove = createElement("button","Eliminar","btn btn-primary", 
        function() { removeFromCar(id);});
    }else{
        btnRemove = createElement("button","-","btn btn-primary", 
        function() { removeFromCar(id);});
    }

    divItem.appendChild(itemName)
    divItem.appendChild(itemCost);
    divItem.appendChild(itemQuantity);
    divItem.appendChild(totalOfItem);
    divItem.appendChild(btnRemove);
    divItem.setAttribute("id","carElement"+id);

    divItem.classList.add("new-Product");
    return divItem;
}

function createElement(typeOfElement, content, classOfElement = "", listener = () => {}) {
    const element = document.createElement(typeOfElement);
    element.textContent = content;
    element.classList = classOfElement;
    element.addEventListener('click',listener);
    return element;
}

function setButtons(params) {
    
}
function updateItemOnTheCar(id) {
    
}

