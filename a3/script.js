//Function on nav bar with color change on scrolling
window.onscroll = function () {
  //console.clear();
  //console.log("Win Y: "+window.scrollY);
  var navlinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
  var sections = document.getElementsByTagName('main')[0].getElementsByTagName('section');
  for (var a=0; a<sections.length; a++) {
    var sectionTop = sections[a].offsetTop;
    var sectionBot = sections[a].offsetTop+sections[a].offsetHeight;
    if (window.scrollY >= sectionTop && window.scrollY < sectionBot) {
    //console.log(sections[a].id+': current');
    navlinks[a].classList.add('current');
    } else {
    //console.log(sections[a].id+':');
    navlinks[a].classList.remove('current');
    }
  }
}

//Code on showing/hiding synopsis
//It is regretful that despite repeated trying, I could not produce the code on showing/hiding synopsis upon toggling, 
//so I chose to display the synopsis of all four movies.

//Function on updating booking form
var movieId = ["ACT", "AHF", "ANM", "RMC"];
var movieDay = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
var movieHour = ["12pm", "3pm", "6pm", "9pm"];
var bookingFormTitle = ["Star Wars The Rise of Skywalker"];
var seatsSTA = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
var seatsSTP = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
var seatsSTC = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
var seatsFCA = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
var seatsFCP = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
var seatsFCC = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

var custName = "";
var custEmail = "";
var custMobile = "";
var custCard = "";
var custExpiry = "";

function selectDay(id) {
if (id == "ACTMon") {
  document.getElementById("movie[id]").value = "ACT";
  document.getElementById("movie[day]").value = "Monday";
  document.getElementById("movie[hour]").value = "12pm";
  document.getElementById("bookingFormTitle").value = "Star Wars: The Rise of Skywalker";
  }
  else if (id == "ACTTue") {
  document.getElementById("movie[id]").value = "ACT";
  document.getElementById("movie[day]").value = "Tuesday";
  document.getElementById("movie[hour]").value = "12pm";
  document.getElementById("bookingFormTitle").value = "Star Wars: The Rise of Skywalker";
  }
  else if (id == "ACTWed") {
  document.getElementById("movie[id]").value = "ACT";
  document.getElementById("movie[day]").value = "Wednesday";
  document.getElementById("movie[hour]").value = "6pm";
  document.getElementById("bookingFormTitle").value = "Star Wars: The Rise of Skywalker";
  }
  else if (id == "ACTThu") {
  document.getElementById("movie[id]").value = "ACT";
  document.getElementById("movie[day]").value = "Thursday";
  document.getElementById("movie[hour]").value = "6pm";
  document.getElementById("bookingFormTitle").value = "Star Wars: The Rise of Skywalker";
  }
  else if (id == "ACTFri") {
  document.getElementById("movie[id]").value = "ACT";
  document.getElementById("movie[day]").value = "Friday";
  document.getElementById("movie[hour]").value = "6pm";
  document.getElementById("bookingFormTitle").value = "Star Wars: The Rise of Skywalker";
  }
  else if (id == "ACTSat") {
  document.getElementById("movie[id]").value = "ACT";
  document.getElementById("movie[day]").value = "Saturday";
  document.getElementById("movie[hour]").value = "12pm";
  document.getElementById("bookingFormTitle").value = "Star Wars: The Rise of Skywalker";
  }
  else if (id == "ACTSun") {
  document.getElementById("movie[id]").value = "ACT";
  document.getElementById("movie[day]").value = "Sunday";
  document.getElementById("movie[hour]").value = "12pm";
  document.getElementById("bookingFormTitle").value = "Star Wars: The Rise of Skywalker";
  }
  else if (id == "ANMWed") {
  document.getElementById("movie[id]").value = "ANM";
  document.getElementById("movie[day]").value = "Wednesday";
  document.getElementById("movie[hour]").value = "9pm";
  document.getElementById("bookingFormTitle").value = "Frozen 2";
  }
  else if (id == "ANMThu") {
  document.getElementById("movie[id]").value = "ANM";
  document.getElementById("movie[day]").value = "Thursday";
  document.getElementById("movie[hour]").value = "9pm";
  document.getElementById("bookingFormTitle").value = "Frozen 2";
  }
  else if (id == "ANMFri") {
  document.getElementById("movie[id]").value = "ANM";
  document.getElementById("movie[day]").value = "Friday";
  document.getElementById("movie[hour]").value = "9pm";
  document.getElementById("bookingFormTitle").value = "Frozen 2";
  }
  else if (id == "ANMSat") {
  document.getElementById("movie[id]").value = "ANM";
  document.getElementById("movie[day]").value = "Saturday";
  document.getElementById("movie[hour]").value = "6pm";
  document.getElementById("bookingFormTitle").value = "Frozen 2";
  }
  else if (id == "ANMSun") {
  document.getElementById("movie[id]").value = "ANM";
  document.getElementById("movie[day]").value = "Sunday";
  document.getElementById("movie[hour]").value = "6pm";
  document.getElementById("bookingFormTitle").value = "Frozen 2";
  }
  else if (id == "RMCMon") {
  document.getElementById("movie[id]").value = "RMC";
  document.getElementById("movie[day]").value = "Monday";
  document.getElementById("movie[hour]").value = "6pm";
  document.getElementById("bookingFormTitle").value = "The Aeronauts";
  }
  else if (id == "RMCTue") {
  document.getElementById("movie[id]").value = "RMC";
  document.getElementById("movie[day]").value = "Tuesday";
  document.getElementById("movie[hour]").value = "6pm";
  document.getElementById("bookingFormTitle").value = "The Aeronauts";
  }
  else if (id == "RMCSat") {
  document.getElementById("movie[id]").value = "RMC";
  document.getElementById("movie[day]").value = "Saturday";
  document.getElementById("movie[hour]").value = "3pm";
  document.getElementById("bookingFormTitle").value = "The Aeronauts";
  }
  else if (id == "RMCSun") {
  document.getElementById("movie[id]").value = "RMC";
  document.getElementById("movie[day]").value = "Sunday";
  document.getElementById("movie[hour]").value = "3pm";
  document.getElementById("bookingFormTitle").value = "The Aeronauts";
  }
  else if (id == "RMCSun") {
  document.getElementById("movie[id]").value = "RMC";
  document.getElementById("movie[day]").value = "Sunday";
  document.getElementById("movie[hour]").value = "3pm";
  document.getElementById("bookingFormTitle").value = "The Aeronauts";
  }
  else if (id == "AHFWed") {
  document.getElementById("movie[id]").value = "AHF";
  document.getElementById("movie[day]").value = "Wednesday";
  document.getElementById("movie[hour]").value = "12pm";
  document.getElementById("bookingFormTitle").value = "Jojo Rabbit";
  }
  else if (id == "AHFThu") {
  document.getElementById("movie[id]").value = "AHF";
  document.getElementById("movie[day]").value = "Thursday";
  document.getElementById("movie[hour]").value = "12pm";
  document.getElementById("bookingFormTitle").value = "Jojo Rabbit";
  }
  else if (id == "AHFFri") {
  document.getElementById("movie[id]").value = "AHF";
  document.getElementById("movie[day]").value = "Friday";
  document.getElementById("movie[hour]").value = "12pm";
  document.getElementById("bookingFormTitle").value = "Jojo Rabbit";
  }
  else if (id == "AHFSun") {
  document.getElementById("movie[id]").value = "AHF";
  document.getElementById("movie[day]").value = "Saturday";
  document.getElementById("movie[hour]").value = "9pm";
  document.getElementById("bookingFormTitle").value = "Jojo Rabbit";
  }
  else if (id == "AHFSun") {
  document.getElementById("movie[id]").value = "AHF";
  document.getElementById("movie[day]").value = "Sunday";
  document.getElementById("movie[hour]").value = "9pm";
  document.getElementById("bookingFormTitle").value = "Jojo Rabbit";
  }
}



