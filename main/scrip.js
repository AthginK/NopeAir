// <------------------------Home-------------------->
function Oneway_display() {
    document.getElementById('roundtrip_select').style.display = 'none';
    document.getElementById('oneway_select').style.display = 'block';
    document.getElementById('oneway_date').style.width = '30%';
    document.getElementById('oneway_place_from').style.width = '30%';
    document.getElementById('oneway_place_to').style.width = '30%';
    document.getElementById('rT').classList.remove("active");
    document.getElementById('oW').classList.add("active");

}
function RoundTrip_display() {
    document.getElementById('oneway_select').style.display = 'none';
    document.getElementById('roundtrip_select').style.display = 'block';
    document.getElementById('rT').classList.add("active");
    document.getElementById('oW').classList.remove("active");
}

/* Show country code & city (RoundTrip FROM)*/
function calcular1(val) {
    var country = val
    if (country == 'Bangkok') {
        var cc = 'BKK, Thailand';
        var to = document.getElementById('to_Bangkok');
        document.getElementById('to_Chiang Mai').style.display = 'block';
        document.getElementById('to_Phuket').style.display = 'block';
        document.getElementById('to_Hat Yai').style.display = 'block';
    }
    else if (country == 'Chiang Mai') {
        var cc = 'CNX, Thailand';
        var to = document.getElementById('to_Chiang Mai');
        document.getElementById('to_Bangkok').style.display = 'block';
        document.getElementById('to_Phuket').style.display = 'block';
        document.getElementById('to_Hat Yai').style.display = 'block';
    }
    else if (country == 'Phuket') {
        var cc = 'HKT, Thailand';
        var to = document.getElementById('to_Phuket');
        document.getElementById('to_Chiang Mai').style.display = 'block';
        document.getElementById('to_Bangkok').style.display = 'block';
        document.getElementById('to_Hat Yai').style.display = 'block';
    }
    else if (country == 'Hat Yai') {
        var cc = 'HDY, Thailand';
        var to = document.getElementById('to_Hat Yai');
        document.getElementById('to_Chiang Mai').style.display = 'block';
        document.getElementById('to_Phuket').style.display = 'block';
        document.getElementById('to_Bangkok').style.display = 'block';
    };

    /*prints the result*/
    var results = document.getElementById('FromCountry');
    results.innerHTML = cc;
    to.style.display = 'none';
}

/* Show country code & city (RoundTrip TO)*/
function calcular2(val) {
    var country = val
    if (country == 'Bangkok') {
        var cc = 'BKK, Thailand';
        var to = document.getElementById('from_Bangkok');
        document.getElementById('from_Chiang Mai').style.display = 'block';
        document.getElementById('from_Phuket').style.display = 'block';
        document.getElementById('from_Hat Yai').style.display = 'block';
    }
    else if (country == 'Chiang Mai') {
        var cc = 'CNX, Thailand';
        var to = document.getElementById('from_Chiang Mai');
        document.getElementById('from_Bangkok').style.display = 'block';
        document.getElementById('from_Phuket').style.display = 'block';
        document.getElementById('from_Hat Yai').style.display = 'block';
    }
    else if (country == 'Phuket') {
        var cc = 'HKT, Thailand';
        var to = document.getElementById('from_Phuket');
        document.getElementById('from_Chiang Mai').style.display = 'block';
        document.getElementById('from_Bangkok').style.display = 'block';
        document.getElementById('from_Hat Yai').style.display = 'block';
    }
    else if (country == 'Hat Yai') {
        var cc = 'HDY, Thailand';
        var to = document.getElementById('from_Hat Yai');
        document.getElementById('from_Chiang Mai').style.display = 'block';
        document.getElementById('from_Phuket').style.display = 'block';
        document.getElementById('from_Bangkok').style.display = 'block';
    };

    /*prints the result*/
    var results = document.getElementById('ToCountry');
    results.innerHTML = cc;
    to.style.display = 'none';
}

