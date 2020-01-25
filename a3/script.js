function toggle() {
alert('I am an alert box!');
document.getElementsByTagName("movie[ID]") = "RMC";
} //For testing only

var movieId = ["ACT", "AHF", "ANM", "RMC"];
var movieDay = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
var movieHour = ["12pm", "3pm", "6pm", "9pm"];
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

function calculatePrice() {
	var seatPrice = 20;
	var salePrice = seatPrice * document.getElementById("seats[STC]").value;
}

function updateTotal() {
    var updateTotal = document.getElementById("salePrice").value;
    updateTotal.value = total.toFixed(2);
}

function selectDay() {
if (id == "ACTMon") {
        document.getElementById("movie[id]").value = "ACT";
        document.getElementById("movie[day]").value = "Monday";
        document.getElementById("movie[hour]").value = "12pm"
        document.getElementById("bookingFormTitle").innerHTML = ACT;
}
else if (id == "ACTTue") {
        document.getElementById("movie[id]").value = "ACT";
        document.getElementById("movie[day]").value = "Tuesday";
        document.getElementById("movie[hour]").value = "12pm"
        document.getElementById("bookingFormTitle").innerHTML = ACT;
}


function checkCard() {
var cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
  if(inputtxt.value.match(cardno))
        {
      return true;
        }
      else
        {
        alert("Not a valid card number!");
        return false;
        }
  }
}
