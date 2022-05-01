const container = document.querySelector('.seat_container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const seatSelect = document.getElementById('seat');

populateUI();

let ticketPrice = +seatSelect.value;

// Save selected seat index and price
function setseatData(seatIndex, seatPrice) {
  localStorage.setItem('selectedseatIndex', seatIndex);
  localStorage.setItem('selectedseatPrice', seatPrice);
}

// Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');

  const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));

  localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
  document.getElementById('seat_price').value = selectedSeatsCount * ticketPrice;
  
  setseatData(seatSelect.selectedIndex, seatSelect.value);
}

// Get data from localstorage and populate UI
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }

  const selectedseatIndex = localStorage.getItem('selectedseatIndex');

  if (selectedseatIndex !== null) {
    seatSelect.selectedIndex = selectedseatIndex;
  }
}

// seat select event
seatSelect.addEventListener('change', e => {
  ticketPrice = +e.target.value;
  setseatData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});

// Seat click event
container.addEventListener('click', e => {
  if (
    e.target.classList.contains('seat') &&
    !e.target.classList.contains('occupied') &&
    localStorage.getItem('selectedSeats') == '[]' ||
    e.target.classList.contains('selected')
  ) {
    e.target.classList.toggle('selected');

    updateSelectedCount();
  }
});

// Initial count and total set
updateSelectedCount();


// Return
const container_re = document.querySelector('.seat_container_re');
const seats_re = document.querySelectorAll('.row .seat_re:not(.occupied)');
const count_re = document.getElementById('count_re');
const total_re = document.getElementById('total_re');
const seatSelect_re = document.getElementById('seat_re');

populateUI_re();

let ticketPrice_re = +seatSelect_re.value;

function setseatData_re(seatIndex_re, seatPrice_re) {
  localStorage.setItem('selectedseatIndex_re', seatIndex_re);
  localStorage.setItem('selectedseatPrice_re', seatPrice_re);
}

function updateSelectedCount_re() {
  const selectedSeats_re = document.querySelectorAll('.row .seat_re.selected');

  const seatsIndex_re = [...selectedSeats_re].map(seat => [...seats_re].indexOf(seat));

  localStorage.setItem('selectedSeats_re', JSON.stringify(seatsIndex_re));

  const selectedSeatsCount_re = selectedSeats_re.length;

  count_re.innerText = selectedSeatsCount_re;
  total_re.innerText = selectedSeatsCount_re * ticketPrice_re;
  document.getElementById('seat_price_re').value = selectedSeatsCount_re * ticketPrice_re;

  setseatData_re(seatSelect_re.selectedIndex_re, seatSelect_re.value);
}

function populateUI_re() {
  const selectedSeats_re = JSON.parse(localStorage.getItem('selectedSeats_re'));

  if (selectedSeats_re !== null && selectedSeats_re.length > 0) {
    seats_re.forEach((seat, index) => {
      if (selectedSeats_re.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }

  const selectedseatIndex_re = localStorage.getItem('selectedseatIndex_re');

  if (selectedseatIndex_re !== null) {
    seatSelect_re.selectedIndex_re = selectedseatIndex_re;
  }
}

seatSelect_re.addEventListener('change', e => {
  ticketPrice_re = +e.target.value;
  setseatData_re(e.target.selectedIndex_re, e.target.value);
  updateSelectedCount_re();
});

container_re.addEventListener('click', e => {

  if (
    e.target.classList.contains('seat_re') &&
    !e.target.classList.contains('occupied') &&
    localStorage.getItem('selectedSeats_re') == '[]' ||
    e.target.classList.contains('selected')
  ) {
    e.target.classList.toggle('selected');

    updateSelectedCount_re();
  }
});

updateSelectedCount_re();