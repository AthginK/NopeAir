<!--connect database-->
<?php

include 'connect.php';
$flight = $_POST['flight'];
$trip = $_POST['trip'];
$flight = $_POST['flight'];
$trip = $_POST['trip'];
$DEbagg = $_POST['DEbagg'];
$REbagg = 0;
$DEspec = $_POST['DEspec'];
$REspec = 0;
$FPDE = $_POST['FPDE'];
$FPRE = 0;
$reprice = 0;
$seat = $_POST['seat'];
$seat_re = 0;


$sql = "SELECT * from flight WHERE flight_id = '$flight'";
$result = $conn -> query($sql);

while ($rows = $result -> fetch_assoc()) {
    $price = $rows['price'];
}

if ($trip == 'rt') {
    $REbagg = $_POST['REbagg'];
    $REspec = $_POST['REspec'];
    $FPRE = $_POST['FPRE'];
    $seat_re = $_POST['seat_re'];
    $flight2 = $_POST['flight2'];

    $sel = "SELECT * from flight WHERE flight_id = '$flight2'";
    $query = $conn -> query($sel);

    while ($row = $query -> fetch_assoc()) {
        $reprice =  $row['price'];
    }
}

$bill = $DEbagg + $REbagg + $DEspec + $REspec + $FPDE + $FPRE + $price + $reprice + $seat + $seat_re;


?>

<form action="payment.php" method='post' id='myform'>
    <input type="float" name='bill' value='<?php echo "$bill" ?>'>
    <input type="float" name='flight' value='<?php echo "$flight" ?>'>
    <input type="float" name='trip' value='<?php echo "$trip" ?>'>
    <?php
        if ($trip == 'rt') {
            echo 
                "<input type='float' name='flight2'";}
        if ($trip == 'rt') {
            echo 
                "value='$flight2'>";}
        if ($trip == 'rt') {
            echo 
                "<input type='float' name='reprice'";}
        if ($trip == 'rt') {
            echo 
                "value='$reprice'>";}
    ?>
</form>

<script>
    window.addEventListener('load', () => {
        document.getElementById('myform').submit()

    })
</script>