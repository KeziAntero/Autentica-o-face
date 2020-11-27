<?php
    session_start();

    if (isset($_POST['userID'])) {
        $_SESSION['userID'] = $_POST['userID'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['picture'] = $_POST['picture'];
        $_SESSION['first_name'] = $_POST['first_name'];
        $_SESSION['accessToken'] = $_POST['accessToken'];

        exit("success");
    }
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook Login</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">
                <img src="images/logo.png"><br><br>
                <form>
                    <input class="form-control" placeholder="Email..."><br>
                    <input class="form-control" placeholder="Senha..."><br>
                    <input class="btn" type="submit" value="Entar">
                    <button  type="button" onclick="logIn()" ><i class="fab fa-facebook fa-lg"></i> Entar com Facebook</button>
                    
                </form>
            </div>
        </div>
    </div>

    

    <script async defer crossorigin="anonymous" 
        src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v9.0&appId=1791804077640492&autoLogAppEvents=1" 
        nonce="AFAFdtvB"></script>
    <script
            src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
    </script>
    <script src="login.js"></script>
</body>
</html>