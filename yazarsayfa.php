<?php session_start();
include("fonksiyon.php");
$yazansis = new sistem;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }     
        .price {
            color: grey;
            font-size: 22px;
        }
        .card button {
          border: none;
          outline: 0;
          padding: 12px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
          font-size: 18px;
        }
        .card button:hover {
          opacity: 0.7;
        }
        #prenext {
          text-decoration: none;
          display: inline-block;
          padding: 8px 16px;
        }
        a:hover {
          background-color: #ddd;
          color: black;
        }
        .previous {
          background-color: #f1f1f1;
          color: black;
        }
        .next {
          background-color: #04AA6D;
          color: white;
        }
        .round {
          border-radius: 50%;
        }
    </style>
</head>
<body>
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
    
    <?php
        @$id=htmlspecialchars($_GET["id"]); 
        $sonuc=$yazansis->yazargetir($db,$id);
        $sonuc2=$yazansis->yazkitap($db,$id);
    ?>

    <div class="col-md-12">
        <h2 class="text-danger text-center bg-warning bg-opacity-50">Yazar Hakk??nda</h2>
        <div class="row">
            <div class="col-md-3 bg-info bg-opacity-10">
                <?php
                    while ($dizi = $sonuc->FETCH_ASSOC()):
                        echo '<div class="card m-2">
                            <img src="'.$dizi["resim"].'" class="card-img-top rounded-circle mt-2">
                            <div class="card-body">
                                <h5 class="card-title text-dark">'.$dizi["yazarad"].'</h5>
                                <p class="card-text text-secondary">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <br>
                            </div>
                        </div>';
                    endwhile;
                ?>
            </div>
            <div class="col-md-9 bg-light">
                <div class="row">
                    <?php
                       while ($dizi2 = $sonuc2->FETCH_ASSOC()):
                            echo '<div class="card mt-2 mb-2">
                                <img src="'.$dizi2["resim"].'" style="width:100%" class="mt-2">
                                <h1>'.$dizi2["ad"].'</h1>
                                <p class="price">'.$dizi2["fiyat"].'<b> TL</b></p>
                                <p><a class="btn btn-primary" href="kitapincele.php?id='.$dizi2["id"].'" role="button">Kitab?? ??ncele</a></p>
                            </div>';
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center p-3 fixed-bottom" style="background-color: rgba(0, 0, 0, 0.2);">
        ?? 2023 Copyright:
        <a class="text-dark" href="#!">CanEvim Yay??nc??l??k ve Da????t??m</a> T??m Haklar?? Sakl??d??r.
    </div>

</body>
</html>  