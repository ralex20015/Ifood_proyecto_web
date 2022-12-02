function showValuesWithTheSearch(file) {
    var searchBarText = document.getElementById("searchBar").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("example").innerHTML = this.responseText;
        }
    }

    xhttp.open("GET", file+"?search=" + searchBarText, true)//Tiene 3 parametros: method (GET or POST), url (server file location), async: true(asynchronous)
    xhttp.send(); 
}

let word= "";

function searchBasedOnKeysPressed(event, file) {
    checkKeyPressed(event);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("example").innerHTML = this.responseText;
        }
    }

    xhttp.open("GET", file+"?keyPressed=" + word, true);
    xhttp.send(); 
}

function checkKeyPressed(e) {
    var keynum;
    
    if (window.event) {                  
        keynum = e.keyCode;
    } else if (e.which) {               
        keynum = e.which;
    }

    if (keynum == 8) {
        word = word.slice(0, -1);
    }else if(isAValidKey(keynum)){
        word += String.fromCharCode(keynum);
    }
}

function isAValidKey(keynum){
    return (keynum >= 48 && keynum <= 57) || (keynum >= 65 && keynum <= 90) || (keynum >= 97 && keynum <= 122);
}
