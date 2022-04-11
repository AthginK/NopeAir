// <------------------------Home-------------------->
function Oneway_display() {
    document.getElementById('roundtrip_select').style.display = 'none';
    document.getElementById('oneway_select').style.display = 'block';
    document.getElementById('oneway_date').style.width = '30%'
    document.getElementById('oneway_place_from').style.width = '30%'
    document.getElementById('oneway_place_to').style.width = '30%'
}
function RoundTrip_display() {
    document.getElementById('oneway_select').style.display = 'none';
    document.getElementById('roundtrip_select').style.display = 'block';
}

// <------------------------Extra service------------------------->
function SelectSeat() {
    var btn = document.getElementById('SeatBtn').innerHTML;
    if (btn=="Close"){
        document.getElementById('SeatBtn').innerHTML = "Select";
    }
    else {
        document.getElementById('SeatBtn').innerHTML = "Close"
    }
}

function SelectBaggage() {
    var btn = document.getElementById('BaggageBtn').innerHTML;
    if (btn=="Close"){
        document.getElementById('BaggageBtn').innerHTML = "Edit";
    }
    else {
        document.getElementById('BaggageBtn').innerHTML = "Close"
    }
}

function SelectSpecial() {
    var btn = document.getElementById('SpecialBtn').innerHTML;
    if (btn=="Close"){
        document.getElementById('SpecialBtn').innerHTML = "Add";
    }
    else {
        document.getElementById('SpecialBtn').innerHTML = "Close"
    }
}

function SelectFirst() {
    var btn = document.getElementById('FirstBtn').innerHTML;
    if (btn=="Close"){
        document.getElementById('FirstBtn').innerHTML = "Add";
    }
    else {
        document.getElementById('FirstBtn').innerHTML = "Close"
    }
}