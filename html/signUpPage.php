<!DOCTYPE html>
<html>
    <head>
        <link href="../css/Css.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="../js/JavaScript.js"></script>
        <meta charset="utf-8">
        <title>Sign up</title>
      </head>

      <body class="background">
     
        <div class="card" style="width: 22rem; text-align: center; margin:auto; position: relative; top: 50px;">
            <img src="../img/09160089cbb14941dd08d0f2be9b6a47.jpg" class="card-img-top" alt="error">
            <div class="card-body">
                <form method="POST" action = "loginPage.php">
                    <h3 style="color: #546270;">Sign up</h3><br/>
                    <div class="form-group">
                        <input type="email" class="form-control" name = "email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                      </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name = "username" id="formGroupExampleInput" placeholder="Username">
                      </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name = "password" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary " style="background-color: #778899; border-color:#778899;" onclick="changeToLogin()">註冊</button>
                  </form>
            </div>
          </div>
          <?php
            header('Content-Type: text/html');
            $db_host = "localhost";
            $db_username = "root";
            $db_password = "rootroot";
            $db_name = "final_project";
            $db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
            mysqli_set_charset($db_link, 'utf8');
            
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "INSERT INTO `userlogin` (`ID`, `UserName`, `UserPassword`, `UserEmail`, `UserApproved`) VALUES (\'NULL\', \'$usernamer\', \'$password\', \'$email\', \'N\')";
          ?>
      </body>
</html>