function toggle() {
alert('I am an alert box!');
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

function updateTotal() {
	var totalPrice = 0;
	var totalPrice += document.getElementById("seats[STA]").value;
}

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
function updatedHeading () {
    var updatedHeading = document.getElementById("bookingFormHeading");
    let updatedFormTitle = movie[title] + ' - ' + movie[day] + ' - ' + movie[hour];
    bookingFormTitle.innerHTML = updatedFormTitle;
}


function validate() {
var cardno = document.getElementById("custCard").value;
var cardRegex = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
  if(cardRegex.value.match(cardno))
        {
      return true;
        }
      else
        {
        alert("Not a valid card number!");
        return false;
        }
  }

