<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signupModal">
  Launch demo modal
</button> -->

<?php
include '_dbConnect.php';
$sgnusername = null;
if(isset($_POST['signup']))
{
        $sgnusername = $_POST['usr'];
         if(($sgnusername != null))
        {
                // $sgnusername = $_POST['usr'];
                $password 		= sha1($_POST['password']);
                $confirmpwd             = sha1($_POST['confirmpwd']);
                $favteam = $_POST['faviplteam'];
                $favbatsman = $_POST['faviplbatsman'];
                
                
                if($confirmpwd == $password)
                {
                        $sql = 'INSERT INTO `users` (`username`, `faviplteam`, `faviplbatsman`, `password`, `created`) VALUES ("'.$sgnusername.'", "'.$favteam.'", "'.$favbatsman.'", "'.$password.'", current_timestamp())';
                        if (mysqli_query($conn, $sql)) {
                                echo '<div class="alert alert-success" role="alert">
                                New record created successfully
                        </div>';
                        } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                }

        }
        
}
$_POST = array();
?>
<script>
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Sign-Up</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <form action = "login.php" method = "POST">
                                <div class="modal-body">

                                        <div class="form-group">
                                                <label for="exampleInputEmail1">username</label>
                                                <input type="username" class="form-control" id="usr" name = "usr"aria-describedby="usernameHelp" placeholder="Enter your username">
                                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>

                                        <label for="faviplteam">Your Favourite IPL Team <b>:</b> </label>
                                        <?php

                                        $link = mysqli_connect('localhost', 'root', '');
                                        mysqli_select_db($link, 'users');

                                        $team = "SELECT DISTINCT Team from iplstats ORDER BY Team ASC";
                                        $iplteams = mysqli_query($link, $team);

                                        echo "<select id = 'faviplteam'class = 'btn btn-primary dropdown-toggle btn-block' style= 'width:200px;margin:5px;'name = 'faviplteam'>";
                                        while ($nrow = mysqli_fetch_array($iplteams)) {
                                                echo '<option class = "btn btn-light  dropdown-toggle" value ="' . $nrow['Team'] . '"> ' . $nrow['Team'] . '</option>"';
                                        }
                                        echo "</select>";


                                        ?>

                                        <label for="faviplteam">Your Favourite IPL Player<b>:</b> </label>
                                        <?php

                                        $link = mysqli_connect('localhost', 'root', '');
                                        mysqli_select_db($link, 'users');

                                        $batsman = "SELECT Batsman FROM `iplstats` ORDER BY `iplstats`.`Runs Scored` DESC";
                                        $faviplbatsman = mysqli_query($link, $batsman);

                                        echo "<select id = 'faviplbatsman'class = 'btn btn-primary dropdown-toggle btn-block' style= 'width:200px;margin:3px;'name = 'faviplbatsman'>";
                                        while ($nrow = mysqli_fetch_array($faviplbatsman)) {
                                                echo '<option class = "btn btn-light  dropdown-toggle" value ="' . $nrow['Batsman'] . '"> ' . $nrow['Batsman'] . '</option>"';
                                        }
                                        echo "</select>";

                                        echo '<br>';
                                        
                                        
                                        ?>
                                        
                                        <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control " id="password" name = "password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                                <label for="exampleInputPassword1">Confirm Password</label>
                                                <input type="password" class="form-control" id="confirmpwd" name ="confirmpwd" placeholder="Password">
                                        </div>
                                        <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>


                                </div>
                                <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name = "signup">Submit</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                </div>
                        </form>
                </div>
        </div>
</div>