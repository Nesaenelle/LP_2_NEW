<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exchange2.net</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,900" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
</head>

<body>
    <header>
            <a href="index.php" class="logo""><img src="img/logo.svg"></a>
         
            <ul class="header-menu center">
                <li class="header-menu-item"><a href="index.php#2">about</a></li>
                <li class="header-menu-item"><a href="index.php#3">skills</a></li>
                <li class="header-menu-item"><a href="index.php#4">roadmap</a></li>
                <li class="header-menu-item highlighted"><a href="index.php#5">create platform</a></li>
                <li class="header-menu-item"><a href="index.php#6">team</a></li>
                <li class="header-menu-item"><a href="http://blog.exchange2.net/" target="_blank">blog</a></li>
                <li class="header-menu-item"><a href="index.php#7">contact</a></li>
            </ul>
            <ul class="header-menu right">
                <li class="header-menu-item">
                    <a href="login.html" class="js-popup">log in</a>
                </li>
                <li class="header-menu-item active">
                    <a href="signup.html" class="js-popup">sign up</a>
                </li>
            </ul>
            
            <div class="burger" data-menu>
                <span class="burger__line"></span>
                <span class="burger__line"></span>
                <span class="burger__line"></span>
            </div>

            <div class="dropdown-menu" data-menu-dropdown>
                <div class="dropdown-menu__close" data-menu-dropdown-close></div>
                <ul class="header-menu">
                    <li class="header-menu-item"><a href="index.php#2">about</a></li>
                    <li class="header-menu-item"><a href="index.php#3">skills</a></li>
                    <li class="header-menu-item"><a href="index.php#4">roadmap</a></li>
                    <li class="header-menu-item highlighted"><a href="index.php5">create platform</a></li>
                    <li class="header-menu-item"><a href="index.php#6">team</a></li>
                    <li class="header-menu-item"><a href="http://blog.exchange2.net/" target="_blank">blog</a></li>
                    <li class="header-menu-item"><a href="index.php#7">contact</a></li>
                </ul>
                <ul class="header-menu">
                    <li class="header-menu-item">
                        <a href="login.html" class="js-popup">log in</a>
                    </li>
                    <li class="header-menu-item active">
                        <a href="signup.html" class="js-popup">sign up</a>
                    </li>
                </ul>
            </div>
    </header>

    <main>
    <div class="signup-section">          
        <div class="form-block">                    
            <div class="form-block__bg" style="background: url(img/sign-up.jpeg)"><span class="form-block__bg_text">SIGN <br>UP</span></div>
            <form action="" class="form" id="signup-form" novalidate="">
                <ul class="form-block__tabs">
                    <li><a href="login.html">log in</a></li>
                    <li  class="active"><a href="signup.html">sign up</a></li>
                </ul>
                <input type="email" class="input" placeholder="Email" required data-pattern="email" name="email" data-error-msg="Email is invalid">
                <input type="password" class="input" placeholder="Password" required data-pattern="password" name="password"  data-error-msg="Password is invalid (Minimum 7 characters)">
                <input type="password" class="input" placeholder="Password Again" required data-pass-confirm="true" data-error-msg="Confirm password is wrong">
                <button class="btn">Sign up</button>
            </form>
        </div>
    </div>
    </main>
    <footer class="footer">
        <div class="footer-socials">
            <a href="" target="_blank"><img src="img/facebook.svg" alt=""></a>
            <a href="" target="_blank"><img src="img/twitter.svg" alt=""></a>
            <a href="" target="_blank"><img src="img/telegram.svg" alt=""></a>
        </div>

        <div class="copyright">© Exchange2.net 2018</div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- <script src="js/jquery.easeScroll.js"></script> -->
    <script src="js/slick.min.js"></script>
    <script src="js/core.js"></script>
    <script src="js/all.js"></script>
</body>

</html>