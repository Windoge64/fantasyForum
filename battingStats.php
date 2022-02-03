<!DOCTYPE html>
<html>
<?php
session_start();
include "_dbConnect.php";
$sql = "SELECT * FROM `batsmen` ORDER BY `rating_value` DESC";
$batting_stats = mysqli_query($conn, $sql);
?>

<head>
        <title>Batting Stats</title>

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
                th {
                        width: auto;
                }

                th.min {
                        width: 1%;
                        white-space: nowrap;
                }

                td {
                        width: auto;
                }

                td.min {
                        width: 1%;
                        white-space: nowrap;
                }
        </style>

</head>

<body>
<!-- < <div class="row">
        <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
                <a class="navbar-brand mx-2" href="#">IPLT20</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                        
                                        <a class="nav-link" href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg> <span class="sr-only">(current)</span></i></a>
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
                                                <li><a class="dropdown-item" href="#">Bowling Stats</a></li>
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
                        <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2 mx-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit">Search</button>
                                <button type="button" class="btn btn-primary my-2 my-sm-0 mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>

                        </form>
                </div>
        </nav>
</div> -->

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

<br />
<br />
<br />
        
        <div class="container">
                <div class="jumbotron  p-3">
                <h2 class="text-center">Batsmen Stats</h2>
                <p class="lead text-center">The following are the most sought after batsmen in the coming IPL</p>
                <hr class="my-4">
                </div>
                
                <table class="table table-bordered table-hover table-dark">
                <thead>
                        <tr>
                                <th scope="col">#</th>
                                <th scope="col">Batsman Name</th>
                                <th class = "min" scope="col">Team</th>
                                <th class = "min" scope="col">Batsman Rating</th>
                                <th class = "min" scope="col">Runs Scored</th>
                                <th class = "min" scope="col">Balls Faced</th>
                                <th class = "min" scope="col">Average</th>
                                <th scope="col">Strike Rate</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                        $serial_no = 1;
                        while ($row = mysqli_fetch_assoc($batting_stats)) {
                                $srno = $row['srno'];
                                $name = $row['batsman_name'];
                                $desc = $row['batsman_desc'];
                                $team = $row['team'];
                                $runs = $row['runs'];
                                $balls_faced = $row['balls faced'];
                                $average = $row['average'];
                                $strike_rate = $row['strike rate'];
                                $rating = $row['batsman_rating'];
                                $value = $row['rating_value'];
                                $link = $row['link'];



                                echo '<tr>
                        <th scope="row">' . $serial_no . '</th>
                        <td><a href = "'.$link.'" class = "link-secondary">' . $name . '</a></td>
                        <td class = "min">' . $team . '</td>
                        <td class = "min">' . $rating . '</td>
                        <td class = "min">' . $runs . '</td>
                        <td class = "min">' . $balls_faced . '</td>
                        <td class = "min">' . $average . '</td>
                        <td>' . $strike_rate . '</td>
                        </tr>';
                        $serial_no++;
                        }
                        ?>
                </tbody>
        </table>
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
