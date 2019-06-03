
function validateFormLogin() {
    var KundenID = document.forms["login"]["kID"].value;
    if ( KundenID == "") {
      alert("Sie müssen eine KundenID eingeben");
      return false;
    }
  }

  function validateFormRegist() {
    var name = document.forms["Registrieren"]['name'].value;
    var surname = document.forms["Registrieren"]['surname'].value;
    var company =  document.forms["Registrieren"]['company'].value;
    var street =  document.forms["Registrieren"]['street'].value;
    var location =  document.forms["Registrieren"]['location'].value;
    var plz =  document.forms["Registrieren"]['plz'].value;
    var country =  document.forms["Registrieren"]['country'].value;
    var tele =  document.forms["Registrieren"]['tele'].value;
    
    if (name == "" || surname == "" || company == ""|| street == ""|| location == ""|| plz == ""|| country == "" || tele == "") {
      alert("Sie müssen alle (wichtigen) eingeben. [Name,Vorname,Firma,Straße,Ort,PLZ,Land,Telefonnummer]");
      return false;
    }
  }
