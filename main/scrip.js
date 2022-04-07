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