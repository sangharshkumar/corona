<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <?php include 'css/style.php'; ?>
    <title>Corona Updates</title>
</head>

<body onload="fetch()">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="http://localhost/All_Issues_Solutions/index.php#">ISSUES_SOLUTIONS</a>
        <a class="navbar-brand pl-5" href="corona_home_page.php">COVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item active">
                    <a class="nav-link" href="corona_home_page.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="corona_home_page.php#aboutid">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="corona_home_page.php#sympid">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="corona_home_page.php#prevention">Prevention</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#IndiaCoronaLive.php">IndiaCoronaLive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="WorldCoronaLive.php">WorldCoronaLive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="corona_home_page.php#contact">Contact</a>
                </li>



            </ul>

        </div>
    </nav>

    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/pic.jpg" width="350" height="300">
                </div>
            </div>

            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Let's Stay & Fight Together Against Cor <span class="corona_rotate"><img
                                src="images/pic2.jpg"></span> na Virus</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- ******************** Coronavirus update *********************** -->
    <section class="corona_update container-fluid">
        <div class="mb-5">
            <h3 class=" text-center text-uppercase">COVID-19 LIVE UPDATES OF THE INDIA</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                    <th class="text-capitalize">Dates and Time</th>
                    <th class="text-capitalize">states</th>
                    <th class="text-capitalize">confirmed</th>
                    <th class="text-capitalize">active</th>
                    <th class="text-capitalize">Total recovered</th>
                    <th class="text-capitalize">Total deaths</th>

                    </th>
                </tr>

                <?php

 $data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);
//  echo "<pre>";

//  print_r($coronalive);

//  echo "</pre>";

$statecount = count($coronalive['statewise']);

$i=1;
while($i < $statecount)
{
    ?>

                <tr>
                    <td>
                        <?php  echo $coronalive['statewise'][$i]['lastupdatedtime']  ?>
                    </td>
                    <td>
                        <?php  echo $coronalive['statewise'][$i]['state']  ?>
                    </td>
                    <td>
                        <?php  echo $coronalive['statewise'][$i]['confirmed']  ?>
                    </td>
                    <td>
                        <?php  echo $coronalive['statewise'][$i]['active']  ?>
                    </td>
                    <td>
                        <?php  echo $coronalive['statewise'][$i]['recovered']  ?>
                    </td>
                    <td>
                        <?php  echo $coronalive['statewise'][$i]['deaths']  ?>
                    </td>
                </tr>

                <!-- echo $coronalive['statewise'][$i]['lastupdatedtime']. "<br>";
    echo $coronalive['statewise'][$i]['state']. "<br>";
    echo $coronalive['statewise'][$i]['confirmed']. "<br>";
    echo $coronalive['statewise'][$i]['active']. "<br>";
    echo $coronalive['statewise'][$i]['recovered']. "<br>";
    echo $coronalive['statewise'][$i]['deaths']. "<br>"; -->
                <?php
    $i++;

}



?>

            </table>

        </div>


        </div>
    </section>


    <footer class="bg-light text-center text-lg-start">
    <p class="float-right"><a href="#">Back to top</a></p>
  <!-- Copyright -->
  <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 ISSUES_SOLUTIONS
    <a class="text-dark" href="#">HERE</a>
    <p>Contact us: <span class="mx-green mx-bold">sangharshkumar<span
                    class="mx-none">@</span>gmail.com</span></p>
  </div>
  
  <!-- Copyright -->
</footer>

    <script>
    mybutton = document.getElementById("mybtn");
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>