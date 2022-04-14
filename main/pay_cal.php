<!--connect database-->
<?php

include 'connect.php';
$flight = $_POST['flight'];
$trip = $_POST['trip'];
$flight = $_POST['flight'];
$trip = $_POST['trip'];
$DEbagg = $_POST['DEbagg'];
$REbagg = $_POST['REbagg'];
$DEspec = $_POST['DEspec'];
$REspec = $_POST['REspec'];
$FPDE = $_POST['FPDE'];
$FPRE = $_POST['FPRE'];
$reprice = 0;


$sql = "SELECT * from flight WHERE flight_id = '$flight'";
$result = $conn -> query($sql);

while ($rows = $result -> fetch_assoc()) {
    $price = $rows['price'];
}

if ($trip == 'rt') {
    $flight2 = $_POST['flight2'];

    $sel = "SELECT * from flight WHERE flight_id = '$flight2'";
    $query = $conn -> query($sel);

    while ($row = $query -> fetch_assoc()) {
        $reprice =  $row['price'];
    }
}

$bill = $DEbagg + $REbagg + $DEspec + $REspec + $FPDE + $FPRE + $price + $reprice;


?>

<form action="payment.php" method='post' id='myform'>
    <input type="float" name='bill' value='<?php echo "$bill" ?>'>
    <input type="float" name='flight' value='<?php echo "$flight" ?>'>
    <input type="float" name='trip' value='<?php echo "$trip" ?>'>
    <input type="float" name='DEbagg' value='<?php echo "$DEbagg" ?>'>
    <input type="float" name='REbagg' value='<?php echo "$REbagg" ?>'>
    <input type="float" name='DEspec' value='<?php echo "$DEspec" ?>'>
    <input type="float" name='REspec' value='<?php echo "$REspec" ?>'>
    <input type="float" name='price' value='<?php echo "$price" ?>'>
    <input type="float" name='FPDE' value='<?php echo "$FPDE" ?>'>
    <input type="float" name='FPRE' value='<?php echo "$FPRE" ?>'>
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