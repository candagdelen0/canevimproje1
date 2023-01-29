<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fonksiyonlar/bootstrap.min.css">
    <link rel="stylesheet" href="Fonksiyonlar/bootstrap.bundle.min.js">   
    <link rel="stylesheet" href="Fonksiyonlar/jquery-3.6.2.min.js">
    <script src="https://kit.fontawesome.com/c046d71f5c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Fonksiyonlar/style.css">
    <title>User Page</title>

    <style>
        .btnnn {
            background-color: #dc143c;
            border: none;
            color: white;
            padding: 12px 16px;
            font-size: 16px;
            cursor: pointer;
            margin: 2px;
        }
        .btnnn:hover {
            background-color: #d2691e;
        }
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }
        .active, .accordion:hover {
          background-color: #ccc; 
        }
        .panel {
          padding: 0 18px;
          display: none;
          background-color: white;
          overflow: hidden;
        }
        * {box-sizing: border-box}
        body {font-family: "Lato", sans-serif;}
        .tab {
          float: left;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
          width: 30%;
          height: 300px;
        }
        .tab button {
          display: block;
          background-color: inherit;
          color: black;
          padding: 22px 16px;
          width: 100%;
          border: none;
          outline: none;
          text-align: left;
          cursor: pointer;
          transition: 0.3s;
          font-size: 17px;
        }
        .tab button:hover {
          background-color: #ddd;
        }
        .tab button.active {
          background-color: #ccc;
        }
        .tabcontent {
          float: left;
          padding: 0px 12px;
          border: 1px solid #ccc;
          width: 70%;
          border-left: none;
          height: 400px;
        }
        .buttonup {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }
        .buttonup:hover {background-color: #3e8e41}
        .buttonup:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
</head>

<body>

            <div>
                <h3 class="p-2 m-3"><i class="fa-solid fa-user pe-3"></i>User Name</h3>
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Bilgiler')" id="defaultOpen">Kullanıcı Bilgileri</button>
                    <button class="tablinks" onclick="openCity(event, 'Yorum')">Adreslerim</button>
                    <button class="tablinks" onclick="openCity(event, 'Yorum')">Şifre Değiştirme</button>
                    <button class="tablinks" onclick="openCity(event, 'Sipariş')">Siparişlerim</button>
                    <button class="tablinks" onclick="openCity(event, 'Favori')">Favorilerim</button>
                    <button class="tablinks" onclick="openCity(event, 'Yorum')">Yorumlarım</button>
                </div>
                <div id="Bilgiler" class="tabcontent">
                    <h3>Profil Bilgilerim</h3>
                    <form action="">
                        <div>
                            <label for="">First Name:</label>
                            <input type="text" placeholder="Enter your first name" style="margin: 5px;">
                            <label for="">Last Name:</label>
                            <input type="text" placeholder="Enter your last name" style="margin: 5px;">
                        </div>
                        <br>
                        <div>
                        <label for="">Birth Day:</label>
                            <input type="date" placeholder="enter your birthday" style="margin: 5px;">
                        </div>
                        <br>
                        <div>
                            <label for="gender">
                                <input type="radio" name="gender" style="margin: 7px;">Man
                                <input type="radio" name="gender" style="margin: 7px;">Woman
                            </label>
                        </div>
                        <br>
                        <div>
                            <label for="">E-Mail:</label>
                            <input type="email" name="mail" style="margin: 7px;" placeholder="Enter your e-mail">
                        </div>
                        <br>
                        <div>
                            <button style="margin: 10px;" class="buttonup"><a href="#!" style="text-decoration: none; color: white;">Update me!</a></button>
                        </div>
                    </form>

                </div>
                <div id="Sipariş" class="tabcontent">
                    <h3>Siparişlerim</h3>
                    <p>Paris is the capital of France.</p> 
                </div>
                <div id="Favori" class="tabcontent">
                  <h3>Favorilerim</h3>
                  <p>Tokyo is the capital of Japan.</p>
                </div>
                <div id="Yorum" class="tabcontent">
                  <h3>Yorumlarım</h3>
                  <p>Amsterdam is the capital of Netherlands.</p>
                </div>
            </div>


    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
    

    <footer class="bg-secondary text-center text-white fixed-bottom">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="#!">CanEvim Yayıncılık ve Dağıtım</a> Tüm Hakları Saklıdır.
        </div>
    </footer>
</body>
</html>