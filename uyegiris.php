<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fonksiyonlar/bootstrap.min.css">
    <link rel="stylesheet" href="Fonksiyonlar/bootstrap.bundle.min.js">   
    <link rel="stylesheet" href="Fonksiyonlar/jquery-3.6.2.min.js">
    <title>Login Form</title>
    <script src="https://kit.fontawesome.com/c046d71f5c.js" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
        * {
        	box-sizing: border-box;
        }
        body {
        	background: #f6f5f7;
        	display: flex;
        	justify-content: center;
        	align-items: center;
        	flex-direction: column;
        	font-family: 'Montserrat', sans-serif;
        	height: 100vh;
        	margin: -20px 0 50px;
        }
        h1 {
        	font-weight: bold;
        	margin: 0;
        }
        h2 {
        	text-align: center;
        }
        p {
        	font-size: 14px;
        	font-weight: 100;
        	line-height: 20px;
        	letter-spacing: 0.5px;
        	margin: 20px 0 30px;
        }
        span {
        	font-size: 12px;
        }
        a {
        	color: #333;
        	font-size: 14px;
        	text-decoration: none;
        	margin: 15px 0;
        }
        button {
        	border-radius: 20px;
        	border: 1px solid #FF4B2B;
        	background-color: #FF4B2B;
        	color: #FFFFFF;
        	font-size: 12px;
        	font-weight: bold;
        	padding: 12px 45px;
        	letter-spacing: 1px;
        	text-transform: uppercase;
        	transition: transform 80ms ease-in;
        }
        button:active {
        	transform: scale(0.95);
        }
        button:focus {
        	outline: none;
        }
        button.ghost {
        	background-color: transparent;
        	border-color: #FFFFFF;
        }
        form {
        	background-color: #FFFFFF;
        	display: flex;
        	align-items: center;
        	justify-content: center;
        	flex-direction: column;
        	padding: 0 50px;
        	height: 100%;
        	text-align: center;
        }
        input {
        	background-color: #eee;
        	border: none;
        	padding: 12px 15px;
        	margin: 8px 0;
        	width: 100%;
        }
        .container {
        	background-color: #fff;
        	border-radius: 10px;
          	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
        			0 10px 10px rgba(0,0,0,0.22);
        	position: relative;
        	overflow: hidden;
        	width: 768px;
        	max-width: 100%;
        	min-height: 480px;
        }
        .form-container {
        	position: absolute;
        	top: 0;
        	height: 100%;
        	transition: all 0.6s ease-in-out;
        }
        .sign-in-container {
        	left: 0;
        	width: 50%;
        	z-index: 2;
        }
        .container.right-panel-active .sign-in-container {
        	transform: translateX(100%);
        }
        .sign-up-container {
        	left: 0;
        	width: 50%;
        	opacity: 0;
        	z-index: 1;
        }
        .container.right-panel-active .sign-up-container {
        	transform: translateX(100%);
        	opacity: 1;
        	z-index: 5;
        	animation: show 0.6s;
        }
        @keyframes show {
        	0%, 49.99% {
        		opacity: 0;
        		z-index: 1;
        	}
        
        	50%, 100% {
        		opacity: 1;
        		z-index: 5;
        	}
        }
        .overlay-container {
        	position: absolute;
        	top: 0;
        	left: 50%;
        	width: 50%;
        	height: 100%;
        	overflow: hidden;
        	transition: transform 0.6s ease-in-out;
        	z-index: 100;
        }
        .container.right-panel-active .overlay-container{
        	transform: translateX(-100%);
        }
        .overlay {
        	background: #FF416C;
        	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
        	background: linear-gradient(to right, #FF4B2B, #FF416C);
        	background-repeat: no-repeat;
        	background-size: cover;
        	background-position: 0 0;
        	color: #FFFFFF;
        	position: relative;
        	left: -100%;
        	height: 100%;
        	width: 200%;
          	transform: translateX(0);
        	transition: transform 0.6s ease-in-out;
        }
        .container.right-panel-active .overlay {
          	transform: translateX(50%);
        }
        .overlay-panel {
        	position: absolute;
        	display: flex;
        	align-items: center;
        	justify-content: center;
        	flex-direction: column;
        	padding: 0 40px;
        	text-align: center;
        	top: 0;
        	height: 100%;
        	width: 50%;
        	transform: translateX(0);
        	transition: transform 0.6s ease-in-out;
        }
        .overlay-left {
        	transform: translateX(-20%);
        }
        .container.right-panel-active .overlay-left {
        	transform: translateX(0);
        }
        .overlay-right {
        	right: 0;
        	transform: translateX(0);
        }
        .container.right-panel-active .overlay-right {
        	transform: translateX(20%);
        }
        .social-container {
        	margin: 20px 0;
        }
        .social-container a {
        	border: 1px solid #DDDDDD;
        	border-radius: 50%;
        	display: inline-flex;
        	justify-content: center;
        	align-items: center;
        	margin: 0 5px;
        	height: 40px;
        	width: 40px;
        }
        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }
        footer p {
            margin: 10px 0;
        }
        footer i {
            color: red;
        }
        footer a {
            color: #3c97bf;
            text-decoration: none;
        }
		.alert {
  			padding: 20px;
  			background-color: #f44336;
  			color: white;
		}
		.closebtn {
		  margin-left: 15px;
		  color: white;
		  font-weight: bold;
		  float: right;
		  font-size: 22px;
		  line-height: 20px;
		  cursor: pointer;
		  transition: 0.3s;
		}
		.closebtn:hover {
		  color: black;
		}
    </style>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
        	container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
        	container.classList.remove("right-panel-active");
        });
    </script>