/* Show country code & city (OneWay FROM)*/
function calcular3(val) {
    var country = val
    if (country == 'Bangkok') {
        var cc = 'BKK, Thailand';
        var to = document.getElementById('OWto_Bangkok');
        document.getElementById('OWto_Chiang Mai').style.display = 'block';
        document.getElementById('OWto_Phuket').style.display = 'block';
        document.getElementById('OWto_Hat Yai').style.display = 'block';
    }
    else if (country == 'Chiang Mai') {
        var cc = 'CNX, Thailand';
        var to = document.getElementById('OWto_Chiang Mai');
        document.getElementById('OWto_Bangkok').style.display = 'block';
        document.getElementById('OWto_Phuket').style.display = 'block';
        document.getElementById('OWto_Hat Yai').style.display = 'block';
    }
    else if (country == 'Phuket') {
        var cc = 'HKT, Thailand';
        var to = document.getElementById('OWto_Phuket');
        document.getElementById('OWto_Chiang Mai').style.display = 'block';
        document.getElementById('OWto_Bangkok').style.display = 'block';
        document.getElementById('OWto_Hat Yai').style.display = 'block';
    }
    else if (country == 'Hat Yai') {
        var cc = 'HDY, Thailand';
        var to = document.getElementById('OWto_Hat Yai');
        document.getElementById('OWto_Chiang Mai').style.display = 'block';
        document.getElementById('OWto_Phuket').style.display = 'block';
        document.getElementById('OWto_Bangkok').style.display = 'block';
    };

    /*prints the result*/
    var results = document.getElementById('FromCountry');
    results.innerHTML = cc;
    to.style.display = 'none';
}

/* Show country code & city (OneWay TO)*/
function calcular4(val) {
    var country = val
    if (country == 'Bangkok') {
        var cc = 'BKK, Thailand';
        var to = document.getElementById('OWfrom_Bangkok');
        document.getElementById('OWfrom_Chiang Mai').style.display = 'block';
        document.getElementById('OWfrom_Phuket').style.display = 'block';
        document.getElementById('OWfrom_Hat Yai').style.display = 'block';
    }
    else if (country == 'Chiang Mai') {
        var cc = 'CNX, Thailand';
        var to = document.getElementById('OWfrom_Chiang Mai');
        document.getElementById('OWfrom_Bangkok').style.display = 'block';
        document.getElementById('OWfrom_Phuket').style.display = 'block';
        document.getElementById('OWfrom_Hat Yai').style.display = 'block';
    }
    else if (country == 'Phuket') {
        var cc = 'HKT, Thailand';
        var to = document.getElementById('OWfrom_Phuket');
        document.getElementById('OWfrom_Chiang Mai').style.display = 'block';
        document.getElementById('OWfrom_Bangkok').style.display = 'block';
        document.getElementById('OWfrom_Hat Yai').style.display = 'block';
    }
    else if (country == 'Hat Yai') {
        var cc = 'HDY, Thailand';
        var to = document.getElementById('OWfrom_Hat Yai');
        document.getElementById('OWfrom_Chiang Mai').style.display = 'block';
        document.getElementById('OWfrom_Phuket').style.display = 'block';
        document.getElementById('OWfrom_Bangkok').style.display = 'block';
    };

    /*prints the result*/
    var results = document.getElementById('ToCountry');
    results.innerHTML = cc;
    to.style.display = 'none';
}

/* Check Available Date */
function check_date2() {
    var redate = document.getElementById("reDate");
    var date = document.getElementById("Date").value;
    redate.min = date;
}

function change_return() {
    var date = document.getElementById("Date").value;
    var redate = document.getElementById("reDate");
    if (date > redate.value && redate.value !== '') {
        redate.value = date;
    }
}

// <-------------------- Passenger Information ------------------->
/*get user data*/
function handleSubmit() {
    const firstname = document.getElementById('f-firstname').value;
    const lastname = document.getElementById('f-lastname').value;
    const date_of_birth = document.getElementById('f-date_of_birth').value;
    const tel = document.getElementById('tel').value;
    const title = document.getElementById('f-title').value;
    const email = document.getElementById('f-email').value;

    localStorage.setItem("firstname", firstname);
    localStorage.setItem("lastname", lastname);
    localStorage.setItem("date_of_birth", date_of_birth);
    localStorage.setItem("tel", tel);
    localStorage.setItem("title", title);
    localStorage.setItem("email", email);

    return;
}

