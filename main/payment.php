<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link href="style.css" rel="stylesheet">

    <!-- Java script -->
    <script src="scrip.js"></script>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>NopeAir - Payment</title>
    <!--script-->
    <script type="text/javascript">
        window.addEventListener('load', () => {

            const firstname = localStorage.getItem('firstname');
            const lastname = localStorage.getItem('lastname');
            const date_of_birth = localStorage.getItem('date_of_birth');
            const title = localStorage.getItem('title');
            const email = localStorage.getItem('email');
            const tel = localStorage.getItem('tel');

            document.getElementById('firstname').innerHTML = firstname;
            document.getElementById('lastname').innerHTML = lastname;
            document.getElementById('date_of_birth').innerHTML = date_of_birth;
            document.getElementById('title').innerHTML = title;
            document.getElementById('email').innerHTML = email;
            document.getElementById('f-title').value = title;
            document.getElementById('f-firstname').value = firstname;
            document.getElementById('f-lastname').value = lastname;
            document.getElementById('f-date_of_birth').value = date_of_birth;
            document.getElementById('f-email').value = email;
            document.getElementById('f-tel').value = tel;
            document.getElementById('pre-firstname').value = firstname;
            document.getElementById('pre-lastname').value = lastname;

            const trip = localStorage.getItem('Trip');
            document.getElementById('pre_get_trip').value = trip;
            const flight = localStorage.getItem('flight');
            document.getElementById('pre_flight').value = flight;
            if (trip == 'rt') {
                const flight2 = localStorage.getItem('flight2');
                document.getElementById('pre_flight2').value = flight2;
            }

        })
    </script>

    <!--connect database-->
    <?php

        include 'connect.php';
        $flight = $_POST['flight'];
        $trip = $_POST['trip'];
        $bill = $_POST['bill'];
        
        $sel = "SELECT * from flight WHERE flight_id = '$flight'";
        $query = $conn -> query($sel);

        while ($row = $query -> fetch_assoc()) {
            $from = $row['from_place'];
            $to =  $row['to_place'];
            $date =  $row['flight_date'];
        }

        if ($trip == 'rt') {
            $flight2 = $_POST['flight2'];

            $sel = "SELECT * from flight WHERE flight_id = '$flight2'";
            $query = $conn -> query($sel);

            while ($row = $query -> fetch_assoc()) {
                $return =  $row['flight_date'];
            }
        }
    ?>
