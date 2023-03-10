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
          padding: 3px 12px;
          border: 1px solid #ccc;
          width: 70%;
          border-left: none;
          height: 415px;
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
                    <button class="tablinks" onclick="openCity(event, 'Bilgiler')" id="defaultOpen">Kullan??c?? Bilgileri</button>
                    <button class="tablinks" onclick="openCity(event, 'Adres')">Adreslerim</button>
                    <button class="tablinks" onclick="openCity(event, 'Sifre')">??ifre De??i??tirme</button>
                    <button class="tablinks" onclick="openCity(event, 'Sipari??')">Sipari??lerim</button>
                    <button class="tablinks" onclick="openCity(event, 'Favori')">Favorilerim</button>
                    <button class="tablinks" onclick="openCity(event, 'Yorum')">Yorumlar??m</button>
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
                <div id="Adres" class="tabcontent">
                    <h3>Adreslerim</h3>
                    <div class="row mx-auto">
                      <div class="col-md-3 border border-secondary rounded m-3">
                        <p class="text-center m-2"><b>Ev Adresi</b></p> 
                        <p>Kire??burnu Mahallesi Direkli Sokak No:24</p>
                        <p>Sar??yer/??stanbul</p>
                        <button type="button" class="btn btn-light mb-2"><em>D??zenle</em></button>
                      </div>
                      <div class="col-md-3 border border-secondary rounded m-3">
                        <p class="text-center m-2"><b>???? Adresi</b></p> 
                        <p>Ye??ilp??nar Mahallesi ??ehit Metin Kaya Sokak No:11/1</p>
                        <p>Ey??psultan/??stanbul</p> 
                        <button type="button" class="btn btn-light mb-2"><em>D??zenle</em></button>
                      </div>
                      <div class="col-md-3 border border-secondary rounded m-3">
                        <p class="text-center m-2"><b>Yazl??k Adresi</b></p> 
                        <p>Anadolu Kava???? Mahallesi Fener yolu No:3</p>
                        <p>Beykoz/??stanbul</p> 
                        <button type="button" class="btn btn-light mb-2"><em>D??zenle</em></button>
                      </div>
                    </div>
                    <div class="d-flex justify-content-end me-5 mt-3">
                      <button type="button" class="btn btn-outline-info">Yeni Adres Ekle</button>
                    </div>
                </div>
                <div id="Sifre" class="tabcontent">
                  <h3 class="ms-5 mt-3">??ifre De??i??tir</h3>
                  <form action="">
                    <div class="text-center mt-3">
                      <p class="m-2">Mevcut ??ifre:</p>
                      <input type="text">
                      <p class="m-2">Yeni ??ifre:</p>
                      <input type="text">
                      <p class="m-2">Yeni ??ifre Onay:</p>
                      <input type="text">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <button class="btn btn-primary mt-5" type="button">Onayla</button>
                    </div>
                  </form>
                </div>
                <div id="Sipari??" class="tabcontent">
                  <h3>Sipari??lerim</h3>
                  <div class="mt-3">
                    <div class="bg-secondary bg-opacity-75">Sipari?? 1</div>
                    <div class="bg-secondary bg-opacity-25">i??erik</div>
                  </div>
                  <div class="mt-3">
                    <div class="bg-secondary bg-opacity-75">Sipari?? 2</div>
                    <div class="bg-secondary bg-opacity-25">i??erik</div>
                  </div>
                  <div class="mt-3">
                    <div class="bg-secondary bg-opacity-75">Sipari?? 3</div>
                    <div class="bg-secondary bg-opacity-25">i??erik</div>
                  </div>
                </div>
                <div id="Favori" class="tabcontent">
                  <h3>Favorilerim</h3>
                  <div class="bg-warning">
                    i??erik
                  </div>
                </div>
                <div id="Yorum" class="tabcontent">
                  <h3>Yorumlar??m</h3>
                  <div class="bg-secondary bg-opacity-50">
                    Yorumlar
                  </div>
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
            ?? 2023 Copyright:
            <a class="text-white" href="#!">CanEvim Yay??nc??l??k ve Da????t??m</a> T??m Haklar?? Sakl??d??r.
        </div>
    </footer>
</body>
</html>