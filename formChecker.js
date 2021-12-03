function validateOnSubmit() {
  document.getElementById("errorMessage").innerHTML = "" ;
  console.log("We at least ran the function.");
  var user = document.getElementById("username").value;
  var pass = document.getElementById("password").value;
  var fiveQuantity = document.getElementById("fiveQuantity").value;
  var tenQuantity = document.getElementById("tenQuantity").value;
  var twentyQuantity = document.getElementById("twentyQuantity").value;
  var sevenShip = document.getElementById("sevenShip").value;
  var threeShip = document.getElementById("threeShip").value;
  var overNightShip = document.getElementById("overNightShip").value;
  var form = document.getElementById("submissionForm");
  function handleForm(event){
    event.preventDefault();
  }
  var atIndex = user.indexOf('@');
  var userLength = user.length;
  var periodIndex = user.indexOf('.');


  if(user == ""){
    document.getElementById("errorMessage").innerHTML += "Must enter a Username <br>" ;
    form.addEventListener('submit', handleForm);
  }
  if(atIndex == -1){
    document.getElementById("errorMessage").innerHTML += "Username must contain an '@', in the form name@domain.com <br>" ;
    form.addEventListener('submit', handleForm);
  }
  if(atIndex == 0){
    document.getElementById("errorMessage").innerHTML += "Username must contain a name, in the form name@domain.com <br>" ;
    form.addEventListener('submit', handleForm);
  }
  if(periodIndex == (userLength - 1)){
    document.getElementById("errorMessage").innerHTML += "Username must contain a domain, in the form name@domain.com <br>" ;
    form.addEventListener('submit', handleForm);
  }
  if(periodIndex == -1){
    document.getElementById("errorMessage").innerHTML += "Username must contain a '.', in the form name@domain.com <br>" ;
    form.addEventListener('submit', handleForm);
  }
  if(periodIndex < atIndex){
    document.getElementById("errorMessage").innerHTML += "'.' must come after '@' in username with the form name@domain.com <br>" ;
    form.addEventListener('submit', handleForm);
  }

  if(pass == ""){
    document.getElementById("errorMessage").innerHTML += "Must enter a Password <br>" ;
    form.addEventListener('submit', handleForm);
  }
  if(fiveQuantity < 0){
    document.getElementById("errorMessage").innerHTML += "Quantity for Five Dollars must be greater than or equal to zero <br>" ;
    form.addEventListener('submit', handleForm);
  }
  if(tenQuantity < 0){
    document.getElementById("errorMessage").innerHTML += "Quantity for Ten Dollars must be greater than or equal to zero <br>" ;
    form.addEventListener('submit', handleForm);
  }
  if(twentyQuantity < 0){
    document.getElementById("errorMessage").innerHTML += "Quantity for Twenty Dollars must be greater than or equal to zero <br>" ;
    form.addEventListener('submit', handleForm);
  }
  if(document.getElementById("sevenShip").checked == false && document.getElementById("threeShip").checked == false && document.getElementById("overNightShip").checked == false){
    document.getElementById("errorMessage").innerHTML += "Must select a shipping option <br>" ;
    form.addEventListener('submit', handleForm);
  }
  return true;
}
