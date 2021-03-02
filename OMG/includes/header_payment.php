<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" tyle="text/css" href="./assets/css/custom.css">
    <link rel="stylesheet" tyle="text/css" href="./assets/css/custom-pro_category.css">
    <link rel="stylesheet" tyle="text/css" href="./assets/css/footer.css">
    <title>omg
    </title>
</head>
<style>
    .placeordernav li a {
        letter-spacing: .5px !important;
        color: black;
        font-weight: 600;
        font-size: 16px;
    }

    .brandlogo {
        height: 100px;
        width: 100px;
    }

    .header {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        z-index: 999;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .2);
    }
    /*modal payment successful*/
.modal-message.modal-success .modal-header {
    color: #53a93f;
    border-bottom: 3px solid #a0d468;
}
.modal-message.modal-backdrop.in {
    zoom: 1;
    filter: alpha(opacity=75);
    -webkit-opacity: .75;
    -moz-opacity: .75;
    opacity: .75;
}
.modal-message.modal-backdrop {
    background-color: #fff;
}
.modal-message .modal-content {
    -webkit-border-radius: 0;
    -webkit-background-clip: padding-box;
    -moz-border-radius: 0;
    -moz-background-clip: padding;
    border-radius: 6px;
    background-clip: padding-box;
    -webkit-box-shadow: 0 0 40px rgba(0,0,0,.5);
    -moz-box-shadow: 0 0 40px rgba(0,0,0,.5);
    box-shadow: 0 0 40px rgba(0,0,0,.5);
    color: #000;
    background-color: #fff;
    border: rgba(0,0,0,0);
}
.modal-message .modal-dialog {
    width: 300px;
}
.modal-message .modal-body, .modal-message .modal-footer, .modal-message .modal-header, .modal-message .modal-title {
    background: 0 0;
    border: none;
    margin: 0;
    padding: 0 20px;
    text-align: center!important;
}

.modal-message .modal-title {
    font-size: 17px;
    color: #737373;
    margin-bottom: 3px;
}

.modal-message .modal-body {
    color: #737373;
}

.modal-message .modal-header {
    color: #fff;
    margin-bottom: 10px;
    padding: 15px 0 8px;
}
.modal-message .modal-header .fa {
    font-size: 30px;
    margin-left:135px;
}

.modal-message .modal-footer {
    margin: 25px 90px 20px;
    padding-bottom: 10px;

}
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #ffffff; box-shadow: rgba(0,0,0,0.4) 0 2px 5px 0;">
            <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa fa-bars" style="font-size: 24px;"></span>
                </button>
                <a class="navbar-brand brandlogo" href="./index.php"><img src="./assets/images/logo_e.png" class="brandlogo"></a>
                
                <i class="fa fa-shopping-cart d-block d-md-none d-lg-none" aria-hidden="true"  data-toggle="modal" data-target="#modal_aside_left" style="font-size: 24px;"></i>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav placeordernav ml-auto mr-lg-3 mt-0 mb-0">
                        <li class="nav-item active"> <a class="nav-link" href="./index.php">HOME </a> </li>
                        <li class="nav-item"><a class="nav-link" href="#"> CHECKOUT </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> LOGOUT </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>