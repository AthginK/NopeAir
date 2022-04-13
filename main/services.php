<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link href="style.css" rel="stylesheet">

    <!-- Java script -->
    <script src="scrip.js"></script>
    <script>
        window.addEventListener('load', () => {
            const trip = localStorage.getItem('Trip');
            document.getElementById('get_trip').value = trip;
            const flight = localStorage.getItem('flight');
            document.getElementById('flight').value = flight;
            if (trip == 'rt') {
                const flight2 = localStorage.getItem('flight2');
                document.getElementById('flight2').value = flight2;
                document.getElementById('pre_flight2').value = flight2;
            }})
    </script>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>NopeAir - Extra Services</title>
    
    <!--connect database-->
    <?php

        include 'connect.php';
        $flight = $_POST['flight'];
        $trip = $_POST['trip'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        
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
                <div class="col-sm-3" id="flightFrom">From</div>
                <div class="col-sm-3" id="flightTo">To</div>
                <div class="col-sm-3" id="flightPerson">Person</div>
                <div class="col-sm-3" id="flightPrice">Price</div>
            </div>

            <div class="root">
                <div class="stepBar">
                    <ul class="progressbar">
                        <li class="active">Search</li>
                        <li class="active">Select Flight</li>
                        <li class="active">Passenger Info</li>
                        <li class="active">Extra Services</li>
                        <li>Payment</li>
                    </ul>
                </div>
            </div><br>

            <div class="row">
                <div class="col-1">
                    <img src="\image\services.svg" style="width: 40px;height: 40px;">
                </div>
                <div class="col-11" style="margin-left: -5%;">
                    <h4><b>&nbsp;&nbsp;Extra Services<br></b></h4>
                    <p style="margin-top: -1%;">&nbsp;&nbsp;&nbsp;please select your additional services</p>
                </div>
            </div>

            <div class="row" text-align="center">
                <div class="col-4">
                    <div class="box services">
                        <center>
                            <img src="\image\seats.svg" style="width: 50%;height: 50%;margin-top: 4%;">
                            <h4 style="margin-top: 0%;"><b>Seat Selection</b></h4>
                            <p style="margin-top: 4%;font-size: 14px;">Advanced seat selection for your comfort.<br>
                                Select our Nope Premium Seat for extra services</p>
                            <button type="button" class="btn services" onclick="SelectSeat()"
                                id="SeatBtn">Close</button>
                        </center>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box services">
                        <center>
                            <img src="\image\travel-luggage.svg" style="width: 50%;height: 50%;margin-top: 4%;">
                            <h4 style="margin-top: 0%;"><b>Nope Baggage</b></h4>
                            <p style="margin-top: 4%;font-size: 14px;">1 x +15 kg Nope Baggage (DMK-CNX),<br>
                                1 x +15 kg Nope Baggage (CNX-DMK)</p>
                            <button type="button" class="btn services" onclick="SelectBaggage()"
                                id="BaggageBtn">Edit</button>
                        </center>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box services">
                        <center>
                            <img src="\image\track-bicycle.svg" style="width: 50%;height: 50%;margin-top: 4%;">
                            <h4 style="margin-top: 0%;"><b>Nope Special Baggage</b></h4>
                            <p style="margin-top: 4%;font-size: 14px;">Bike, special baggage and items
                                that<br>require special handling.</p>
                            <button type="button" class="btn services" onclick="SelectSpecial()"
                                id="SpecialBtn">Add</button>
                        </center>
                    </div>
                </div>
            </div>

            <form action="pay_cal.php" method='post'>
            <!----------------------------------Seat-------------------------------------->
            <div class="row" id="SeatRow" style="margin-top: 7%;">
                <div class="SeatTriangleUp" id="seatUp"></div>
                <div class="selectSeatShow" id="selectSeatShow">
                    <h4 style="margin: 2% 0 0 3%;"><b>Seat Selection</b></h4>
                    <div class="col-5">
                        <div class="seatInfo">
                            <h5 style="padding: 2% 0 0 2%;"><b>Depart</b></h5>
                            <p style="padding-left: 2%;"><?php echo "$from - $to" ?></p>
                            <center><button type="button" class="btn select">Select</button></center>
                        </div>
       
                            <div class='seatInfo'>
                                <h5 style='padding: 2% 0 0 2%;'><b>Return</b></h5>
                                <p style='padding-left: 2%;'><?php echo "$to - $from" ?></p>
                                <center><button type='button' class='btn select'>Select</button></center>
                            </div>
               
                        
                        <div class="row" style="margin: 5% 0 0 5%;">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="nopePreFont"></div>
                                    </div>
                                    <div class="col-10" style="font-size: 14px;">
                                        <p><b>Nope Premium Seat Front Row</b><br>500.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="nopePre"></div>
                                    </div>
                                    <div class="col-10" style="font-size: 14px;">
                                        <p><b>Nope Premium Seat</b><br>300.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin: 2% 0 0 5%;">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="nopeHappy"></div>
                                    </div>
                                    <div class="col-10" style="font-size: 14px;">
                                        <p><b>Nope Happy Seat</b><br>Free</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="nopeBooked"></div>
                                    </div>
                                    <div class="col-10" style="font-size: 14px;">
                                        <p><b>Booked Seat</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin: 2% 0 5% 5%;">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="nopeSelect"></div>
                                    </div>
                                    <div class="col-10" style="font-size: 14px;">
                                        <p><b>Selected Seat</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="nopeBlock"></div>
                                    </div>
                                    <div class="col-10" style="font-size: 14px;">
                                        <p><b>Unavailable Seat</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p style="margin-left: 5%;"><b>Seat Description</b></p>
                        <p style="margin-left: 5%;"><b>Nope Air's in-flight seats are divided into 3 types, namely
                                Private Seat (unoccupied
                                seat), Nope Premium Seat and Nope Happy Seat.</b></p>
                        <p style="margin-left: 5%;">Note: <b>Private Seat</b> is seat with no-one sitting next to you.
                            We guarantee that the
                            seats next to you are adjacent to each other in the same row and side. No one else
                            will sit with you. For example, selecting seat no. 2C, there will be no-one seating next
                            to you at seat no. 2B.</p>
                    </div>
                    <div class="col-7">
                        <h4><b>Seat Selection</b></h4>
                    </div>
                </div>
            </div>
            <!-- --------------------------------Baggage------------------------------------ -->
            <div class="row" style="margin-top: 0%;" id="BaggageRow">
                <div class="BaggageTriangleUp" id="BaggageUp"></div>
                <div class="selectBaggageShow" id="selectBaggageShow">
                    <h4 style="margin: 2% 0 0 3%;"><b>Nope Baggage</b></h4>
                    <p style="margin: 1% 0 0 3%;">Add baggage allowance to your trip. Worry-free and enjoy saving when
                        book your extra baggage allowance now.</p>
                    <div class="serviceInfo">
                        <h5 style="padding: 2% 0 0 2%;"><b>Depart</b></h5>
                        <div class="row" style="padding-left: 2%;">
                            <div class="col-6">
                                <p><?php echo "$from - $to" ?></p>
                                <hr>
                            </div>
                            <div class="col-3">
                                <p><?php echo "$fname &nbsp;&nbsp;&nbsp; $lname"?></p>
                            </div>
                            <div class="col-3">
                                <div class="dropdown">
                                    <span>
                                        <button class="btn baggage" type="button" id="selectBaggDE"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            No selection <img src="\image\downward-arrow.svg"
                                                style="width: 15px;height: 15px;">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" onclick="DENoSelectBagg()">No selection</a>
                                            <a class="dropdown-item" onclick="DETwentyKGBagg()">+20 kg Nope Baggage</a>
                                            <a class="dropdown-item" onclick="DEThirtyKGBagg()">+30 kg Nope Baggage</a>
                                            <a class="dropdown-item" onclick="DEFortyKGBagg()">+40 kg Nope Baggage</a>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p style="padding-left: 2%;">Your price:</p>
                        <p style="padding: 0 0 2% 2%;" id="DEbaggPrice"><b>0.00</b><input type='float' name='DEbagg' value='.00' style='display: none;'></p>
                    </div>
                    <div class="serviceInfo">
                        <h5 style="padding: 2% 0 0 2%;"><b>Return</b></h5>
                        <div class="row" style="padding-left: 2%;">
                            <div class="col-6">
                                <p><?php echo "$to - $from" ?></p>
                                <hr>
                            </div>
                            <div class="col-3">
                                <p><?php echo "$fname &nbsp;&nbsp;&nbsp; $lname"?></p>
                            </div>
                            <div class="col-3">
                                <div class="dropdown">
                                    <span>
                                        <button class="btn baggage" type="button" id="selectBaggRE"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            No selection <img src="\image\downward-arrow.svg"
                                                style="width: 15px;height: 15px;">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" onclick="RENoSelectBagg()">No selection</a>
                                            <a class="dropdown-item" onclick="RETwentyKGBagg()">+20 kg Nope Baggage</a>
                                            <a class="dropdown-item" onclick="REThirtyKGBagg()">+30 kg Nope Baggage</a>
                                            <a class="dropdown-item" onclick="REFortyKGBagg()">+40 kg Nope Baggage</a>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p style="padding-left: 2%;">Your price:</p>
                        <p style="padding: 0 0 2% 2%;" id="REbaggPrice"><b>0.00</b><input type='float' name='REbagg' value='.00' style='display: none;'></p>
                    </div>
                </div>
            </div>
            <!-- --------------------------------Special Service------------------------------------ -->
            <div class="row" style="margin-top: 0%;" id="SpecialRow">
                <div class="SpecialTriangleUp" id="SpecialUp"></div>
                <div class="selectSpecialShow" id="selectSpecialShow">
                    <h4 style="margin: 2% 0 0 3%;"><b>Nope Special Baggage</b></h4>
                    <p style="margin: 1% 0 0 3%;">Bike and special baggage items that require special handling. Such
                        items as following;</p>
                    <ul style="margin-left: 3%;">
                        <li>Sports Equipment (Surfboard , Golf, Diving , Fishing, Archery Equipment, etc.)</li>
                        <li>Musical Instruments (Guitars, Drums, Keyboard instrument, zither, etc.)</li>
                        <li>Bulky Items (LCD TV, Computer, Electronic Equipment, Handicrafts, etc.)</li>
                        <li>Include other special equipment.</li>
                    </ul>
                    <p style="margin: 1% 0 0 3%;">Please contact our check-in airport staff two hours prior to the
                        departure time if there are more than one special baggage.</p>
                    <p style="margin: 1% 0 0 3%;">You may bring one special baggage per person.</p>
                    <p style="margin: 1% 0 0 3%;">Please note: the fee is per one item only.</p>
                    <div class="serviceInfo">
                        <h5 style="padding: 2% 0 0 2%;"><b>Depart</b></h5>
                        <div class="row" style="padding-left: 2%;">
                            <div class="col-6">
                                <p><?php echo "$from - $to" ?></p>
                                <hr>
                            </div>
                            <div class="col-3">
                                <p><?php echo "$fname &nbsp;&nbsp;&nbsp; $lname"?></p>
                            </div>
                            <div class="col-3">
                                <div class="dropdown">
                                    <span>
                                        <button class="btn baggage" type="button" id="selectSpeDE"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            No selection <img src="\image\downward-arrow.svg"
                                                style="width: 15px;height: 15px;">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" onclick="DENoSelectNopeSpe()">No selection</a>
                                            <a class="dropdown-item" onclick="DETwentyKGNopeSpe()">+20 kg Nope
                                                Baggage</a>
                                            <a class="dropdown-item" onclick="DEThirtyKGNopeSpe()">+30 kg Nope
                                                Baggage</a>
                                            <a class="dropdown-item" onclick="DEFortyKGNopeSpe()">+40 kg Nope
                                                Baggage</a>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p style="padding-left: 2%;">Your price:</p>
                        <p style="padding: 0 0 2% 2%;" id="DEspecPrice"><b>0.00</b><input type='float' name='DEspec' value='.00' style='display: none;'></p>
                    </div>
                    <div class="serviceInfo">
                        <h5 style="padding: 2% 0 0 2%;"><b>Return</b></h5>
                        <div class="row" style="padding-left: 2%;">
                            <div class="col-6">
                                <p><?php echo "$to - $from" ?></p>
                                <hr>
                            </div>
                            <div class="col-3">
                                <p><?php echo "$fname &nbsp;&nbsp;&nbsp; $lname"?></p>
                            </div>
                            <div class="col-3">
                                <div class="dropdown">
                                    <span>
                                        <button class="btn baggage" type="button" id="selectSpeRE"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            No selection <img src="\image\downward-arrow.svg"
                                                style="width: 15px;height: 15px;">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" onclick="RENoSelectNopeSpe()">No selection</a>
                                            <a class="dropdown-item" onclick="RETwentyKGNopeSpe()">+20 kg Nope
                                                Baggage</a>
                                            <a class="dropdown-item" onclick="REThirtyKGNopeSpe()">+30 kg Nope
                                                Baggage</a>
                                            <a class="dropdown-item" onclick="REFortyKGNopeSpe()">+40 kg Nope
                                                Baggage</a>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p style="padding-left: 2%;">Your price:</p>
                        <p style="padding: 0 0 2% 2%;" id="REspecPrice"><b>0.00</b><input type='float' name='REspec' value='.00' style='display: none;'></p>
                    </div>
                </div>
            </div>
            <!-- --------------------------------Nope First------------------------------------ -->
            <div class="row" style="margin-top: 10%;" text-align="center">
                <div class="col-4">
                    <div class="box services">
                        <center>
                            <img src="\image\number-one.svg" style="width: 50%;height: 50%;margin-top: 4%;">
                            <h4 style="margin-top: 2%;"><b>Nope First</b></h4>
                            <p style="margin-top: 4%;font-size: 14px;">Be the first to board and enjoy
                                relaxing<br>moment onboard with Nope First</p>
                            <button type="button" class="btn services" onclick="SelectFirst()"
                                id="FirstBtn">Add</button>
                        </center>
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-4"></div>
            </div>

            <div class="row" style="margin-top: 0%;" id="FirstRow">
                <div class="FirstTriangleUp" id="FirstUp"></div>
                <div class="selectFirstShow" id="selectFirstShow">
                    <div class="serviceInfo">
                        <h5 style="padding: 2% 0 0 2%;"><b>Depart</b></h5>
                        <div class="row" style="padding-left: 2%;">
                            <div class="col-5">
                                <p><?php echo "$from - $to" ?></p>
                                <hr>
                            </div>
                            <div class="col-3">
                                <p><?php echo "$fname &nbsp;&nbsp;&nbsp; $lname"?></p>
                            </div>
                            <div class="col-2">
                                <input type="radio" name="nameDE" style="height:16px; width:16px;" value="<b>200.00</b>"
                                    onclick="FirstYesDE()"> Yes
                            </div>
                            <div class="col-2">
                                <input type="radio" name="nameDE" style="height:16px; width:16px;" value="<b>0.00</b>"
                                    onclick="FirstNoDE()" checked> No
                            </div>
                        </div>
                        <div class="row" style="margin-left: 1%;">
                            <div class="col-5">
                                <p>Nope First</p>
                                <hr>
                            </div>
                            <div class="col-3"></div>
                            <div class="col-2"></div>
                            <div class="col-2"></div>
                        </div>
                        <p style="padding-left: 2%;">Extra Service price:</p>
                        <p style="padding-left: 2%;"><b>200.00</b></p>
                        <p style="padding-left: 2%;">Your price:</p>
                        <p style="padding: 0 0 2% 2%;" id="FirstPriceDE"><b>0.00</b></p><input type='float' id='FPDE' name='FPDE' value='.00' style='display: none;'>
                    </div>
                    <div class="serviceInfo">
                        <h5 style="padding: 2% 0 0 2%;"><b>Return</b></h5>
                        <div class="row" style="padding-left: 2%;">
                            <div class="col-5">
                                <p><?php echo "$to - $from" ?></p>
                                <hr>
                            </div>
                            <div class="col-3">
                                <p><?php echo "$fname &nbsp;&nbsp;&nbsp; $lname"?></p>
                            </div>
                            <div class="col-2">
                                <input type="radio" name="nameRE" style="height:16px; width:16px;" value="<b>200.00</b>"
                                    onclick="FirstYesRE()"> Yes
                            </div>
                            <div class="col-2">
                                <input type="radio" name="nameRE" style="height:16px; width:16px;" value="<b>0.00</b>"
                                    onclick="FirstNoRE()" checked> No
                            </div>
                        </div>
                        <div class="row" style="margin-left: 1%;">
                            <div class="col-5">
                                <p>Nope First</p>
                                <hr>
                            </div>
                            <div class="col-3"></div>
                            <div class="col-2"></div>
                            <div class="col-2"></div>
                        </div>
                        <p style="padding-left: 2%;">Extra Service price:</p>
                        <p style="padding-left: 2%;"><b>200.00</b></p>
                        <p style="padding-left: 2%;">Your price:</p>
                        <p style="padding: 0 0 2% 2%;" id="FirstPriceRE"><b>0.00</b></p><input type='float' id='FPRE' name='FPRE' value='.00' style='display: none;'>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin: 8% 0 2% 0;">
        <div class="col-6">
            <a href="infor.html" class="prev">Previous</a>
        </div>
        <div class="col-6">
            <button type="submit" class="btn next">Next</button>
            <div style="display: none">
                <input type="text" id="get_trip" name="trip">
                <input type="text" id="flight" name="flight">
                <input type="text" id="flight2" name="flight2">
            </div>
        </div>
    </div>
    </form>
</body>

</html>