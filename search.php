<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "ipl";
$db2 = "forums";
$conn = mysqli_connect($servername, $username, $password, $database);
$noResult = true;

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
                 
                                ?>
                        </div>
                </nav>
        </div>
        
        <div class="container my-3">
        <?php $search_query = $_GET['search'];
        $noResult = true;
        if(strlen($search_query )>=5)
        {
        ?>
                <h1>Search Results for <em>"<?php echo $search_query ?></em>":</h1>
                <?php
                $sql = 'SELECT * FROM `comments` WHERE MATCH (comment_title,comment_desc,comment_answer) AGAINST ("'.$search_query.'")';
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($query))
                {
                        $noResult = false;
                        $comment_id = $row['comment_id'];
                        $comment_username = $row['comment_username'];
                        $title = $row['comment_title'];
                        $desc = $row['comment_desc'];
                        $comment_id = $row['comment_id'];
                        $comment_cat = $row['comment_cat'];

                        $url = 'thread.php?comment_cat='.$comment_cat.'&comment_username='.$comment_username.'&comment_id='.$comment_id ;
                        
                        echo '
                        <div class="result">
                        <h3 class="py-2"><a href="'.$url.'" class="text-dark">'.$title.'</a></h3>
                        <p>'.$desc.'</p>
                        </div>
                        ';
        
                }
        }
        else
                echo "Please post a valid query!";
        if($noResult)
        {
                echo '
                <div class="jumbotron jumbotron">
                        <div class="container">
                                <h3 class="display-4">No results found</h3>
                                <p class="lead">Your Search query did not match any results. Please try again.<ul>
                                <li>Make sure all the words are spelled correctly</li>
                                <li>Try different keywords</li>
                                <li>Try more general words if specific ones don\'t work</li>
                                </ul>
                                
                                </p>
                        </div>
                </div>
                ';
        }
                ?>
        

        </div>
</body>

</html>

<!--ALTER TABLE comments ADD FULLTEXT(`comment_title`,`comment_desc`,`comment_answer`); 
SELECT * FROM `comments` WHERE MATCH (comment_title,comment_desc,comment_answer) AGAINST ('Rohit Sharma'); -->

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
                        event.preventDefault();
                        $.ajax({
                                url: "check_login.php",
                                method: "POST",
                                data: $(this).serialize(),
                                success: function(data) {
                                        if (data != '') {
                                                $('#error_message').html(data);
                                        } else {
                                                window.location = 'threadlist.php?comment_category=batsmen';
                                        }
                                }
                        })
                });
        });
</script>

