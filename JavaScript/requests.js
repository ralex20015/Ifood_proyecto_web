function showValuesWithTheSearch(params) {
    var searchBarText = document.getElementById("searchBar").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("example").innerHTML = this.responseText;
        }
    }

    xhttp.open("GET","../php/showDataFromBD.php?search="+searchBarText,true)//Tiene 3 parametros: method (GET or POST), url (server file location), async: true(asynchronous)
    xhttp.send(); //Envia la peticion al servidor

    console.log(searchBarText);
}