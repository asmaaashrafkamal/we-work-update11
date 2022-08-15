<?php
if(isset($_POST['login'])){
    require_once("add_project_class.php");
    $login=new projects();
    $m=$login->login($_POST['email'],$_POST['password']);
    }
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./style2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-md-7 col-lg-5">
                
                    <div class="login-wrap p-4 p-md-5">
                    <?php
            if(!empty($m)){
                if($m=="fail"){
                  echo '<div ><div class="alert alert-danger"  style="max-width: 600px;"  role="alert"><h3 style="text-align:center;">Error Occurred Incorrect Email OR Password</h3> </div></div>';
                  }
                }
                ?>
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        
                        <h3 class="text-center mb-4">Sign In</h3>
                        <form  class="login-form" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="login">Login</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>