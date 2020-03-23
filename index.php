<!DOCTYPE html>
<html lang="ar" ng-app="myApp">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BURGAN</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="CSS/all.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/animate.css">
    <link rel="stylesheet" href="CSS/style.css">
    <script defer src="js/all.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.7.2/angular-route.min.js"></script>
</head>
<body class="diraction">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#!/"><img src="images/logo.png" alt="logo"></a>
            <button class="navbar-toggler outline" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <input type="checkbox" id="check-nav2">
                <div id="toggle-icon2">
                    <label for="check-nav2">
                        <div>
                        </div>
                    </label>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link lang" href="#!/">الرئيسية</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link lang" href="#!/portfolio">سابقة اعمالنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" href="#!/" onclick="scrl('home-sec3')">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" href="#!/submit">انشر وحدتك</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" href="#!/" onclick="scrl('home-sec5')">اتصل بنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" href="English/index.php">
                        <span>English</span>
                        <i class="fas fa-globe"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div ng-view>
        </div>
    </main>
    <footer>
        <div class="row">
            <div class="col-12 col-md-6 col-xl-3">
                <a href="#!/" id="logo" onclick="scrl2()"><img src="images/logo.png" alt="logo" height="100"></a>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <ul>
                    <li><a href="#!/" class="lang" onclick="scrl2()">الرئيسية</a></li>
                    <li><a href="#!/portfolio" class="lang" onclick="scrl2()">سابقة اعمالنا</a></li>
                    <li><a class="lang" href="#!/" onclick="scrl('home-sec3')">من نحن</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <ul>
                    <li><a href="#!/submit" class="lang" onclick="scrl2()">انشر وحدتك</a></li>
                    <li><a class="lang" href="#!/" onclick="scrl('home-sec5')">اتصل بنا</a></li>
                    <li><a href="English/index.php" class="lang">
                    <span>English</span>
                    <i class="fas fa-globe"></i>
                    </a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <ul>
                    <li>
                        <span id="address" class="lang">العنوان :</span>
                        <p class="lang">حدائق الأهرام _ 148ك _البوابة الثانية القديمة خفرع _ الدور الثاني</p>
                    </li>
                    <li id="icons">
                        <a href="https://www.facebook.com/burgan.dvl/"><i class="fab fa-facebook"></i></i></a>
                        <a href="https://www.messenger.com/t/burgan.dvl"><i class="fab fa-facebook-messenger"></i></a>
                        <a href="#" id="a-whats"><i class="fab fa-whatsapp"></i></a>
                        <div class="div-whats div-whatsar">
                            <a href="https://api.whatsapp.com/send?phone=+201020203477">01020203477</a>
                        </div>
                    </li>
                    <li class="lang">
                        <i class="fas fa-phone"></i>
                        <span>01020203477</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" id="div-rights">
            <p id="rights">Burgan real estate © 2020 All rights reserved . Designed & developed by <a href="https://www.facebook.com/MS.Web.Development/">MS Web Development</a></p>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/script.js"></script>
</body>
</html>