</head>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <svg width="376.074" height="94.727" viewBox="0 0 376.074 94.727"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="svgGroup" stroke-linecap="round" fill-rule="evenodd" font-size="9pt" stroke="#000"
                            stroke-width="0.25mm" fill="black" style="stroke:#000;stroke-width:0.25mm;fill:black">
                            <path
                                d="M 12.012 72.412 L 0 72.412 L 0 0.879 L 14.063 0.879 A 1806.24 1806.24 0 0 0 16.105 4.065 Q 19.412 9.212 25.531 18.692 A 23127.84 23127.84 0 0 0 29.541 24.902 A 55238.692 55238.692 0 0 0 33.596 31.179 Q 41.047 42.711 43.386 46.314 A 981.127 981.127 0 0 0 43.75 46.875 A 147.722 147.722 0 0 0 44.182 47.533 Q 44.849 48.544 45.989 50.248 A 1167.78 1167.78 0 0 0 46.265 50.659 A 997.445 997.445 0 0 1 47.09 51.894 Q 48.11 53.421 48.657 54.256 A 107.7 107.7 0 0 1 48.779 54.443 A 35968.043 35968.043 0 0 1 48.699 50.508 Q 48.476 39.496 48.443 37.485 A 38.322 38.322 0 0 1 48.438 37.061 L 48.438 0.879 L 60.498 0.879 L 60.498 72.412 L 46.24 72.412 L 13.965 22.119 L 11.621 18.262 A 1664.304 1664.304 0 0 1 11.792 24.228 Q 11.989 31.59 12.009 35.502 A 165.39 165.39 0 0 1 12.012 36.377 L 12.012 72.412 Z M 259.326 72.412 L 245.508 72.412 L 271.826 0.83 L 286.23 0.83 L 312.158 72.412 L 298.584 72.412 L 291.504 52.197 L 266.455 52.197 L 259.326 72.412 Z M 147.119 94.092 L 134.326 94.727 L 134.326 18.75 L 145.313 18.75 L 146.68 26.27 A 18.11 18.11 0 0 1 153.687 19.702 A 20.065 20.065 0 0 1 162.019 17.424 A 23.999 23.999 0 0 1 163.428 17.383 A 20.065 20.065 0 0 1 170.696 18.674 A 18.649 18.649 0 0 1 175.024 21.045 Q 180.029 24.707 182.617 31.03 A 34.442 34.442 0 0 1 184.871 39.803 A 44.001 44.001 0 0 1 185.205 45.312 Q 185.205 56.669 180.188 64.187 A 25.8 25.8 0 0 1 179.175 65.601 A 19.205 19.205 0 0 1 165.198 73.33 A 25.251 25.251 0 0 1 162.842 73.438 A 22.026 22.026 0 0 1 157.147 72.723 A 19.104 19.104 0 0 1 153.638 71.411 Q 149.512 69.385 146.729 65.918 A 1716.775 1716.775 0 0 1 146.82 67.58 Q 147.1 72.707 147.118 73.71 A 6.734 6.734 0 0 1 147.119 73.828 L 147.119 94.092 Z M 241.699 48.193 L 206.006 48.193 Q 206.157 53.996 208.532 57.778 A 13.011 13.011 0 0 0 210.132 59.839 A 12.959 12.959 0 0 0 217.108 63.599 A 19.137 19.137 0 0 0 220.947 63.965 A 33.687 33.687 0 0 0 237.303 59.675 A 39.716 39.716 0 0 0 237.842 59.375 L 239.648 68.457 A 32.851 32.851 0 0 1 227.749 72.849 A 43.489 43.489 0 0 1 220.459 73.438 Q 208.515 73.438 201.459 67.092 A 22.776 22.776 0 0 1 200.317 65.991 A 24.58 24.58 0 0 1 194.214 54.804 Q 193.218 50.941 193.125 46.365 A 46.786 46.786 0 0 1 193.115 45.41 Q 193.115 33.834 198.673 26.535 A 24.05 24.05 0 0 1 199.902 25.049 A 22.478 22.478 0 0 1 213.767 17.774 A 32.16 32.16 0 0 1 218.408 17.432 A 28.396 28.396 0 0 1 225.589 18.289 A 19.691 19.691 0 0 1 235.62 24.365 A 23.69 23.69 0 0 1 240.922 34.959 A 34.919 34.919 0 0 1 241.748 42.773 A 86.443 86.443 0 0 1 241.747 43.253 Q 241.742 44.067 241.724 45.459 Q 241.699 47.314 241.699 48.193 Z M 357.764 72.412 L 344.971 72.412 L 344.971 18.75 L 355.713 18.75 L 357.373 26.953 Q 362.253 19.135 371.19 18.553 A 22.529 22.529 0 0 1 372.656 18.506 A 37.697 37.697 0 0 1 373.892 18.525 Q 374.53 18.546 375.076 18.59 A 15.203 15.203 0 0 1 376.074 18.701 L 375.879 29.395 A 27.135 27.135 0 0 0 372.092 29.103 A 29.897 29.897 0 0 0 371.826 29.102 Q 364.746 29.102 361.255 32.861 Q 358.045 36.318 357.786 42.252 A 24.32 24.32 0 0 0 357.764 43.311 L 357.764 72.412 Z M 89.562 72.375 A 29.586 29.586 0 0 0 97.705 73.438 A 33.537 33.537 0 0 0 104.583 72.768 A 22.483 22.483 0 0 0 116.992 65.845 Q 123.877 58.252 123.877 45.41 A 38.408 38.408 0 0 0 122.959 36.768 A 26.03 26.03 0 0 0 117.065 25.073 Q 110.254 17.432 98.242 17.432 A 33.719 33.719 0 0 0 90.925 18.182 A 22.284 22.284 0 0 0 78.955 24.927 A 23.413 23.413 0 0 0 76.838 27.62 Q 72.119 34.619 72.119 45.41 Q 72.119 58.008 78.955 65.723 A 21.917 21.917 0 0 0 89.562 72.375 Z M 331.592 72.412 L 318.799 72.412 L 318.799 18.75 L 331.592 18.75 L 331.592 72.412 Z M 98.047 63.721 A 14.073 14.073 0 0 0 102.131 63.161 A 10.392 10.392 0 0 0 107.812 58.984 A 16.122 16.122 0 0 0 109.915 54.509 Q 110.568 52.377 110.856 49.788 A 39.66 39.66 0 0 0 111.084 45.41 A 39.154 39.154 0 0 0 110.78 40.359 Q 110.455 37.869 109.783 35.83 A 15.496 15.496 0 0 0 107.812 31.787 A 10.628 10.628 0 0 0 100.304 27.264 A 16.167 16.167 0 0 0 97.949 27.1 A 14.17 14.17 0 0 0 93.862 27.656 A 10.463 10.463 0 0 0 88.159 31.812 Q 84.863 36.523 84.863 45.459 A 37.4 37.4 0 0 0 85.188 50.556 Q 85.544 53.142 86.293 55.249 A 15.53 15.53 0 0 0 88.184 58.984 A 10.794 10.794 0 0 0 96.081 63.605 A 16.163 16.163 0 0 0 98.047 63.721 Z M 160.107 63.672 A 10.88 10.88 0 0 0 164.788 62.689 Q 167.038 61.633 168.713 59.442 A 13.803 13.803 0 0 0 169.116 58.887 A 16.344 16.344 0 0 0 171.243 54.347 Q 171.9 52.188 172.188 49.568 A 39.936 39.936 0 0 0 172.412 45.215 A 39.237 39.237 0 0 0 172.119 40.247 Q 171.805 37.794 171.154 35.797 A 14.714 14.714 0 0 0 169.092 31.641 A 10.567 10.567 0 0 0 161.474 27.189 A 14.071 14.071 0 0 0 159.863 27.1 A 13.06 13.06 0 0 0 153.859 28.392 Q 148.422 31.166 147.307 39.893 A 38.094 38.094 0 0 0 147.021 44.385 A 47.827 47.827 0 0 0 147.282 49.569 Q 147.86 54.852 149.721 58.075 A 12.088 12.088 0 0 0 150.317 59.009 A 10.722 10.722 0 0 0 158.109 63.552 A 16.128 16.128 0 0 0 160.107 63.672 Z M 279.102 13.232 L 269.775 42.334 L 288.135 42.334 Q 279.346 14.16 279.102 13.232 Z M 206.25 40.137 L 229.688 40.137 A 23.164 23.164 0 0 0 229.397 36.343 Q 229.057 34.299 228.319 32.658 A 10.836 10.836 0 0 0 226.709 30.078 A 9.741 9.741 0 0 0 220.354 26.686 A 14.062 14.062 0 0 0 218.457 26.562 Q 213.525 26.563 210.132 29.98 A 11.951 11.951 0 0 0 207.526 34.071 Q 206.838 35.812 206.498 37.952 A 25.901 25.901 0 0 0 206.25 40.137 Z M 331.641 10.938 L 318.799 10.938 L 318.799 0 L 331.641 0 L 331.641 10.938 Z"
                                vector-effect="non-scaling-stroke" />
                        </g>
                    </svg><br>
                </div>
            </div>
            <p style="font-family: 'Yellowtail', cursive;">@Ponam</p>
        </div>
    </div>
    <div class="main">
        <div class="container-fluid" id="info" style="padding: 0%;">

            <div class="flight info">
                <div class="col-sm-3" id="flightFrom">From: <?php echo "$from"?></div>
                <div class="col-sm-3" id="flightTo">To: <?php echo "$to"?></div>
                <div class="col-sm-3" id="flightPerson">Person</div>
                <div class="col-sm-3" id="flightPrice">Price: <?php echo "$bill"?></div>
            </div>

            <div class="root">
                <div class="stepBar">
                    <ul class="progressbar">
                        <li class="active">Search</li>
                        <li class="active">Select Flight</li>
                        <li class="active">Passenger Info</li>
                        <li class="active">Extra Services</li>
                        <li class="active">Payment</li>
                    </ul>
                </div>
            </div><br>

            <h4><b><img src="http://localhost/NopeAir/image/user.svg" style="width: 40px;height: 40px;">&nbsp;&nbsp;Passengers</b></h4>

            <div class="box payment passenger">
                <div class="row">
                    <div class="col-sm-4" id="PassPay_age" style="margin-left: 2%;">
                        Adult
                    </div>

                    <div class="col-sm-3" id="PassPay_dob">
                        Date of birth
                    </div>

                    <div class="col-sm-3" id="PassPay_email">
                        Email
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4" id="PassPay_age_info" style="margin-left: 2%;">
                        <div class="row">
                            <div class="col-sm-6" id="PassPay_Fname"><span id="title"></span>&nbsp;<span
                                    id="firstname"></span></div>
                            <div class="col-sm-6" id="PassPay_lname"><span id="lastname"></span></div>
                        </div>
                    </div>

                    <div class="col-sm-3" id="PassPay_dob_info">
                        <span id="date_of_birth"></span>
                    </div>

                    <div class="col-sm-3" id="PassPay_dob_info">
                        <span id="email"></span>
                    </div>
                </div>

            </div>

            <h4><b><img src="http://localhost/NopeAir/image/payment.svg" style="width: 40px;height: 40px;">&nbsp;&nbsp;Payments</b></h4>

            <div class="box payment method" onclick="creditShow()" id="creditBox">
                <p class="payMethod">CREDIT / DEBIT CARD<img src="http://localhost/NopeAir/image/downward-arrow.svg"
                        style="width: 15px;height: 15px;float: right;margin-right: 2%;"></p>
            </div>

            <div class="creditDebitShow" id="creditDebitShow">
                <p>You have selected credit card/ debit card payment</p>
                <Label style="font-size: 20px; font-family: 'Prompt', sans-serif;">Card number</Label>
                <input type="number" class="cardNum" id="cardNum" name="cardNum" placeholder="Card Number"><br>

                <Label style="font-size: 20px; font-family: 'Prompt', sans-serif;">Expiration date</Label>
                <select class="exMonth" id="title" name="title">
                    <option value="">--Month--</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>

                <select class="exYear" id="title" name="title">
                    <option value="">--Year--</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                    <option value="2032">2032</option>
                    <option value="2033">2033</option>
                    <option value="2034">2034</option>
                    <option value="2035">2035</option>
                    <option value="2036">2036</option>
                    <option value="2037">2037</option>
                    <option value="2038">2038</option>
                    <option value="2039">2039</option>
                    <option value="2040">2040</option>
                    <option value="2041">2041</option>
                    <option value="2042">2042</option>
                    <option value="2043">2043</option>
                    <option value="2044">2044</option>
                    <option value="2045">2045</option>
                    <option value="2046">2046</option>
                    <option value="2047">2047</option>
                </select>
                <br>
                <Label style="font-size: 20px; font-family: 'Prompt', sans-serif;">Security code</Label>
                <input type="number" class="SecCode" id="SecCode" name="SecCode" placeholder="Security code"><br>

                <p>Conditions</p>
                <ul>??? This fee is charged per passenger per flight.</ul>
                <ul>??? For Connecting Flight, this fee is charged per passenger per booking.</ul>
                <ul>??? NokAir will randomly perform a credit/debit card physical verification at check-in
                    counter, IF
                    your
                    online transaction was made from credit/debit card which was issued</ul>
                <p>from Bank outside Thailand.Unless your credit/debit card was successfully pass process
                    Verified by
                    Visa or MasterCard Secure Code or J-Secure or One Time Password from your issued bank.
                    Otherwise,
                    Nok Air reserved the rights to deny boarding.</p>
            </div>

            <div class="box payment method" onclick="atmShow()" id="atmBox">
                <p class="payMethod">COUNTER PAYMENT / ATM<img src="http://localhost/NopeAir/image/downward-arrow.svg"
                        style="width: 15px;height: 15px;float: right;margin-right: 2%;"></p>
            </div>

            <div class="atmShow" id="atmShow">
                <p>You have selected counter / atm payment</p>
                <img src="http://localhost/NopeAir/image/barcode.gif"><br><br>
                <p>Conditions</p>
                <ul>??? Maximum 3 transactions/day/phone number.</ul>
                <ul>??? Service fee to be collected by mobile operator.</ul>
                <ul>??? Support only AIS, DTAC and TRUE mobile operator.</ul>
                <ul>??? For payment in Thailand with THB currency only.</ul>
                <ul>??? Payment fee charge per passenger for payment over counter.</ul>
                <ul>??? Payment fee charge per transaction for payment over ATM.</ul>
                <ul>??? Payment fee will collect at payment channel.</ul>
            </div>

            <div class="box payment method" onclick="qrShow()" id="qrBox">
                <p class="payMethod">QR PAYMENT<img src="http://localhost/NopeAir/image/downward-arrow.svg"
                        style="width: 15px;height: 15px;float: right;margin-right: 2%;"></p>
            </div>

            <div class="qrShow" id="qrShow">
                <p>You have selected QR payment</p>
                <img src="http://localhost/NopeAir/image/qr.svg" style="height: 300px;width: 300px;"><br><br>
                <p>Conditions</p>
                <ul>??? Maximum 3 transactions/day/phone number.</ul>
                <ul>??? For payment in Thailand with THB currency only.</ul>
                <ul>??? This fee is charged per transaction.</ul>
                <ul>??? Must register for Mobile Banking Account via your Bank BEFORE make a booking.</ul>
            </div>
        </div>
        <form action="insert.php" method="post">
            <div class="form-group">
                <input type="text" style="display: none;" class="form-control" name="title" id="f-title">
                <input type="text" style="display: none;" class="form-control" name="firstname" id="f-firstname">
                <input type="text" style="display: none;" class="form-control" name="lastname" id="f-lastname">
                <input type="text" style="display: none;" class="form-control" name="email" id="f-email">
                <input type="text" style="display: none;" class="form-control" name="tel" id="f-tel">
                <input type="date" style="display: none;" class="form-control" name="date_of_birth" id="f-date_of_birth">
                <input type="float" style="display: none;" class="form-control" name="bill" value='<?php echo $bill;?>'>
                <input type="text" style="display: none;" class="form-control" name="flight" value='<?php echo $flight;?>'>
                <input type="text" style="display: none;" class="form-control" name="trip" value='<?php echo $trip;?>'>
                <?php if ($trip == 'rt') { echo '
                <input type="text" style="display: none;" class="form-control" name="flight2"';}?><?php if ($trip == 'rt') { echo "value='$flight2'";}?>
            </div>
            <div class="row" id="rowMove">
                <div class="col-6">
                </div>
                <div class="col-6">
                    <button type="submit" class="btn next">Next</button>
                </div>
            </div>
        </form>
        <!--Previos-->
        <form action="services.php" method="post">
            <div class="row" id="rowMove" style="margin-top: -8%;">
                <div class="col-6">
                    <input type="submit" value="Previous" class="btn prev">
                </div>
                <div class="col-6" style="display: none;">
                    <input type="text" class="form-control" name="firstname" id="pre-firstname">
                    <input type="text" class="form-control" name="lastname" id="pre-lastname">
                    <input type="text" id="pre_get_trip" name="trip">
                    <input type="text" id="pre_flight" name="flight">
                    <input type="text" id="pre_flight2" name="flight2">
                </div>
                </div>
        </form>
</body>

</html>