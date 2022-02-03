<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags  -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        <title>DreamXI</title>
        
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
                                                <li><a class="dropdown-item" href="#">Batting Stats</a></li>
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
      
        
    }
    else
        echo '<div class="row">
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
                        <form action = "search.php" class="form-inline my-2 my-lg-0" method = "GET">
                                <input  class="form-control mr-sm-2 mx-2" type="search" name = "search" placeholder="Search" aria-label="Search">
                                
                                <button  class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit">Search</button>
                                <button type="button" class="btn btn-primary my-2 my-sm-0 mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>

                        </form>
                </div>
        </nav>
</div>';

    ?>
        <?php include '_dbConnect.php';    ?>
        <?php include '_forumConnect.php'; ?>

        <?php
        $comment_category = $_GET['comment_cat'];
        $comment_username = $_GET['comment_username'];
        $comment_id = $_GET['comment_id'];
        $sql = 'SELECT * FROM `comments` WHERE `comment_cat` = "' . $comment_category . '" AND `comment_username`="' . $comment_username . '" AND `comment_id` = "' . $comment_id . '"';
        $result = mysqli_query($conn, $sql);
        $flag = 0;
        $wait = false;
        if( isset($_SESSION['name']) &&$_SESSION['name'] == true)
        {
        $max_id = ' SELECT MAX(`comment_id`) as id FROM `comments` WHERE comment_username = "'.$_SESSION['name'].'" AND `answer_timestamp` is not NULL';
        $id_no = mysqli_query($conn, $max_id);
        while($num = mysqli_fetch_assoc($id_no))
                $current_id = $num['id'];
        

        
        $vsql = 'SELECT * FROM `comments` WHERE comment_id = "'.$current_id.'"';
        $verify = mysqli_query($conn,$vsql);
        while($vrow = mysqli_fetch_assoc($verify))
	{
                $datetimeFromMysql = $vrow['answer_timestamp'];
                $time = strtotime($datetimeFromMysql);
                $myFormatForView = date("m/d/y H:i:s", $time);
                echo $myFormatForView;
                date_default_timezone_set('Asia/Kolkata');

                $d1 = $myFormatForView;
                $d2 = date("m/d/y H:i:s",time()-3600);
                echo $d1;
                echo $d2;
                if($d1 > $d2)
                {
                        $wait = true;

                }
                
        }
}
        

        
        while ($row = mysqli_fetch_assoc($result)) 
        {
                       
                $comment_id = $row['comment_id'];
                $comment_username = $row['comment_username'];
                $comment_title = $row['comment_title'];
                $comment_desc = $row['comment_desc'];
                $comment_answer = $row['comment_answer'];
                $comment_cat = $row['comment_cat'];
                $comment_timestamp = $row['comment_timestamp'];
                $header = $row['header'];
                
                    echo '
                    <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                    <h1 class="display-4">' . $comment_title . '</h1>
                                    <p class="lead"> Dream11 recommended Answer:  <br><h3>' . (($comment_answer == null) ? ('No answers yet :( <br> Wanna offer a solution ?<br>
                                    '.((isset($_SESSION['name']) )? (($wait == true)?'<p>Please wait before posting another answer</p>':'<form action = "' . $_SERVER['REQUEST_URI'] . '" method="post"><div class="form-group">
                                    
                                    <textarea type="description" class="form-control" rows="3" id="comment_answer" name="comment_answer" placeholder="Your answer will be publically visible"></textarea>
    
                            </div><input type="submit" value = "Submit" name = "update" class="btn btn-primary" >
                            
                            </form>'):'<p>Please login to post an answer</p>')
                                    ) : ''.$comment_answer.'') . '</h3></p>
                                    
            
                            </div>
                    </div>  
                ';
                
                #if(($row['comment_answer'])!= null)

        }
        

        
        
        if (isset($_POST['update']) ) 
        {
                $comment_answer = $_POST['comment_answer'];

                $new_answer = 'UPDATE `comments` SET `comment_answer` = "' . $comment_answer . '", `answer_timestamp` = current_timestamp() WHERE `comments`.`comment_id` = ' . $comment_id . '';
                #echo $new_answer;
                $insert_answer = mysqli_query($conn, $new_answer);
                if (mysqli_query($conn, $new_answer)) {
                        $flag = 1;
                } else {
                        echo "Error updating record: " . mysqli_error($conn);
                }
                if ($flag) {
                        echo  "Your response has been recorded. <br> Please refresh the page to view it.";
                        $flag = 0;
                }
        }
        mysqli_close($conn);
        
        ?>

        
</body>

</html>

<!-- UPDATE `comments` SET `comment_answer` = 'Rohit Sharma & du Plessis or Ruturaj' WHERE `comments`.`comment_id` = 1; -->

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
                                                window.location = 'thread.php?comment_category='.$comment_cat.'&comment_username='.$comment_username.'&comment_id='.$comment_id;
                                        }
                                }
                        })
                });
        });
</script>