//<------------------------ Select Flight ------------------------>
/*get flight chosen by user*/
/*Round Trip Depart OR One Way*/
function getFlight(id) {
    var old = localStorage.getItem('flight');
    var Trip = localStorage.getItem('Trip');
    if (old !== null) {
        var old_flight = document.getElementById(old);
        if (old_flight !== null) {
            old_flight.classList.remove("activate");
        }
    }

    var new_flight = document.getElementById(id);
    new_flight.classList.add("activate");

    localStorage.setItem("flight", id);
    localStorage.setItem("price", new_flight.value);

    var next = document.getElementById('next');
    if (next.classList == 'btn next active2') {
        next.disabled = false;
    }
    else {
        next.classList.add('active');
    }

    if (Trip == 'ow') {
        next.disabled = false;
    }

}

/*Round Trip Return*/
function getFlight2(id) {
    var old = localStorage.getItem('flight2');
    if (old !== null) {
        var old_flight = document.getElementById(old);
        if (old_flight !== null) {
            old_flight.classList.remove("activate");
        }
    }

    var new_flight = document.getElementById(id);
    new_flight.classList.add("activate");

    localStorage.setItem("flight2", id);
    localStorage.setItem("price2", new_flight.value);
    
    var next = document.getElementById('next');
    if (next.classList == 'btn next active') {
        next.disabled = false;
    }
    else {
        next.classList.add('active2');
    }

}

function getTrip(id) {
    localStorage.setItem("Trip", id);
}

// <------------------------Extra service------------------------->
//เปิด ปิด
function SelectSeat() {
    var btn = document.getElementById('SeatBtn').innerHTML;
    if (btn == "Close") {
        document.getElementById('SeatBtn').innerHTML = "Select";
        document.getElementById('seatUp').style.display = 'none';
        document.getElementById('selectSeatShow').style.display = 'none';
        document.getElementById('SeatRow').style.margin = '0';
    }
    else {
        var bagg = document.getElementById('BaggageBtn').innerHTML;
        var special = document.getElementById('SpecialBtn').innerHTML;
        // ถ้าBaggageหรือSpecialเปิดอยู่ให้ปิดก่อน
        if (bagg == "Close") {
            document.getElementById('BaggageBtn').innerHTML = "Edit";
            document.getElementById('BaggageUp').style.display = 'none';
            document.getElementById('selectBaggageShow').style.display = 'none';
            document.getElementById('BaggageRow').style.margin = '0';
        }
        if (special == "Close") {
            document.getElementById('SpecialBtn').innerHTML = "Add";
            document.getElementById('SpecialUp').style.display = 'none';
            document.getElementById('selectSpecialShow').style.display = 'none';
            document.getElementById('SpecialRow').style.margin = '0';
        }
        document.getElementById('SeatBtn').innerHTML = "Close";
        document.getElementById('seatUp').style.display = 'block';
        document.getElementById('selectSeatShow').style.display = 'block';
        document.getElementById('SeatRow').style.margin = '7% 0 0 0';
    }
}

