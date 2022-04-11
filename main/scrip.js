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
        document.getElementById('seatUp').style.display = 'none';
        document.getElementById('selectSeatShow').style.display = 'none';
        document.getElementById('SeatRow').style.margin = '0';
    }
    else {
        document.getElementById('SeatBtn').innerHTML = "Close";
        document.getElementById('seatUp').style.display = 'block';
        document.getElementById('selectSeatShow').style.display = 'block';
        document.getElementById('SeatRow').style.margin = '7% 0 0 0';
    }
}

function SelectBaggage() {
    var btn = document.getElementById('BaggageBtn').innerHTML;
    if (btn=="Close"){
        document.getElementById('BaggageBtn').innerHTML = "Edit";
        document.getElementById('BaggageUp').style.display = 'none';
        document.getElementById('selectBaggageShow').style.display = 'none';
        document.getElementById('BaggageRow').style.margin = '0';
    }
    else {
        document.getElementById('BaggageBtn').innerHTML = "Close";
        document.getElementById('BaggageUp').style.display = 'block';
        document.getElementById('selectBaggageShow').style.display = 'block';
        document.getElementById('BaggageRow').style.margin = '7% 0 0 0';
    }
}

function SelectSpecial() {
    var btn = document.getElementById('SpecialBtn').innerHTML;
    if (btn=="Close"){
        document.getElementById('SpecialBtn').innerHTML = "Add";
        document.getElementById('SpecialUp').style.display = 'none';
        document.getElementById('selectSpecialShow').style.display = 'none';
        document.getElementById('SpecialRow').style.margin = '0';
    }
    else {
        document.getElementById('SpecialBtn').innerHTML = "Close";
        document.getElementById('SpecialUp').style.display = 'block';
        document.getElementById('selectSpecialShow').style.display = 'block';
        document.getElementById('SpecialRow').style.margin = '7% 0 0 0';
    }
}

function SelectFirst() {
    var btn = document.getElementById('FirstBtn').innerHTML;
    if (btn=="Close"){
        document.getElementById('FirstBtn').innerHTML = "Add";
        document.getElementById('FirstUp').style.display = 'none';
        document.getElementById('selectFirstShow').style.display = 'none';
        document.getElementById('FirstRow').style.margin = '0';
    }
    else {
        document.getElementById('FirstBtn').innerHTML = "Close"
        document.getElementById('FirstUp').style.display = 'block';
        document.getElementById('selectFirstShow').style.display = 'block';
        document.getElementById('FirstRow').style.margin = '7% 0 0 0';
    }
}