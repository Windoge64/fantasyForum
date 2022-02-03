<?php
session_start();

if (isset($_SESSION["name"])) {
        header('location:index.php');
}
include "_dbConnect.php";
include "_signupModal.php";
//login.php


?>
<!DOCTYPE html>
<html>

<head>
        <title>DreamXI</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        
        <!-- JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</head>

<body>
<div class="row">
        <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
                <a class="navbar-brand mx-2" href="#">IPLT20</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                        <a class="nav-link" href="login.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Sign-Up</a>
                                </li>
                                <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle mx-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                Stats
                                        </button>
                                        <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="battingStats.php">Batting Stats</a></li>
                                                <li><a class="dropdown-item" href="bowlingStats.php">Bowling Stats</a></li>
                                                <li><a class="dropdown-item" href="#">All-round Stats</a></li>
                                                <li>
                                                        <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Overall Stats</a></li>
                                        </ul>
                                </div>
                                <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                        </ul>
                        <form action = "search.php" class="form-inline my-2 my-lg-0" method = "GET">
                                <input  class="form-control mr-sm-2 mx-2" type="search" name = "search" placeholder="Search" aria-label="Search">
                                
                                <button  class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit">Search</button>
                                <button type="button" class="btn btn-primary my-2 my-sm-0 mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>

                        </form>
                </div>
        </nav>
</div>
        <br />
        <br />

        <div class="container-fluid">



<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../../resized_images/carousel/_1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-sm-block">
        <h2 class="secondary" style="color:white;">Create your Fantasy team</h2>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../../resized_images/carousel/_7.JPG" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h2>Compete against your friends</h2>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../../resized_images/carousel/_4.JPG" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h2>Win exciting prizes !</h2>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="container card-category">
  <h2 class="text-center">Categories</h2>
  <div class="row">
    <?php


    $batsman_sql = "SELECT * FROM `batsmen`";
   
    $batsman_result = mysqli_query($conn, $batsman_sql);
   
    $num = rand(1, 3);
    
    while ($row = mysqli_fetch_assoc($batsman_result)) {


    
      echo ".";
      $num2 = $row['srno'];
      

      if ($num == $num2) {
        $name = $row['batsman_name'];
        $desc = $row['batsman_desc'];
        $rating = $row['batsman_rating'];
        $value = $row['rating_value'];
        
        echo '
            <div class="card  ml-3 mr-3 my-3" style="width: 20rem; height:28rem;">
              <img src="../../resized_images/batsmen/' . $num . '.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">Batsmen:'.$name.'</h5>
              <p class="card-text">' . substr($desc, 0, 90) . '...</p>
              <span  '.(($value == 6) ? 'class="dot elite"' : (($value == 5)? 'class="dot high"':(($value == 4)? 'class="dot good"':'class="dot ok"'))).'><span>
              <h5 style="width:225px;"><pre><b>  Batsman rating: ' . $rating . '<pre></b></h5>
              
              <a id = "bat_btn" type = "button" href="threadlist.php?comment_category=batsmen" class="btn btn-primary" >View thread</a>
            </div>
            </div>
          ';
        break;
      }
    }
    
    $bowler_sql = "SELECT * FROM `bowlers`";
    
    $bowler_result = mysqli_query($conn, $bowler_sql);
    $num = rand(1, 4);
    while ($row = mysqli_fetch_assoc($bowler_result)) {


     
      $num2 = $row['srno'];


      if ($num == $num2) {
        $name = $row['bowler_name'];
        $desc = $row['bowler_desc'];
        $rating = $row['bowler_rating'];
        $value = $row['rating_value'];
        echo '
            <div class="card  ml-3 mr-3 my-3" style="width: 20rem; height:28rem;">
              <img src="../../resized_images/bowlers/' . $num . '.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">Bowler:'.$name.'</h5>
              <p class="card-text">' . substr($desc, 0, 90) . '...</p>
              <span  '.(($value == 6) ? 'class="dot elite"' : (($value == 5)? 'class="dot high"':(($value == 4)? 'class="dot good"':'class="dot ok"'))).'><span>
              <h5 style="width:225px;"><b><pre styles = "width:250px;overflow: visible;white-space:nowrap;font-size:large;">  Bowler rating: ' . $rating . '<pre></b></h5>
              
              <a  type = "button" href="threadlist.php?comment_category=bowlers" class="btn btn-primary" >View thread</a>
            </div>
            </div>
          ';

        break;
      }
    }
  

    $allrounder_sql = "SELECT * FROM `all_rounders`";
    $allrounder_result = mysqli_query($conn, $allrounder_sql);
    $num = rand(1, 3);
    while ($row = mysqli_fetch_assoc($allrounder_result)) {


      
      echo ".";
      $num2 = $row['srno'];


      if ($num == $num2) {
        $name = $row['all_rounder_name'];
        $desc = $row['all_rounder_desc'];
        $rating = $row['all_rounder_rating'];
        $value = $row['all_rounder_value'];
        echo '
            <div class="card  ml-3 mr-3 my-3" style="width: 22rem; height:28rem;">
              <img src="../../resized_images/all_rounders/' . $num . '.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">All Rounder: '.$name.'</h5>
              <p class="card-text">' . substr($desc, 0, 90) . '...</p>
              <span  '.(($value == 6) ? 'class="dot elite"' : (($value == 5)? 'class="dot high"':(($value == 4)? 'class="dot good"':'class="dot ok"'))).'><span>
              <h5 id = "all_rnd_rating"rows = "2" style="width:275px;"><pre><b>  All Rounder rating: ' . $rating . '</b><pre></h5>
              
              <a type = "button" href="threadlist.php?comment_category=allRounders" class="btn btn-primary" >View thread</a>
            </div>
            </div>
          ';
        break;
      }
    }

    ?>

  </div>
</div>


</div>

</body>

</html>

<script>
        $(document).ready(function() {
                $('#login_form').on('submit', function(event) {
                        event.preventDefault();
                        $.ajax({
                                url: "check_login.php",
                                method: "POST",
                                data: $(this).serialize(),
                                success: function(data) {
                                        if (data != '') {
                                                $('#error_message').html(data);
                                        } else {
                                                window.location = 'index.php';
                                        }
                                }
                        })
                });
        });
</script>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <form id="login_form" method="POST">
                                <div class="modal-body">
                                        <span id="error_message"></span>
                                        <div class="form-group">
                                                <label for="exampleInputEmail1">Username</label>
                                                <input type="username" class="form-control" id="logusr" name="username" aria-describedby="usernameHelp" placeholder="Enter your username">
                                                
                                        </div>
                                        <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
                                        </div>



                                </div>
                                <div class="modal-footer">
                                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Login" />
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                </div>
                        </form>
                </div>
        </div>

</div>
