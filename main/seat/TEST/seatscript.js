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
        !e.target.classList.contains('occupied')
    ) {
        e.target.classList.toggle('selected');

        updateSelectedCount_re();
    }
});

updateSelectedCount_re();