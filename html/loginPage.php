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
        <title>login_page</title>
      </head>

      <body class="background">
     
        <div class="card" style="width: 22rem; text-align: center; margin:auto; position: relative; top: 50px;">
            <img src="../img/09160089cbb14941dd08d0f2be9b6a47.jpg" class="card-img-top" alt="error">
            <div class="card-body">
                <form>
                    <h3 style="color: #546270;">Log in</h3><br/>
                    <div class="form-group">
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                        
                    <button type="button" class="btn btn-primary login" style="background-color: #778899; border-color:#778899" onclick="changeToBookkeeping()">登入</button>
                    
                    <svg type="button" xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="currentColor" class="bi bi-plus-circle-fill icon1" viewBox="0 0 16 16" onclick="changeToSignUp()">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg>
                    
                  </form>                
            </div>
          </div>
      </body>
</html>

