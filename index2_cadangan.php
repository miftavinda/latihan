<?php

function get_CURL($url) 
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    "X-M2M-Origin: b93085366567b388:1d0a64c514e2082d",
    "Content-Type: application/json;ty=4",
    "Accept: application/json"
  ));

  $result = curl_exec($curl);
  curl_close($curl);
  
  return json_decode($result, true);
  
}

//Jumlah
$urlJumlah = 'https://platform.antares.id:8443/~/antares-cse/antares-id/SmarParkingESP8266/sensor_pintu/la';
$result = get_CURL($urlJumlah);
$parkjml = json_decode($result['m2m:cin']['con'], true);
$hasiljml = json_decode($parkjml['Jumlah']);

//Lahan A1
$result = get_CURL('https://platform.antares.id:8443/~/antares-cse/antares-id/SmarParkingESP8266/Coba1/la');
$park = json_decode($result['m2m:cin']['con'], true);
$hasil = json_decode($park['status']); 
// $parkir = json_decode($park['status']);

//Lahan A2
$urlLahanA2 = 'https://platform.antares.id:8443/~/antares-cse/antares-id/SmarParkingESP8266/Coba2/la';
$result = get_CURL($urlLahanA2);
$parkA2 = json_decode($result['m2m:cin']['con'], true);
$hasilA2 = json_decode($parkA2['status']); 

//Lahan A3
$urlLahanA3 = 'https://platform.antares.id:8443/~/antares-cse/antares-id/SmarParkingESP8266/Coba3/la';
$result = get_CURL($urlLahanA3);
$parkA3 = json_decode($result['m2m:cin']['con'], true);
$hasilA3 = json_decode($parkA3['status']);

//Lahan A4
$urlLahanA4 = 'https://platform.antares.id:8443/~/antares-cse/antares-id/SmarParkingESP8266/Coba4/la';
$result = get_CURL($urlLahanA4);
$parkA4 = json_decode($result['m2m:cin']['con'], true);
$hasilA4 = json_decode($parkA4['status']);

//Lahan B1
$urlLahanB1 = 'https://platform.antares.id:8443/~/antares-cse/antares-id/SmarParkingESP8266/Coba5/la';
$result = get_CURL($urlLahanB1);
$parkB1 = json_decode($result['m2m:cin']['con'], true);
$hasilB1 = json_decode($parkB1['status']);

//Lahan B2
$urlLahanB2 = 'https://platform.antares.id:8443/~/antares-cse/antares-id/SmarParkingESP8266/Coba6/la';
$result = get_CURL($urlLahanB2);
$parkB2 = json_decode($result['m2m:cin']['con'], true);
$hasilB2 = json_decode($parkB2['status']);

//Lahan B3
$urlLahanB3 = 'https://platform.antares.id:8443/~/antares-cse/antares-id/SmarParkingESP8266/Coba7/la';
$result = get_CURL($urlLahanB3);
$parkB3 = json_decode($result['m2m:cin']['con'], true);
$hasilB3 = json_decode($parkB3['status']);

