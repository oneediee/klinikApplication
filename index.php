<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Irwandi">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/signin.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <style type="text/css">
      body{
                                      background-color:#21bfbf;
                                                              
                                }
                                .ft{
                                      color:#101010;
                                      font-family: Lucida Bright;
                                      font-size:18px;
                                }
                                .all{
                                    max-width: 550px;
                                    margin-left: 310px;
                                    margin-right: 310px;
                                    margin-top: 50px;
                                    border-radius: 0px;
                                }
                                .opc{
                                    background-color: #1e5a5a;
                                    opacity: 0.9;
                                }

</style>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
</head>

<body>

    <div class="container">
      <div class="panel panel-default all opc">
        <form method="POST" action="proses/login.php" class="form-signin" >
        <div class="panel-default"><h2 align="center" class="animated flipInX">
        <img src="assets/img/2.png" width="200px"><br>

              <i class="fa fa-user"> <font color="white"> Login </font></i></h2></div>
              <hr></hr>
          <div class="panel-body">
            
                <label for="inputUsername" class="sr-only"  >Username</label>
                <input type="text" name="user" class="form-control ft animated flipInX" placeholder="Username" autocomplete="off">
                <p></p>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="pass" class="form-control ft animated flipInX" placeholder="Password" required autocomplete="off">
              <button style="margin-top:25px;" class="btn btn-lg btn-success btn-block animated flipInY" type="submit" name="login">
                  <i class="fa fa-sign-in"></i> Sign In</button>
          </div>
           </form>
      </div>
    </div>

</body>
</html>
