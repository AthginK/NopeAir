<!--connect database-->
<?php

include 'connect.php';
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

<form action="payment.html" method='post' id='myform'>
    <input type="float" name='bill' value='<?php echo "$bill" ?>'>
</form>

<script>
    window.addEventListener('load', () => {
        document.getElementById('myform').submit()
        header('Location: payment.php');
    })
</script>