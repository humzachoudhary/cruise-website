<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cruises</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Cruises</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Fazeley Studios | Fazeley St | Birmingham</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Cruises</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <!-- Image Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="img/slide-1.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"></h3>
                <p class="text-shadow"></p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/slide-2.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"></h3>
                <p class="text-shadow"></p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/slide-3.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"></h3>
                <p class="text-shadow"></p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
      </div>
      
      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Forthcoming
          <strong>Cruises</strong>
        </h2>
        <hr class="divider">

 <div class="box">
              
               <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                <script type="text/javascript">
                $(document).ready(function(){
                    $('.search-box input[type="date"]').on("keyup input", function(){
                        /* Get input value on change */
                        var inputVal = $(this).val();
                        var resultDropdown = $(this).siblings(".result");
                        if(inputVal.length){
                            $.get("backend-search.php", {term: inputVal}).done(function(data){
                                // Display the returned data in browser
                                resultDropdown.html(data);
                            });
                        } else{
                            resultDropdown.empty();
                        }
                    });
                    
                    // Set search input value on click of result item
                    $(document).on("click", ".result p", function(){
                        $(this).parents(".search-box").find('input[type="date"]').val($(this).text());
                        $(this).parent(".result").empty();
                    });
                });
                </script>
                </head>
                    
                  <h3>Search for Cruises based on Date:</h3> <h6>(only inserted dummy data between 27/10/2017 - 02/11/2017)</h6>
                    <div class="search-box">
                        <input type="date" autocomplete="off" placeholder="Enter Date" />
                        <div class="result"></div>
                        <br>
                    
    </div>

<br><br><br>
<h3> All Cruises listed below </h3>
<?php
require("application/database.php");


$getTableData = $dbh->prepare("SELECT * FROM cruise");
$getTableData->execute();

?>

<!-- creating table headings that will be displayed-->
<table>
  <tr>
    <th>Date</th>
    <th>Destination</th>
    <th>Cruise Lines</th>
    <th>Ships</th>
    <th>Sail From</th>
  </tr>
  <?php while ($row = $getTableData->fetch(PDO::FETCH_ASSOC)) ://get user data ?>
    <tr>
    <td><?=$row['Dates']?></td>
    <td><?=$row['Destination']?></td>
    <td><?=$row['Cruise_Lines']?></td>
    <td><?=$row['Ships']?></td>
    <td><?=$row['Sail_From']?></td>
  </tr>
  </form>
  <?php endwhile;?>

</table>
      </div>

    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Humza Choudhary 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
