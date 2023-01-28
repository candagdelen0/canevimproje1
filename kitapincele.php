<?php session_start();
include("fonksiyon.php");
$kitabim = new sistem;
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CanEvim Kitabevi</title>
	<style>
		#buton {
			border-color: #ff9800;
			background: orange;
			width: 250px;
			height: 40px;
		}
		#buton:hover {
			background: #ff9800;
  			color: white;
			background: red;
		}
		#artı, #eksi {
			background-color: orange;
		}
		#artı:hover, #eksi:hover {
			background: #ff9800;
  			color: white;
		}
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
	
</body>
	<header>
        <div class="row border-secondary border-bottom bg-warning">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 mt-3 mb-3 d-flex flex-wrap align-items-center justify-content-center justify-content-md-start border-end border-dark">
                        <a href="#" class="d-flex align-items-center mb-2 mb-md-0 text-dark text-decoration-none">CE
                            <svg class="" width="40" height="32"></svg>
                        </a>
                    </div> 
                    <div class="col-md-9 border-end border-dark mt-3 mb-3 text-center">
						<a href="index.php" class="text-dark"><button class="btnnn"><i class="fa fa-home"></i> CanEvim Kitabevi</button></a>
					</div>
                </div>
            </div>
        </div>
	</header>

	<?php
		@$id=htmlspecialchars($_GET["id"]);
    	$son=$kitabim->kitapincele($db,$id);
    	$dizi = $son->FETCH_ASSOC();

    	$son2=$kitabim->yazarcek($db,$id);
    	$dizi2 = $son2->FETCH_ASSOC();
	?>
	<div class="container">
		<div class="col-md-12 bg-warning bg-opacity-50">
			<div class="row m-2 first">
				<div class="col-md-4">
					<div class="m-2 p-2 card border-dark">
						<img src="<?php echo $dizi["resim"]; ?>" class="card-img-top" class="p-3">
					</div>
				</div>
				<div class="col-md-8">
					<div class="m-2 card bg-warning bg-opacity-75">
						<h3 class="text-center p-2"><?php echo $dizi["ad"]; ?></h3>
						
						<?php 

							if ($dizi["yazarid"] == $dizi2["id"]):
							echo '<a href="#" class="text-start text-dark m-2">
								<strong> '.$dizi2["yazarad"].' </strong>
							</a>';
							else:
							echo "Hata var!";
							endif;
						?>
						<div class="m-1">
							<?php echo $dizi["aciklama"]; ?>
						</div>
						<div class="m-1">
							<?php echo $dizi["aciklama"]; ?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6 btn-group">
								<span class="border border-dark rounded bg-warning m-1 p-1">Ürün Fiyatı: <em> <?php echo $dizi["fiyat"]; ?>  TL</em></span>
							</div>
							<div class="col-md-6 btn-group">
								<button class="border-secondary rounded m-1" id="artı"> + </button>
								<span class=" border border-secondary p-2 text-center rounded m-1 bg-warning"> 1 </span>
								<button class="border-secondary rounded ps-2 pe-2 m-1" id="eksi"> - </button>
								<a href="#" class="btn rounded m-1" id="buton">Sepete Ekle</a>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
								<div class="btn-group m-1">
									<a href="#" class="btn btn-danger">Favorilerime Ekle</a>
								</div>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<div class="btn-group m-1">
									<a href="#" class="btn btn-danger">Fiyatı Düşünce Haber Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row second">
				<div class=col-md-3></div>
				<div class="col-md-6">
					<div class="yorum">
						<h6 class="text-center text-danger">Yorumlar</h6>
						<div class="border border-2 bg-light p-2 m-1">
							<span>* * *</span>
							<br>
							<span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, atque.</span>
						</div>
						<div class="border border-2 bg-light p-2 m-1">
							<span>* * * * *</span>
							<br>
							<span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, atque.</span>
						</div>
						<div class="border border-2 bg-light p-2 m-1">
							<span>* * * *</span>
							<br>
							<span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, atque.</span>
						</div>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
	
	
	<footer class="bg-secondary text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="#!">CanEvim Yayıncılık ve Dağıtım</a> Tüm Hakları Saklıdır.
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>