function updateTotal() {
  var day = document.getElementById("movie[day]").value;
  var hour = document.getElementById("movie[hour]").value;
  var totalPrice = 0;

  if (document.getElementById("movie[day]").value = "Monday") {
  var totalPrice = 20* document.getElementById("seats[STA]").value;
  totalPrice += 10* document.getElementById("seats[STP]").value;
  document.getElementById("totalPrice").value = totalPrice;
  }
  else {
  var totalPrice = 2* document.getElementById("seats[STA]").value;
  totalPrice += 1* document.getElementById("seats[STP]").value;
  document.getElementById("totalPrice").value = totalPrice;
  }
}



function validateName() {
  var custName = document.getElementById("cust[name]").value;
  var nameRegex = /^[a-zA-Z \-.']{1,100}$/;
  var nameValidation = nameRegex.text(custName);
    if (!nameValidation) {
      alert("Please enter the correct name!")
    }
}

//function validateEmail() {
//Regex for email validation would be done by browser

function validateMobile() {
var custMobile = document.getElementById("cust[mobile]").value;
var mobileRegex = /^(?! )^( ?\d){14,19}(?<! )$/;
var mobileValidation = cardRegex.test(custMobile);
    if (!mobileValidation) {
        alert("Please enter the correct mobile number!");
    }
}

function validateCard() {
var custCard = document.getElementById("cust[card]").value;
var cardRegex = /^(?! )^( ?\d){14,19}(?<! )$/;
var cardValidation = cardRegex.test(custCard);
    if (!cardValidation) {
        alert("Please enter the correct card number!");
    }
}