function SelectBaggage() {
    var btn = document.getElementById('BaggageBtn').innerHTML;
    if (btn == "Close") {
        document.getElementById('BaggageBtn').innerHTML = "Edit";
        document.getElementById('BaggageUp').style.display = 'none';
        document.getElementById('selectBaggageShow').style.display = 'none';
        document.getElementById('BaggageRow').style.margin = '0';
    }
    else {
        var seat = document.getElementById('SeatBtn').innerHTML;
        var special = document.getElementById('SpecialBtn').innerHTML;
        // ถ้าSeatหรือSpecialเปิดอยู่ให้ปิดก่อน
        if (seat == "Close") {
            document.getElementById('SeatBtn').innerHTML = "Select";
            document.getElementById('seatUp').style.display = 'none';
            document.getElementById('selectSeatShow').style.display = 'none';
            document.getElementById('SeatRow').style.margin = '0';
        }
        if (special == "Close") {
            document.getElementById('SpecialBtn').innerHTML = "Add";
            document.getElementById('SpecialUp').style.display = 'none';
            document.getElementById('selectSpecialShow').style.display = 'none';
            document.getElementById('SpecialRow').style.margin = '0';
        }
        document.getElementById('BaggageBtn').innerHTML = "Close";
        document.getElementById('BaggageUp').style.display = 'block';
        document.getElementById('selectBaggageShow').style.display = 'block';
        document.getElementById('BaggageRow').style.margin = '7% 0 0 0';
    }
}

function SelectSpecial() {
    var btn = document.getElementById('SpecialBtn').innerHTML;
    if (btn == "Close") {
        document.getElementById('SpecialBtn').innerHTML = "Add";
        document.getElementById('SpecialUp').style.display = 'none';
        document.getElementById('selectSpecialShow').style.display = 'none';
        document.getElementById('SpecialRow').style.margin = '0';
    }
    else {
        var seat = document.getElementById('SeatBtn').innerHTML;
        var bagg = document.getElementById('BaggageBtn').innerHTML;
        // ถ้าSeatหรือBaggageเปิดอยู่ให้ปิดก่อน
        if (seat == "Close") {
            document.getElementById('SeatBtn').innerHTML = "Select";
            document.getElementById('seatUp').style.display = 'none';
            document.getElementById('selectSeatShow').style.display = 'none';
            document.getElementById('SeatRow').style.margin = '0';
        }
        if (bagg == "Close") {
            document.getElementById('BaggageBtn').innerHTML = "Edit";
            document.getElementById('BaggageUp').style.display = 'none';
            document.getElementById('selectBaggageShow').style.display = 'none';
            document.getElementById('BaggageRow').style.margin = '0';
        }
        document.getElementById('SpecialBtn').innerHTML = "Close";
        document.getElementById('SpecialUp').style.display = 'block';
        document.getElementById('selectSpecialShow').style.display = 'block';
        document.getElementById('SpecialRow').style.margin = '7% 0 0 0';
    }
}