//Lahan B4
$urlLahanB4 = 'https://platform.antares.id:8443/~/antares-cse/antares-id/SmarParkingESP8266/Coba8/la';
$result = get_CURL($urlLahanB4);
$parkB4 = json_decode($result['m2m:cin']['con'], true);
$hasilB4 = json_decode($parkB4['status']);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        body {
            background-color: #FFFFFF;
            /* overflow: hidden; */
        }
        #grid { 
            display: grid;
            grid-template-rows: repeat(4);
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 1vw;
            grid-row-gap: 75px;
            margin-top: 1vw;
        }
        .parkinghijau {
            font-size: 5vw;
            text-align: left;
            padding: .5em;
            /* height: 110%; */
            background: #32CD32;
            background-image : url('img/centang.png');
            background-size: 20%;
            background-position-x: 80%;
            background-position-y: 50%;
            background-repeat: no-repeat; 
        }
        .parkingmerah {
            font-size: 5vw;
            text-align: left;
            padding: .5em;
            /* height: 110%; */
            background: #FF0000;
            background-image : url('img/ping2.png');
            background-size: 20%;
            background-position-x: 80%;
            background-position-y: 50%;
            background-repeat: no-repeat;
        } 
        .jam-digital-smartparking {
            width: 350px;
            margin: 20px auto;
	    }
        .kotak {
            float:left; 
            width:100px; 
            height:50px; 
            background-color: #A5B1CB;
	        /* border: 3px solid grey; */
            /* box-shadow: -3px -3px 2px rgba(0,0,0,0.4);
            padding: 10px;
            border: 1px solid grey; */
        }
        .jam-digital-smartparking p {
            color: black;
            font-size: 35px;
            text-align: center;
            margin: 0 auto;
        }
    </style>

    <script>
        window.setTimeout("waktu()", 1000);
    
        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }
    </script>
    
    <title>Smart Parking</title>
  </head>

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" width="100">
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.html">Beranda</a>
                <a class="nav-item nav-link" href="kontak.html">Kontak</a>
                </div>
            </div>
        </div>    
    </nav>

    <section class="list" id="list">
      <div class="container">
        <div class="row justify-content-center">
                <ul class="list-group list-group-horizontal-md mt-3">
                    <li class="list-group-item">
                        <p>Keterangan:</p>
                        <img src="img/merah.png">
                        <p>Lahan Pakir Terisi</p>
                    </li>
                    <li class="list-group-item">
                        <p style="color:white;">Keterangan:</p>
                        <img src="img/hijau.png">
                        <p>Lahan Pakir Kosong</p>
                    </li>
                </ul>      
        </div>
      </div>
    </section>

    <section class="jumlah" id="jumlah">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 mt-3 text-center">
                    <h2>JUMLAH: <?= $hasiljml; ?> </h2>
                </div>
                <div class="col-md-5">
                        <div class="jam-digital-smartparking">
                            <div class="kotak">
                                <p id="jam"></p>
                            </div>
                            <div class="kotak">
                                <p id="menit"></p>
                            </div>
                            <div class="kotak">
                                <p id="detik"></p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="container">
        <div id="grid">
            <!-- Lahan A1 -->
            <?php
            $park['status'] <= "ada";
            if ($park['status'] <= "ada" ) {
                echo "<div class='parkingmerah'>A1</div>";
            }
            else {
                echo "<div class='parkinghijau'>A1</div>";
            }
            ?>

            <!-- Lahan A2 -->
            <?php
            $parkA2['status'] <= "ada";
            if ($parkA2['status'] <= "ada" ) {
                echo "<div class='parkingmerah'>A2</div>";
            }
            else {
                echo "<div class='parkinghijau'>A2</div>";
            }
            ?>

            <!-- Lahan A3 -->
            <?php
            $parkA3['status'] <= "ada";
            if ($parkA3['status'] <= "ada" ) {
                echo "<div class='parkingmerah'>A3</div>";
            }
            else {
                echo "<div class='parkinghijau'>A3</div>";
            }
            ?>

            <!-- Lahan A4 -->
            <?php
            $parkA4['status'] <= "ada";
            if ($parkA4['status'] <= "ada" ) {
                echo "<div class='parkingmerah'>A4</div>";
            }
            else {
                echo "<div class='parkinghijau'>A4</div>";
            }
            ?>

            <!-- Lahan B1 -->
            <?php
            $parkB1['status'] <= "ada";
            if ($parkB1['status'] <= "ada" ) {
                echo "<div class='parkingmerah'>B1</div>";
            }
            else {
                echo "<div class='parkinghijau'>B1</div>";
            }
            ?>

            <!-- Lahan B2 -->
            <?php
            $parkB2['status'] <= "ada";
            if ($parkB2['status'] <= "ada" ) {
                echo "<div class='parkingmerah'>B2</div>";
            }
            else {
                echo "<div class='parkinghijau'>B2</div>";
            }
            ?>

            <!-- Lahan B3 -->
            <?php
            $parkB3['status'] <= "ada";
            if ($parkB3['status'] <= "ada" ) {
                echo "<div class='parkingmerah'>B3</div>";
            }
            else {
                echo "<div class='parkinghijau'>B3</div>";
            }
            ?>

            <!-- Lahan B4 -->
            <?php
            $parkB4['status'] <= "ada";
            if ($parkB4['status'] <= "ada" ) {
                echo "<div class='parkingmerah'>B4</div>";
            }
            else {
                echo "<div class='parkinghijau'>B4</div>";
            }
            ?>

            </div> 
        </div>      


    <section class="tombol" id="tombol">
      <div class="container">
        <div class="row justify-content-center pt-4 mb-3">
            <a class="btn btn-primary btn-lg" href="index.html" role="button">Kembali</a>
        </div>
      </div>
    </section>

    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row pt-4">
          <div class="col text-center">
            <p>Copyright &copy; 2020.</p>
          </div>
        </div>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>