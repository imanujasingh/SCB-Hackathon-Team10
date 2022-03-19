<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/signin_signup_styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <!--ADD-->

    <?php
        require_once('../HTML/config.php');

        $email = $password = "";
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = trim($_POST['EmailIDLog']);
        $password = trim($_POST['PassLog']);
        $sql = "SELECT id FROM login WHERE email = '$email' AND password='$password'";
        $result = $conn->query($sql);
        //echo "number of rows: " . $result->num_rows;
        $row = $result->fetch_assoc();
        if($row!==null){               
            $_SESSION["user"] = $row['id'];
            $_SESSION["loggedin"] = true;
            echo '<script>alert("User logged in successfully.")</script>';
            header('Location: ../HTML/home.html');
        }
        else{
            echo'<script>alert("Invalid details.");</script>';
        }
    }
    ?>


    <script type="text/javascript">
        $(function() {
                $(Object).ready(function(e){
                $('#form-sign').css('display', 'none');
                $('.SignUpForm').css('display', 'none');
                $('#form-logN').css('display', 'none');
                $('.NForm').css('display', 'none');
                $('#form-logU').css('display', 'inline');
                $('.SignInForm').css('display', 'flex');
                $('.NForm').css('border', 'none');
                $('.SignInForm').css('border', 'none');
                $('.SignUpForm').css('border', 'none');
                e.preventDefault();
            });
        });

        $(function() {
            $('#LoginUser').on('click', function(e) {
                $('#form-sign').css('display', 'none');
                $('.SignUpForm').css('display', 'none');
                $('#form-logN').css('display', 'none');
                $('.NForm').css('display', 'none');
                $('#form-logU').css('display', 'inline');
                $('.SignInForm').css('display', 'flex');
                $('.NForm').css('border', 'none');
                $('.SignInForm').css('border', 'none');
                $('.SignUpForm').css('border', 'none');
                e.preventDefault();
            });
        });
        $(function() {
            $('#SignUpUser').on('click', function(e) {
                e.preventDefault();
                $('#form-sign').css('display', 'inline');
                $('.SignUpForm').css('display', 'flex');
                $('#form-logN').css('display', 'none');
                $('.NForm').css('display', 'none');
                $('#form-logU').css('display', 'none');
                $('.SignInForm').css('display', 'none');
                $('.NForm').css('border', 'none');
                $('.SignInForm').css('border', 'none');
                $('.SignUpForm').css('border', 'none');
            });
        });
    </script>
    </head>

<body>
    <!--Login modal begin-->
    
    
                <!--<div class="modal-header modhead">
                    <div class="buttons">
                        <button type="button" id="ULog" class="login1 btn" style="color:white">Sign In</button>
                        <button type="button" id="NLog" class="login2 btn" style="color:white">Sign Up</button>
                        <p type="button" id="LogSign" style="color:white;text-align:center">Login/Sign Up
                        <button type="button" id="close" class="close" data-dismiss="modal">&times; </button></p>
                    </div>
                </div>-->
                <div class="form1">
                    <div class="SignUpForm form-div">
                        <!--<div class="row justify-content-md-center">-->
                            <div class="details half card left-half">
                                <form id="form-sign" class="formLogSign">
                                    <div class="form-group">
                                        <label for="EmailIDSign">Email ID: </label>
                                        <input type="text" name="EmailIDSign" id="EmailIDSign" class="form-control "  required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="UserNameSign">Username: </label>
                                        <input type="text" name="UserNameSign" id="UsernameSign" class="form-control"  required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="PassSign1">Password: </label>
                                        <input type="password" name="PassSign1" id="PassSign1" class="form-control"  required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="PassSign2"> Reenter Password: </label>
                                        <input type="password" name="PassSign2" id="PassSign2" class="form-control"  required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="LoginBtn" id="SignUp" form="form-log1" onclick="signUp()" value="Sign Up" data-dismiss="modal" class="btn-primary btn btn-block" required="required"></input>
                                    </div>
                                    <div class="form-group">
                                        <p class="Member">Already a member? <a href="#" id="LoginUser" class="MemberBtn" aria-current="page">Sign In</a></p>
                                    </div>
                                </form>
                            </div>
                            <div class="half card right-half Welcome">
                                <div class="WelBack">
                                    <h2 style="color:white">WELCOME NEW LEARNER!</h2>
                                    <p style="color:white">Hello there! Welcome to Learning...</p>
                                    <image src="../Images/iron-man-png-15.png"></image>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="SignInForm form-div">
                        <!--<div class="row">-->
                            <div class="details half card left-half ">
                                <form id="form-logU" class="formLogSign" action="" method="POST">
                                    <div class="form-group">
                                        <label for="EmailIDLog">Email ID: </label>
                                        <input type="text" name="EmailIDLog" id="EmailIDLog" class="form-control"  required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="PassLog">Password: </label>
                                        <input type="password" name="PassLog" id="PassLog" class="form-control"  required="required" />
                                    </div>
                                    <div class="form-group">
<!--CHANGED-->                                        <input type="submit" name="LoginBtn" id="SignIn" value="Sign In" class="btn-primary btn btn-block" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <p class="Member">Not a member? <a href="#" class="MemberBtn" id="SignUpUser" aria-current="page">Sign Up</a></p>
                                    </div>
                                </form>
                            </div>
                                <div class="half card right-half Welcome">
                                    <div class="WelBack">
                                        <h2 style="color:white">WELCOME BACK!</h2>
                                        <p style="color:white">Hello there! Welcome back to Learning...</p>
                                        <img src="../Images/iron-man-png-15.png" class="rounded height:50%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

           

    
    <!--modal end-->
</body>

</html>