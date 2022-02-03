<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "ipl";
$db2 = "forums";
$conn = mysqli_connect($servername, $username, $password, $database);
$noResult = true;


if ($_GET['comment_category'] != null)
        #$comm_cat = $_GET['comment_category'];
        $_SESSION['cat'] = $_GET['comment_category'];
        
$comm_cat = $_SESSION['cat'];
if($comm_cat == "batsmen")
{
        $forum = "Most IPL teams prefer their team mascot as a top order batsman. They offer the maximun amount of points for fantasy users.";
}
else if ($comm_cat == "bowlers")
{
        $forum = "IPL mini-auctions fetch the max bid for bowlers. Death bowlers are always in high demand however";
}
else if ($comm_cat == "allRounders")
{
        $forum ="In almost every IPL, all-rounders end up being the Most Valuable Players as they provide points in every aspect. A team's success depends on their all-rounder's form and potential.";
}
if (isset($_POST['sign'])) {
        $_SESSION['timeout'] = 1;



        #print_r($_POST);
        #print_r($_GET);

        $comm_username = $_SESSION['name'];
        $comm_title = $_POST['question_title'];
        $comm_desc = $_POST['question_desc'];



        $sql1 = 'INSERT INTO `comments` (`comment_username`, `comment_title`, `comment_desc`, `comment_cat`, `header`, `comment_timestamp`) VALUES ("' . $comm_username . '", "' . $comm_title . '", "' . $comm_desc . '", "' . $comm_cat . '", "NULL", current_timestamp())';
        if (mysqli_query($conn, $sql1)) {
                echo '<div class="alert alert-success" role="alert">
                                New record created successfully
                        </div>';

              
        

        } else {
                echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
        }
}
#var_dump($noResult);
include "_dbConnect.php";
include "_signupModal.php";
?>