</head>
<body>
    <h2>Sign in/up Form</h2>
    <div class="container" id="container">
	    <div class="form-container sign-up-container">
		    <form action="#">
			    <h1>Create Account</h1>
			    <div class="social-container">
				    <a href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
				    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			    </div>
			    <span>or use your email for registration</span>
			    <input type="text" placeholder="Name" />
			    <input type="email" placeholder="Email" />
			    <input type="password" placeholder="Password" />
			    <button>Sign Up</button>
		    </form>
	    </div>
	    <div class="form-container sign-in-container">
		    <form action="#">
		    	<h1>Sign in</h1>
		    	<div class="social-container">
		    		<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
		    		<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
		    		<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
		    	</div>
		    	<span>or use your account</span>
		    	<input type="email" name="email" placeholder="Email" />
		    	<input type="password" name="password" placeholder="Password" />
		    	<a href="#">Forgot your password?</a>
		    	<button name="login">Sign In</button>  
		    </form>
	    </div>
	    <div class="overlay-container">
	    	<div class="overlay">
	    		<div class="overlay-panel overlay-left">
	    			<h1>Welcome Back!</h1>
	    			<p>To keep connected with us please login with your personal info</p>
	    			<button class="ghost" name="login" id="signIn">Sign In</button>
	    		</div>
	    		<div class="overlay-panel overlay-right">
	    			<h1>Hello, Friend!</h1>
	    			<p>Enter your personal details and start journey with us</p>
	    			<button class="ghost" id="signUp"><a href="uyeol.php" style="color: white;">Sign Up</a></button>
	    		</div>
	    	</div>
	    </div>
    </div>  <!-- session i??lemleri eklenecek -->
	<?php
		if(isset($_SESSION['user'])!="") {
			header("Location: index.php");
			exit;
		}
		$error = false;
		if (isset($_POST["login"])) {
			$mail = trim($_POST["email"]);
			$mail = strip_tags($mail);
			$mail = htmlspecialchars($mail);

			$psw = trim($_POST["password"]);
			$psw = strip_tags($psw);
			$psw = htmlspecialchars($psw);

			if ($mail != "" || $psw !="") {
				$password = hash('sha256', $psw);

				$son = mysqli_query($db, "SELECT * FROM users WHERE userMail= '$mail' ");
				$dizi = mysqli_fetch_array($son);
				$say = mysqli_num_rows($son);

				if ($say == 1 && $dizi["userPassword"]==$password) {
					//$_SESSION['user'] = $dizi["userid"];
					header("Location: uyepanel.php");
				}
			} else { 
				?>
				<div class="alert">
				<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
				<strong>Hata Var</strong> Bilgiler Bo?? B??rak??lamaz.
			  </div>
		  <?php
			}
		}
		?>
</body>
</html>



