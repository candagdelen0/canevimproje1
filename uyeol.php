<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fonksiyonlar/bootstrap.min.css">
    <link rel="stylesheet" href="Fonksiyonlar/bootstrap.bundle.min.js">   
    <link rel="stylesheet" href="Fonksiyonlar/jquery-3.6.2.min.js">
    <title>Üye ol</title>
    <style>
        * {box-sizing: border-box}
          input[type=text], input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
        }
        input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }
        hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
        }
        button {
          background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
        }
        button:hover {
          opacity:1;
        }
        .cancelbtn {
          padding: 14px 20px;
          background-color: #f44336;
        }
        .cancelbtn, .signupbtn {
          float: left;
          width: 50%;
        }
        .container {
          padding: 16px;
        }
        .clearfix::after {
          content: "";
          clear: both;
          display: table;
        }
        a {
            text-decoration: none;
            color: white;
        }
        a:hover{
            color: white;
        }
        @media screen and (max-width: 300px) {
          .cancelbtn, .signupbtn {
            width: 100%;
          }
        }
    </style>
</head>
<body>
    <form action="" style="border:1px solid #ccc">
        <div class="container">
            <div class="row">
                <div class=col-md-3></div>
                <div class=col-md-6>
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                    <label>
                      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="gizlilik.php" style="color:dodgerblue">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                      <button type="button" class="cancelbtn"><a href="index.php">Cancel</a></button>
                      <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <footer class="bg-secondary text-center text-white fixed-bottom">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" style="text-decoration:none" href="#!">CanEvim Yayıncılık ve Dağıtım</a> Tüm Hakları Saklıdır.
        </div>
    </footer>
</body>
</html>
