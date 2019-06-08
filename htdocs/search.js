
function searchProposals() {
    
    var form = document.getElementById('search');
    var input = ""; 
    input = form.querySelector('input[id="searchInput"]').value;
    if(input)
    {
        
        fetch('/json-helper.php?search=' + input)
        .then((res) => res.json())
        .then((data) => {
            let out ='';
            data.forEach(function(elem){
                out += ' <li>' + elem.ArtikelName + '</li> ';
            });

            document.getElementById('searchProposals').innerHTML = out;
        });
    }
}