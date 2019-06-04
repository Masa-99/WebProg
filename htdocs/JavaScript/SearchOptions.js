function searchOptions(value) {
    if (value.length == 0) {
        document.getElementById("searchBar").style.borderColor = "#000000";
        document.getElementById("searchResults").innerHTML = "";
        document.getElementById("searchResults").style.border = "0px";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("searchResults").innerHTML = this.responseText;
            document.getElementById("searchResults").style.border = "1px solid #19af1e80";
        }
    }
    xmlhttp.open("GET", "ToyModelsProject-Home.php?q=" + value, true);
    xmlhttp.send();
}