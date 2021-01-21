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

$result = get_CURL('https://platform.antares.id:8443/~/antares-cse/antares-id/SmarParkingESP8266/Coba1/la');
// $result = get_CURL('https://platform.antares.id:8443/~/antares-cse/antares-id/SmarParkingESP8266/Coba2/la');

$park = json_decode($result['m2m:cin']['con'], true);
$hasil = json_decode($park['status']); 
// $parkir = json_decode($park['status']);

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
            margin-top: 1vw;
        }
        .parkinghijau {
            font-size: 5vw;
            padding: .5em;
            background: #32CD32; 
            text-align: center;
        }
        .parkingmerah {
            font-size: 5vw;
            padding: .5em;
            background: #FF0000;
            text-align: center;
        }
        .footer {
            position: absolute;
            text-align: center;
            text-justify: center;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 30px;
            background-color: black;
        }
    </style>
    
    <title>Smart Parking</title>
  </head>

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img/logopoli.png" width="50">
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Denah Parkir</a>
                <a class="nav-item nav-link" href="kontak.html">Kontak</a>
                </div>
            </div>
        </div>    
    </nav>

    <div class="container">
        <ul class="list-group list-group-horizontal-md mt-3">
            <li class="list-group-item">
                <img src="img/merah.png" alt="">
                <p>Lahan Pakir Terisi</p>
            </li>
            <li class="list-group-item">
                <img src="img/hijau.png" alt="">
                <p>Lahan Pakir Kosong</p>
            </li>
        </ul>
    </div>
   
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="row pt-5 mb-5 justify-content-center">
                    <ul class="list-group list-group-horizontal-md mt-3">
                        <li class="list-group-item">
                            <img src="img/merah.png" alt="">
                            <p>Lahan Pakir Terisi</p>
                        </li>
                        <li class="list-group-item">
                            <img src="img/hijau.png" alt="">
                            <p>Lahan Pakir Kosong</p>
                        </li>
                    </ul>
                </div>  
            </div>
            <div class="col-md-5">
                <div class="row pt-5 mb-5">
                    <h2>JUMLAH: (data dr sensor)</h2>
                </div>
            </div>
        </div>
    </div> -->
   
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

                <!-- <div class="parking"><?= $hasil['jarak']; ?>A1</div> -->
                <div class="parkinghijau">A2</div>
                <div class="parkinghijau">A3</div>
                <div class="parkinghijau">A4</div>
                <div class="parkinghijau">B1</div>
                <div class="parkinghijau">B2</div>
                <div class="parkinghijau">B3</div>
                <div class="parkinghijau">B4</div>
            </div>
        
    </div>

    <!-- <footer class="footer">
        <div class="container">
              <p><font color="white">2020 | Politeknik Negeri Semarang</font></p>
        </div>
    </footer> -->


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