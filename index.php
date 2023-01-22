<?php
include("fonksiyon.php");
$sistem = new sistem;
?>

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Fonksiyonlar/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="Fonksiyonlar/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="Fonksiyonlar/style.css">
    <title>CanEvim Kitabevi</title>
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
    </style>

</head>
<body>
    <header>
        <div class="row border-secondary border-bottom bg-warning">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 mt-3 mb-3 d-flex flex-wrap align-items-center justify-content-center justify-content-md-start border-end border-dark">
                        <a href="#" class="d-flex align-items-center mb-2 mb-md-0 text-dark text-decoration-none">CE
                            <svg class="" width="40" height="32"></svg>
                        </a>
                    </div> 
                    <div class="col-md-9 border-end border-dark mt-3 mb-3 text-center"><a href="index.php"><button class="btnnn"><i class="fa fa-home"></i> CanEvim Kitabevi</button></a></div>
                </div>
            </div>
        </div>
        <?php $b = $sistem->sorgum($db, "SELECT * FROM kategori",1); ?>
        <div class="col-md-12 d-flex flex-wrap align-items-center justify-content-center justify-content-md-start bg-warning">
            <ul class="nav col-12 col-md-auto me-md-auto mb-2 justify-content-center mb-md-0 bg-warning">
                <?php while($kategori=$b->FETCH_ASSOC()): 
                echo 
                '<li><a href="kategorisayfa.php?id='.$kategori["id"].'" class="nav-link px-2 text-danger">'.$kategori["ad"].'</a></li>';
                endwhile; 
              ?>
            </ul>
            <form class="col-12 col-md-auto mb-3 mb-md-0 me-md-3 bg-warning" role="search">
              <input type="search" class="form-control form-control-dark text-bg-light text-dark" placeholder="Search..." aria-label="Search">
            </form>
            <div class="text-end bg-warning mt-2 mb-2">
                <button type="button" class="btn btn-outline-light me-3 bg-secondary"><a href="uyegiris.php" class="text-light">Login</a></button>
            </div>
        </div>
    </header>

    <section>
        <div class="col-md-12 text-center mt-2">
            <img src="Resimler/Slider/resim.jpg" alt="">
        </div>
    </section>

    <div class="container-cards">
        <h3 style="margin: 10px;">Öne Çıkan Kitaplar</h3>
        <div class="row mx-auto">
            <div class="col-md-2 m-3 ms-5">
                <div class="card border-dark">
                    <img src="Resimler/Kitaplar/SekerPortakali.jfif" class="card-img-top" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-title">Şeker Portakalı</h5>
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, molestias.</p>
                      <a href="kitapincele.php" class="btn btn-primary">Kitabı İncele</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2 m-3">
                <div class="card border-dark">
                    <img src="Resimler/Kitaplar/simyaci.jpg" class="card-img-top" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-title">Simyacı</h5>
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, molestias.</p>
                      <a href="#" class="btn btn-primary">Kitabı İncele</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2 m-3">
                <div class="card border-dark">
                    <img src="Resimler/Kitaplar/kirke.jfif" class="card-img-top" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-title">Ben, Kirke</h5>
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, molestias.</p>
                      <a href="#" class="btn btn-primary">Kitabı İncele</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2 m-3">
                <div class="card border-dark">
                    <img src="Resimler/Kitaplar/VarMısın.jfif" class="card-img-top" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-title">Var Mısın?</h5>
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, molestias.</p>
                      <a href="#" class="btn btn-primary">Kitabı İncele</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2 m-3">
                <div class="card border-dark">
                    <img src="Resimler/Kitaplar/hayvanCiftligi.jpg" class="card-img-top" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-title">Hayvan Çiftliği</h5>
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, molestias.</p>
                      <a href="#" class="btn btn-primary">Kitabı İncele</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-images">
        <h3 style="margin: 10px;">Ayın Yazarları</h3>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-around border border-dark bg-secondary">
                <div class="card mb-2 mt-2">
                    <img src="Resimler/Yazarlar/Jose.jpg" class="card-img-top rounded-circle" style="width: 150px; height: 150px; padding: 5px;">
                    <div class="card-body">
                        <p class="card-text text-center">Jose Vasconcelos</p>
                    </div>
                </div>
                <div class="card mb-2 mt-2">
                    <img src="Resimler/Yazarlar/Paulo.jfif" class="card-img-top rounded-circle" style="width: 150px; height: 150px; padding: 5px;">
                    <div class="card-body">
                        <p class="card-text text-center">Paulo Coelho</p>
                    </div>
                </div>
                <div class="card mb-2 mt-2">
                    <img src="Resimler/Yazarlar/Doğan.jpg" class="card-img-top rounded-circle" style="width: 150px; height: 150px; padding: 5px;">
                    <div class="card-body">
                        <p class="card-text text-center">Doğan Cüceloğlu</p>
                    </div>
                </div>
                <div class="card mb-2 mt-2">
                    <img src="Resimler/Yazarlar/Madeline.jpg" class="card-img-top rounded-circle" style="width: 150px; height: 150px; padding: 5px;">
                    <div class="card-body">
                        <p class="card-text text-center">Madeline Miller</p>
                    </div>
                </div>
                <div class="card mb-2 mt-2">
                    <img src="Resimler/Yazarlar/George.jfif" class="card-img-top rounded-circle" style="width: 150px; height: 150px; padding: 5px;">
                    <div class="card-body">
                        <p class="card-text text-center">George Orwell</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col-md-4">
                <h5>Yardımcı Sayfalar</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Havale/EFT Bilgileri</a></li>
                    <li class="nav-item mb-2"><a href="gizlilik.php" class="nav-link p-0 text-muted">Gizlilik Sözleşmesi</a></li>
                    <li class="nav-item mb-2"><a href="uyelik.php" class="nav-link p-0 text-muted">Üyelik Sözleşmesi</a></li>
                    <li class="nav-item mb-2"><a href="aydinlatma.php" class="nav-link p-0 text-muted">Kişisel Verileri Aydınlatma Metni</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Bana Özel</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sipariş Takibi</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Favori Listem</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bilgilerim</a></li>
                    <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted">İletişim</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <!-- Section: Social media -->
                        <section class="m-2 text-center">
                            <p>Uygulamamızı İndirin</p>
                            <hr>
                            <a href="#" class="btn btn-outline-dark btn-floating m-1">
                                <i class="fa-brands fa-app-store-ios" id="app"></i>
                            </a>
                            <a href="#" class="btn btn-outline-dark btn-floating m-1">
                                <i class="fa-brands fa-google-play" id="android"></i>
                            </a>
                        </section>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <section class="mx-auto text-center">
                        <p>Bizi Takip Edin</p>
                        <hr>
                        <!-- Facebook -->
                        <a class="btn btn-outline-dark btn-floating m-1" href="#" role="button">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <!-- Twitter -->
                        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <!-- Google -->
                        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
                            <i class="fab fa-google"></i>
                        </a>
                        <!-- Instagram -->
                        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <!-- Linkedin -->
                        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <!-- Github -->
                        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
                            <i class="fab fa-github"></i>
                        </a>
                    </section>
            </div>
        </footer>
    </div>

    <footer class="bg-secondary text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <img src="Resimler/ikonlar/AmericanExpiress20x12.png" class="m-2">
                <img src="Resimler/ikonlar/AxessCard46x12.png" class="m-2">
                <img src="Resimler/ikonlar/MasterCard21x12.png" class="m-2">
                <img src="Resimler/ikonlar/MaximumCard46x12.png" class="m-2">
                <img src="Resimler/ikonlar/OdemeSecimiBonusCard.png" class="m-2">
                <img src="Resimler/ikonlar/OdemeSecimiCardFinans.png" class="m-2">
                <img src="Resimler/ikonlar/OdemeSecimiParafCard.png" class="m-2">
            </section>
        </div>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="#!">CanEvim Yayıncılık ve Dağıtım</a> Tüm Hakları Saklıdır.
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>