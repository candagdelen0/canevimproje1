<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fonksiyonlar/bootstrap.min.css">
    <link rel="stylesheet" href="Fonksiyonlar/bootstrap.bundle.min.js">   
    <link rel="stylesheet" href="Fonksiyonlar/jquery-3.6.2.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <style>
        #logo {
            text-decoration: none;
            color: black;
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
    <title>İletişim</title>
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
                <div class="col-md-9 mt-3 mb-3 text-center">
                    <a href="index.php" id="logo"><button class="btnnn"><i class="fa fa-home"></i> CanEvim Kitabevi</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 p-4">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input -->
                    <div class="mb-3">
                      <label class="form-label" for="name">Name</label>
                      <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                      <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                    </div>
                    <!-- Email address input -->
                    <div class="mb-3">
                      <label class="form-label" for="emailAddress">Email Address</label>
                      <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
                      <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                      <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                    </div>
                    <!-- Message input -->
                    <div class="mb-3">
                      <label class="form-label" for="message">Message</label>
                      <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                      <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                    </div>
                    <!-- Form submissions success message -->
                    <div class="d-none" id="submitSuccessMessage">
                      <div class="text-center mb-3">Form submission successful!</div>
                    </div>
                    <!-- Form submissions error message -->
                    <div class="d-none" id="submitErrorMessage">
                      <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Form submit button -->
                    <div class="d-grid">
                      <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <footer class="fixed-bottom">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a id="logo" href="index.php">CanEvim Yayıncılık ve Dağıtım</a> Tüm Hakları Saklıdır.
        </div>
    </footer>

</body>
</html>