<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags  -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
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

        <style>
                .header img {
                        float: left;
                        width: 20px;
                        height: 20px;
                        background: #555;
                }

                .header h5 {
                        position: relative;
                        top: -5px;

                }
        </style>

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
                                                <button type="button" class="btn btn-outline-primary mr-sm-2 mx-2 dropdown-toggle mx-2 border border-primary" data-bs-toggle="dropdown" aria-expanded="false">
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
                                        
                                        <?php
                                        if ((isset($_SESSION["name"]))) {
                                                echo '      <li class="nav-item d-flex flex-row-reverse">
                                        <a class="nav-link disabled mx-2" href="#" tabindex="-1" aria-disabled="true">Welcome <b> ' . $_SESSION["name"] . '</b></a>
                                </li>';
                                        }
                                        ?>
                                </ul>
                                <?php
                                if ((isset($_SESSION["name"]))) {
                                        echo '
                                <form action = "search.php" class="form-inline my-2 my-lg-0" method = "GET">
                                <input  class="form-control mr-sm-2 mx-2" type="search" name = "search" placeholder="Search" aria-label="Search">
                                
                                <button  class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit">Search</button>
                                <a class = "btn btn-primary my-2 my-sm-0 mx-2"align="center"style = "color:white;"href="logout.php">Logout</a>

                        </form>
                        ';
                                } else {
                                        echo '
                                        <form action = "search.php" class="form-inline my-2 my-lg-0" method = "GET">
                                        <input  class="form-control mr-sm-2 mx-2" type="search" name = "search" placeholder="Search" aria-label="Search">
                                        
                                        <button  class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit">Search</button>
                                <button type="button" class="btn btn-primary my-2 my-sm-0 mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>

                        </form> ';
                                }
                                #                         echo $_SESSION["name"];
                                ?>
                        </div>
                </nav>
        </div>
        <?php include '_dbConnect.php';    ?>

        <?php

        $whitespace = " ";

        if ($_GET['comment_category'] != null)
                $comment_category = $_GET['comment_category'];

        $sql = 'SELECT * FROM `comments` WHERE `comment_cat` = "' . $comment_category . '"';
        $type = 'SELECT * FROM `categories` WHERE `cat_name` = "' . $comment_category . '"';



        $result = mysqli_query($conn, $sql);

        $type_result = mysqli_query($conn, $type);
        while ($row = mysqli_fetch_assoc($type_result)) {


                $cat_name = $row['cat_name'];
                $cat_desc = $row['cat_desc'];
                echo '<div class="jumbotron">
                <h1 class="display-4 text-center">' . $cat_name . ' Forum</h1>
                <p class="lead text-center">' . $cat_desc . '</p>
                <hr class="my-4">
                <div class="container">
                        <p class="">'.$forum.'</p>
                        <p class="lead ">
                                ' . (($cat_name == "batsmen") ? '<a class="btn btn-primary btn-lg" href="https://www.iplt20.com/stats/2021/mostRuns?stats_type=batting" role="button">Learn more</a>' : (($cat_name == "bowlers") ? '<a class="btn btn-primary btn-lg" href="https://www.iplt20.com/stats/2021/mostWkts?stats_type=bowling" role="button">Learn more</a>' :
                        '<a class="btn btn-primary btn-lg" href="https://www.iplt20.com/stats/2021/playerPoints?stats_type=bowling" role="button">Learn more</a>')) . '
                        </p>
                </div>
                </div> ';
        }
        ?>
        <div class="container">
                <h1 class="text-center">Fantasy FAQs</h1>
                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                        $noResult = false;
                        $comment_id = $row['comment_id'];
                        $comment_username = $row['comment_username'];
                        $comment_title = $row['comment_title'];
                        $comment_desc = $row['comment_desc'];
                        $comment_cat = $row['comment_cat'];
                        $comment_timestamp = $row['comment_timestamp'];
                        $comment_answer = $row['comment_answer'];
                        $header = $row['header'];

                        echo '
                
                <div class="media my-3">
                        <img class="mr-3" src="../../resized_images/users/user3.png" width="34px" alt="Generic placeholder image">
                        <div class="media-body">
                                <h5 class="mt-0"><a href = "thread.php?comment_cat=' . $comment_cat . '&comment_username=' . $comment_username . '&comment_id=' . $comment_id . '">' . $comment_title . '</a></h5>
                                ' . $comment_desc . ' <br>
                                ' . (($comment_answer != null) ? '<div class = "header" ><img src = "../../img/Alerts/green_tick.jpg" alt = "logo"/><h5>Answered</h5></div>' : "") . '
                                <small>' . $comment_timestamp . '' . $whitespace . '-By<b>  ' . $comment_username . '</b></small>
                        </div>
                </div>
        ';
                }


                ?>
        </div>
        <?php

        $sgnusername = null;







        $method = $_SERVER['REQUEST_METHOD'];
        #if(($_SERVER['REQUEST_METHOD']) == 'POST')


        ?>

        <script>
                if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                }

                function clearForm() {
                        document.location.href = "threadlist.php?comment_category=<?php $comment_category ?>";
                        window.location.reload();
                }
        </script>
        <br class="my-4">
        <div class="container">
                <?php
                if ($noResult) {

                        echo '<div class="jumbotron w-75 p-3">
                                <div class="container">
                                        <h5 class="display-4" style="font-size: 225%;"><small>Thread is currently empty :(</small></h5>
                                        <p class="lead">Be the first to ask a question !</p>
                                </div>
                        </div>';
                }
                ?>
                <h2 class="text-center">Confused about team selection ? Ask away :)</h2>
                <small class="text-center" style="color:red;">*Disclaimer: This page is protected from spam and SQL injection</small>




                <?php

                if ((isset($_SESSION["name"])) && $_SESSION["name"] == true) {
                        echo '
                <form action="' . $_SERVER['REQUEST_URI'] . '" method="POST">


                        
                        <div class="form-group">
                                <label for="exampleFormControlTextarea1">Question Title</label>
                                <textarea class="form-control" name="question_title" rows="1" required></textarea>
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlTextarea1">Question Description</label>
                                <textarea class="form-control" name="question_desc" rows="3" required></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name="sign"></input>
                </form>';
                } else
                        echo '
               <div class="container">
               <h3> Please log in to post comments</h3>
               </div>';
                ?>
        </div>


</body>

</html>

<script type="text/javascript">
        function start_countdown() {
                var counter = 10;
                myVar = setInterval(function() {
                        if (counter >= 0)
                                document.getElementById("countdown").innerHTML = "You Will Be allowed to ask more questions In <br>" + counter + " Sec";

                        if (counter == 0) {
                                $.ajax({
                                        type: 'post',
                                        url: 'threadlist.php?',
                                        success: function(response) {
                                                window.location = "";
                                        }
                                });
                        }
                        counter--;
                }, 1000)
        }
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
                                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
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
<script>
        $(document).ready(function() {
                $('#login_form').on('submit', function(event) {
                        var category = "<?php echo $comment_category?>";
                        event.preventDefault();
                        $.ajax({
                                url: "check_login.php",
                                method: "POST",
                                data: $(this).serialize(),
                                success: function(data) {
                                        if (data != '') {
                                                $('#error_message').html(data);
                                        } else {
                                                window.location = 'threadlist.php?comment_category='+category
                                        }
                                }
                        })
                });
        });
</script>

<!-- Form Username

        <div class="form-group">
                <label for="exampleInputEmail1">username</label>
                <input type="username" class="form-control" id="usr" name="question_username" aria-describedby="usernameHelp" placeholder="Enter your username" required>

        </div> 
-->