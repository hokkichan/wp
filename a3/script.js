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
  document.getElementById("bookingFormTitle").innerHTML = ACT;
  }
else if (id == "ACTTue") {
  document.getElementById("movie[id]").value = "ACT";
  document.getElementById("movie[day]").value = "Tuesday";
  document.getElementById("movie[hour]").value = "12pm";
  document.getElementById("bookingFormTitle").innerHTML = ACT;
  }
}

function updateTotal() {
  document.getElementById("totalPrice").value = 20;
}

function validateCard() {
var cardNo = document.getElementById("cust[card]").value;
var cardRegex = /^(?! )^( ?\d){14,19}(?<! )$/;
var cardValidation = cardRegex.test(cardNo);

    if (!cardValidation) {
        alert("Please enter correct card number");
    }
  }