<!DOCTYPE html>  
<html>  
    <head>  
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

 <?php  
    session_start();  
    if(isset($_SESSION["name"]))
    {
 echo 
 '<div class="d-flex-fluid flex-row">
        <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
                <a class="navbar-brand mx-2" href="#">IPLT20</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-bs-target="#signupModal">Sign-Up</a>
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
                                <li class="nav-item d-flex flex-row-reverse">
                                        <h6><a class="nav-link disabled mx-2" href="#" tabindex="-1" aria-disabled="true">Welcome <b> '.$_SESSION["name"]. '</b></a></h6>
                                </li>
                        </ul>
                        
                        <form action = "search.php" class="form-inline my-2 my-lg-0" method = "GET">
                                <input  class="form-control mr-sm-2 mx-2" type="search" name = "search" placeholder="Search" aria-label="Search">
                                
                                <button  class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit">Search</button>
                                <a class = "btn btn-primary my-2 my-sm-0 mx-2"align="center" style = "color:white;" href="logout.php">Logout</a>

                        </form>
                </div>
        </nav>
</div>';
      
        echo '<div class="alert alert-success" role="alert">
             Login Successful!
             
             
             
             <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                                        <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
                                              </svg></span>
                                </button></div>';
        
        
         echo "<h3 align='center'>Your favourite IPL Team is <b>".$_SESSION["team"]."</b></h3><br>";
         echo "<h3 align='center'>Your favourite IPL Batsman is <b>".$_SESSION["batsman"]."</b></h3><br>";  
          
    }  
    else  
    {  
        header('location:login.php');  
    }
    include "_dbConnect.php";  
    ?>
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
    </body>  
</html>

<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog modal-sm">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Session Expired Login Again</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="login_form">  
     <input type="text" name="email" placeholder="Enter Email" class="form-control" required /><br />  
     <input type="password" name="password" placeholder="Enter Password" class="form-control" required /><br />  
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Login" />  
    </form>
   </div>
  </div>
    </div>
</div>

<script>  
$(document).ready(function(){
 
 var is_session_expired = 'no';
    function check_session()
    {
        $.ajax({
            url:"check_session.php",
            method:"POST",
            success:function(data)
            {
    if(data == '1')
    {
     $('#loginModal').modal({
      backdrop: 'static',
      keyboard: false,
     });
     is_session_expired = 'yes';
    }
   }
        })
    }
 
 var count_interval = setInterval(function(){
        check_session();
  if(is_session_expired == 'yes')
  {
   clearInterval(count_interval);
  }
    }, 15);
 
 $('#login_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"check_login.php",
   method:"POST",
   data:$(this).serialize(),
   success:function(data){
    if(data != '')
    {
     $('#error_message').html(data);
    }
    else
    {
     location.reload();
    }
   }
  });
 });

});  
</script>