function SelectFirst() {
    var btn = document.getElementById('FirstBtn').innerHTML;
    if (btn == "Close") {
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

//Seat Selection
function display_seat(id) {
    var btn = document.getElementById(id);
    btn.classList.toggle('activate');
    if (id == 'btn_seat') {
        document.getElementById('btn_seat_return').classList.remove('activate')
        document.getElementById('seat_depart').classList.toggle('remove')
        document.getElementById('seat_return').classList.add('remove')
    } else if (id == 'btn_seat_return') {
        document.getElementById('btn_seat').classList.remove('activate')
        document.getElementById('seat_depart').classList.add('remove')
        document.getElementById('seat_return').classList.toggle('remove')
    }
}

//เปลี่ยนราคา
//Baggage
function DENoSelectBagg() {
    document.getElementById('DEbaggPrice').innerHTML = "<b>0.00</b><input type='float' name='DEbagg' value='0.00' style='display: none;'>";
    document.getElementById('selectBaggDE').innerHTML = "No selection";
}
function DETwentyKGBagg() {
    document.getElementById('DEbaggPrice').innerHTML = "<b>200.00</b><input type='float' name='DEbagg' value='200.00' style='display: none;'>";
    document.getElementById('selectBaggDE').innerHTML = "+20 kg Nope Baggage";
}
function DEThirtyKGBagg() {
    document.getElementById('DEbaggPrice').innerHTML = "<b>300.00</b><input type='float' name='DEbagg' value='300.00' style='display: none;'>";
    document.getElementById('selectBaggDE').innerHTML = "+30 kg Nope Baggage";
}
function DEFortyKGBagg() {
    document.getElementById('DEbaggPrice').innerHTML = "<b>400.00</b><input type='float' name='DEbagg' value='400.00' style='display: none;'>";
    document.getElementById('selectBaggDE').innerHTML = "+40 kg Nope Baggage";
}

function RENoSelectBagg() {
    document.getElementById('REbaggPrice').innerHTML = "<b>0.00</b><input type='float' name='REbagg' value='0.00' style='display: none;'>";
    document.getElementById('selectBaggRE').innerHTML = "No selection";
}
function RETwentyKGBagg() {
    document.getElementById('REbaggPrice').innerHTML = "<b>200.00</b><input type='float' name='REbagg' value='200.00' style='display: none;'>";
    document.getElementById('selectBaggRE').innerHTML = "+20 kg Nope Baggage";
}
function REThirtyKGBagg() {
    document.getElementById('REbaggPrice').innerHTML = "<b>300.00</b><input type='float' name='REbagg' value='300.00' style='display: none;'>";
    document.getElementById('selectBaggRE').innerHTML = "+30 kg Nope Baggage";
}
function REFortyKGBagg() {
    document.getElementById('REbaggPrice').innerHTML = "<b>400.00</b><input type='float' name='REbagg' value='400.00' style='display: none;'>";
    document.getElementById('selectBaggRE').innerHTML = "+40 kg Nope Baggage";
}

//Special Service
function DENoSelectNopeSpe() {
    document.getElementById('DEspecPrice').innerHTML = "<b>0.00</b><input type='float' name='DEspec' value='0.00' style='display: none;'>";
    document.getElementById('selectSpeDE').innerHTML = "No selection";
}
function DETwentyKGNopeSpe() {
    document.getElementById('DEspecPrice').innerHTML = "<b>200.00</b><input type='float' name='DEspec' value='200.00' style='display: none;'>";
    document.getElementById('selectSpeDE').innerHTML = "+20 kg Nope Baggage";
}
function DEThirtyKGNopeSpe() {
    document.getElementById('DEspecPrice').innerHTML = "<b>300.00</b><input type='float' name='DEspec' value='300.00' style='display: none;'>";
    document.getElementById('selectSpeDE').innerHTML = "+30 kg Nope Baggage";
}
function DEFortyKGNopeSpe() {
    document.getElementById('DEspecPrice').innerHTML = "<b>400.00</b><input type='float' name='DEspec' value='400.00' style='display: none;'>";
    document.getElementById('selectSpeDE').innerHTML = "+40 kg Nope Baggage";
}

function RENoSelectNopeSpe() {
    document.getElementById('REspecPrice').innerHTML = "<b>0.00</b><input type='float' name='REbagg' value='0.00' style='display: none;'>";
    document.getElementById('selectSpeRE').innerHTML = "No selection";
}
function RETwentyKGNopeSpe() {
    document.getElementById('REspecPrice').innerHTML = "<b>200.00</b><input type='float' name='REbagg' value='200.00' style='display: none;'>";
    document.getElementById('selectSpeRE').innerHTML = "+20 kg Nope Baggage";
}
function REThirtyKGNopeSpe() {
    document.getElementById('REspecPrice').innerHTML = "<b>300.00</b><input type='float' name='REbagg' value='300.00' style='display: none;'>";
    document.getElementById('selectSpeRE').innerHTML = "+30 kg Nope Baggage";
}
function REFortyKGNopeSpe() {
    document.getElementById('REspecPrice').innerHTML = "<b>400.00</b><input type='float' name='REbagg' value='400.00' style='display: none;'>";
    document.getElementById('selectSpeRE').innerHTML = "+40 kg Nope Baggage";
}

// Nope First
function FirstYesDE() {
    var check = document.querySelector('input[name="nameDE"]:checked').value;
    document.getElementById('FirstPriceDE').innerHTML = check;
    document.getElementById('FPDE').value = 200.00;
}

function FirstNoDE() {
    var check = document.querySelector('input[name="nameDE"]:checked').value;
    document.getElementById('FirstPriceDE').innerHTML = check;
    document.getElementById('FPDE').value = 0.00;
}

function FirstYesRE() {
    var check = document.querySelector('input[name="nameRE"]:checked').value;
    document.getElementById('FirstPriceRE').innerHTML = check;
    document.getElementById('FPRE').value = 200.00;
}

function FirstNoRE() {
    var check = document.querySelector('input[name="nameRE"]:checked').value;
    document.getElementById('FirstPriceRE').innerHTML = check;
    document.getElementById('FPRE').value = 0.00;
}

// <--------------------Payment-------------------------->
function creditShow() {
    var credit = document.getElementById("creditDebitShow").style.display;
    var atm = document.getElementById("atmShow").style.display;
    var qr = document.getElementById("qrShow").style.display;
    // ถ้า atm เปิดอยู่ให้ปิด
    if (atm == "block") {
        document.getElementById("atmShow").style.display = "none";
        document.getElementById('atmBox').style.backgroundColor = "white";
        document.getElementById('atmBox').style.boxShadow = "rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px";
    }
    // ถ้า qr เปิดอยู่ให้ปิด
    if (qr == "block") {
        document.getElementById("qrShow").style.display = "none";
        document.getElementById('qrBox').style.backgroundColor = "white";
        document.getElementById('qrBox').style.boxShadow = "rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px";
    }
    if (credit == "none") {
        document.getElementById("creditDebitShow").style.display = "block";
        document.getElementById('creditBox').style.backgroundColor = "#CFB1FF";
        document.getElementById('creditBox').style.boxShadow = "none";
    }
    else {
        document.getElementById("creditDebitShow").style.display = "none";
        document.getElementById('creditBox').style.backgroundColor = "white";
        document.getElementById('creditBox').style.boxShadow = "rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px";
    }
}

function atmShow() {
    var credit = document.getElementById("creditDebitShow").style.display;
    var atm = document.getElementById("atmShow").style.display;
    var qr = document.getElementById("qrShow").style.display;

    // ถ้า qr เปิดอยู่ให้ปิด
    if (qr == "block") {
        document.getElementById("qrShow").style.display = "none";
        document.getElementById('qrBox').style.backgroundColor = "white";
        document.getElementById('qrBox').style.boxShadow = "rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px";
    }
    // ถ้า credit เปิดอยู่ให้ปิด
    if (credit == "block") {
        document.getElementById("creditDebitShow").style.display = "none";
        document.getElementById('creditBox').style.backgroundColor = "white";
        document.getElementById('creditBox').style.boxShadow = "rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px";
    }

    if (atm == "none") {
        document.getElementById("atmShow").style.display = "block";
        document.getElementById('atmBox').style.backgroundColor = "#CFB1FF";
        document.getElementById('atmBox').style.boxShadow = "none";
    }
    else {
        document.getElementById("atmShow").style.display = "none";
        document.getElementById('atmBox').style.backgroundColor = "white";
        document.getElementById('atmBox').style.boxShadow = "rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px";
    }
}

function qrShow() {
    var credit = document.getElementById("creditDebitShow").style.display;
    var atm = document.getElementById("atmShow").style.display;
    var qr = document.getElementById("qrShow").style.display;

    // ถ้า credit เปิดอยู่ให้ปิด
    if (credit == "block") {
        document.getElementById("creditDebitShow").style.display = "none";
        document.getElementById('creditBox').style.backgroundColor = "white";
        document.getElementById('creditBox').style.boxShadow = "rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px";
    }
    // ถ้า atm เปิดอยู่ให้ปิด
    if (atm == "block") {
        document.getElementById("atmShow").style.display = "none";
        document.getElementById('atmBox').style.backgroundColor = "white";
        document.getElementById('atmBox').style.boxShadow = "rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px";
    }

    if (qr == "none") {
        document.getElementById("qrShow").style.display = "block";
        document.getElementById('qrBox').style.backgroundColor = "#CFB1FF";
        document.getElementById('qrBox').style.boxShadow = "none";
    }
    else {
        document.getElementById("qrShow").style.display = "none";
        document.getElementById('qrBox').style.backgroundColor = "white";
        document.getElementById('qrBox').style.boxShadow = "rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px";
    }
}
