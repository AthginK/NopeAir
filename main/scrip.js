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