<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exchange2.net</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
</head>

<body>
    <header>
            <a href="#home" class="logo" data-navigation-link="1"><img src="img/logo.svg"></a>
         
            <ul class="header-menu center">
                <li class="header-menu-item" data-navigation-link="2"><a href="#2">about</a></li>
                <li class="header-menu-item" data-navigation-link="3"><a href="#3">skills</a></li>
                <li class="header-menu-item" data-navigation-link="4"><a href="#4">roadmap</a></li>
                <li class="header-menu-item highlighted" data-navigation-link="5"><a href="#5">create platform</a></li>
                <li class="header-menu-item" data-navigation-link="6"><a href="#6">team</a></li>
                <li class="header-menu-item"><a href="http://blog.exchange2.net/" target="_blank">blog</a></li>
                <li class="header-menu-item" data-navigation-link="7"><a href="#7">contact</a></li>
            </ul>
            <ul class="header-menu right">
                <li class="header-menu-item">
                    <a href="login.php" class="js-popup">log in</a>
                </li>
                <li class="header-menu-item">
                    <a href="signup.php" class="js-popup">sign up</a>
                </li>
            </ul>
            
            <div class="header-create-platform">
                <a href="#" data-navigation-link="5">Create Trading Platform</a>
            </div>

            <div class="burger" data-menu>
                <span class="burger__line"></span>
                <span class="burger__line"></span>
                <span class="burger__line"></span>
            </div>

            <div class="dropdown-menu" data-menu-dropdown>
                <div class="dropdown-menu__close" data-menu-dropdown-close></div>
                <ul class="header-menu">
                    <li class="header-menu-item" data-navigation-link="2"><a href="#2">about</a></li>
                    <li class="header-menu-item" data-navigation-link="3"><a href="#3">skills</a></li>
                    <li class="header-menu-item" data-navigation-link="4"><a href="#4">roadmap</a></li>
                    <li class="header-menu-item highlighted" data-navigation-link="5"><a href="#5">create platform</a></li>
                    <li class="header-menu-item" data-navigation-link="6"><a href="#6">team</a></li>
                    <li class="header-menu-item"><a href="http://blog.exchange2.net/" target="_blank">blog</a></li>
                    <li class="header-menu-item" data-navigation-link="7"><a href="#7">contact</a></li>
                </ul>
                <ul class="header-menu">
                    <li class="header-menu-item">
                        <a href="login.html" class="js-popup">log in</a>
                    </li>
                    <li class="header-menu-item">
                        <a href="signup.html" class="js-popup">sign up</a>
                    </li>
                </ul>
            </div>
    </header>

    <main class="main">
       
            <section class="main-section">        
                <div class="container">    
                    <div class="main-title">CRYPTO TRADING PLATFORM <br>WHAT YOU NEED!</div>

                    <div class="mobile-currency" data-currency-toggle>All currencies</div>
                    <ul class="currencies-list" data-currency>
                        <li class="mobile-currency__title">All currencies</li>
                        <li class="active" data-currency-item="all">ALL</li>
                        <li data-currency-item="usd">USD</li>
                        <li data-currency-item="eur">EUR</li>
                        <li data-currency-item="btc">BTC</li>
                        <li data-currency-item="ltc">LTC</li>
                        <li data-currency-item="eth">ETH</li>
                        <li data-currency-item="bch">BCH</li>
                        <li data-currency-item="btg">BTG</li>
                        <li data-currency-item="usdt">USDT</li>
                    </ul>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Pair</th>
                                <th>Price</th>
                                <th>Change</th>
                                <th>Bid</th>
                                <th>Ask</th>
                                <th>24h High</th>
                                <th>24h Low</th>
                                <th>24h Volume</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>BTC/EUR</td>
                                <td>5,706.29</td>
                                <td>0,04%</td>
                                <td>5,711.99</td>
                                <td>5,715.00</td>
                                <td>5,673.82</td>
                                <td>5,763.83</td>
                                <td>5,763.83</td>
                            </tr>
                            <tr>
                                <td>BTC/USD</td>
                                <td>5,706.29</td>
                                <td>0,04%</td>
                                <td>5,711.99</td>
                                <td>5,715.00</td>
                                <td>5,673.82</td>
                                <td>5,763.83</td>
                                <td>5,763.83</td>
                            </tr>
                            <tr>
                                <td>EUR/USD</td>
                                <td>5,706.29</td>
                                <td>0,04%</td>
                                <td>5,711.99</td>
                                <td>5,715.00</td>
                                <td>5,673.82</td>
                                <td>5,763.83</td>
                                <td>5,763.83</td>
                            </tr>
                            <tr>
                                <td>ETH/EUR</td>
                                <td>5,706.29</td>
                                <td>0,04%</td>
                                <td>5,711.99</td>
                                <td>5,715.00</td>
                                <td>5,673.82</td>
                                <td>5,763.83</td>
                                <td>5,763.83</td>
                            </tr>
                            <tr>
                                <td>LTC/EUR</td>
                                <td>5,706.29</td>
                                <td>0,04%</td>
                                <td>5,711.99</td>
                                <td>5,715.00</td>
                                <td>5,673.82</td>
                                <td>5,763.83</td>
                                <td>5,763.83</td>
                            </tr>
                            <tr>
                                <td>ETH/USD</td>
                                <td>5,706.29</td>
                                <td>0,04%</td>
                                <td>5,711.99</td>
                                <td>5,715.00</td>
                                <td>5,673.82</td>
                                <td>5,763.83</td>
                                <td>5,763.83</td>
                            </tr>
                            <tr>
                                <td>USDT/USD</td>
                                <td>5,706.29</td>
                                <td>0,04%</td>
                                <td>5,711.99</td>
                                <td>5,715.00</td>
                                <td>5,673.82</td>
                                <td>5,763.83</td>
                                <td>5,763.83</td>
                            </tr>
                            <tr>
                                <td>LTC/BTC</td>
                                <td>5,706.29</td>
                                <td>0,04%</td>
                                <td>5,711.99</td>
                                <td>5,715.00</td>
                                <td>5,673.82</td>
                                <td>5,763.83</td>
                                <td>5,763.83</td>
                            </tr>
                            <tr>
                                <td>LTC/USD</td>
                                <td>5,706.29</td>
                                <td>0,04%</td>
                                <td>5,711.99</td>
                                <td>5,715.00</td>
                                <td>5,673.82</td>
                                <td>5,763.83</td>
                                <td>5,763.83</td>
                            </tr>
                            <tr>
                                <td>ETH/BTC</td>
                                <td>5,706.29</td>
                                <td>0,04%</td>
                                <td>5,711.99</td>
                                <td>5,715.00</td>
                                <td>5,673.82</td>
                                <td>5,763.83</td>
                                <td>5,763.83</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <button class="mobile btn main-btn" data-navigation-link="5">Create Trading Platform</button>

                    <div class="secondary-title">What New on Crypto?</div>
                    <div class="slick-slider">
                        <div class="slick-slider__item">
                            <div class="slick-slider__item_img">
                                <span>CREATE <br>YOUR OWN CRYPTO <br> EXCHANGE PLATFORM</span>
                                <div style="background: url(img/chains.jpg)" class="slick-slider__item_img_bg"></div>
                            </div>
                            <div class="slick-slider__item_text">Everyone can create his own cryptocurrency exchange platform in 30 minutes.</div>
                            <a href="" class="slick-slider__item_link">read</a>
                        </div>
                        <div class="slick-slider__item">
                            <div class="slick-slider__item_img">
                                <span>BITCOIN <br>IS FALLING</span>
                                <div style="background: url(img/chains.jpg)" class="slick-slider__item_img_bg"></div>
                            </div>
                             <div class="slick-slider__item_text">Why bitcoin and other cryptocurrencies are falling. Opinions of representatives of the industry.</div>
                            <a href="" class="slick-slider__item_link">read</a>
                        </div>
                        <div class="slick-slider__item">
                            <div class="slick-slider__item_img">
                                <span>BITCOIN IS FALLING</span>
                                <div style="background: url(img/chains.jpg)" class="slick-slider__item_img_bg"></div>
                            </div>
                             <div class="slick-slider__item_text">Why bitcoin and other cryptocurrencies are falling. Opinions of representatives of the industry.</div>
                            <a href="" class="slick-slider__item_link">read</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-section"  data-swipe id="about">
                <div class="container">   
                    <div class="main-title">WHY WE ARE BETTER THAN <br>ANOTHER 100000+ PLATFORMS? <div class="main-title__shadow" data-paralax="30">ABOUT</div></div>
                    <div class="about-list">                    
                        <div class="about__item active" data-swipe-item="0">
                            <div class="about__item_img">
                                <span>A SUPER SECURITY</span>
                                <div class="about__item_img_bg" style="background: url(img/chains.jpg)"></div>
                            </div>
                            <div class="about__item_text">98% of all funds are stored offline. Our trading platform is a network of secure protected microservices written in Golang.</div>
                        </div>
                        <div class="about__item" data-swipe-item="1">
                            <div class="about__item_img">
                               <span> HIGH PERFORMANCE</span>
                                <div class="about__item_img_bg" style="background: url(img/chains.jpg)"></div>
                            </div>
                            <div class="about__item_text">Each trading pair is a dedicated microservice written in go that is capable to run more than a million transactions per a second. We use in-memory storage to store all operations and our own data storage system to handle fast trading operations.</div>
                        </div>
                        <div class="about__item" data-swipe-item="2">
                            <div class="about__item_img">
                               <span> WHITE <br>LABEL</span>
                                <div class="about__item_img_bg" style="background: url(img/bitcoin.jpeg)"></div>
                            </div>
                            <div class="about__item_text">Everyone can create his own cryptocurrency exchange platform in 30 minutes.</div>
                        </div>

                    </div>
                    <div class="swipe-indicator">
                        <span class="active"></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </section>

            <section class="skills-section" id="skills">
                <div class="container">   
                    <div class="main-title">WE HAVE <br>THE THINGS YOU LOVE <div class="main-title__shadow" data-paralax="30">SKILLS</div></div>
                </div>
                <div class="skills">                    
                    <div class="skills__bg desktop" style="background: url(img/laptop.png)"></div>
                    <div class="skills__content">
                        <div class="skills__title">
                            Fast and Secure!
                        </div>
                        <ul class="skills__list">
                            <li>• rewards and contests</li>
                            <li>• low transaction fees</li>
                            <li>• transparency</li>
                            <li>• 3 layers of data protection</li>
                            <li>• multi language support</li>
                        </ul>
                        <div class="skills__bg mobile" style="background: url(img/laptop.png)"></div>
                        <div>
                            <div class="skills__try-now">
                                <div><b>try now!</b><span>Windows and Mac platforms</span></div>
                            </div>
                            <div class="skills__soon">
                                <div><b>soon!</b><span>iOS and Android platform</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>

            <section class="roadmap-section" id="roadmap">
                <div class="container">   
                    <div class="main-title">THIS IS <br>OUR PLAN <div class="main-title__shadow" data-paralax="30">ROAD</div></div>
                </div>
                <div class="roadmap" data-roadmap data-animate>
                    <div class="roadmap__years">
                        <div class="container">
                            <div class="roadmap__years_item active" data-roadmap-year="1">2018</div>
                            <div class="roadmap__years_item" data-roadmap-year="2">2019</div>
                        </div>
                    </div>
                    <div class="roadmap__timeline" data-roadmap-timeline="1">
                        <div class="container">
                            <div class="roadmap__timeline_item" style="width: 20%">
                                <div class="roadmap__timeline_text">Start of development <br>Exchange #2</div>
                                <div class="roadmap__timeline_month" data-roadmap-month="march-2018">MARCH<div class="roadmap__timeline_month_line"></div></div>
                            </div>
                            <div class="roadmap__timeline_item" style="width: 30%">
                                <div class="roadmap__timeline_text">First introduction to the public Interviewing potential users</div>
                                <div class="roadmap__timeline_month" data-roadmap-month="june-2018">JUNE<div class="roadmap__timeline_month_line"></div></div>
                            </div>
                            <div class="roadmap__timeline_item" style="width: 20%">
                                <div class="roadmap__timeline_text">Beta release of the trading <br>platform with BTH/ETH trading <br>pair</div>
                                <div class="roadmap__timeline_month" data-roadmap-month="september-2018">SEPTEMBER<div class="roadmap__timeline_month_line"></div></div>
                            </div>
                            <div class="roadmap__timeline_item" style="width: 20%">
                                <div class="roadmap__timeline_text">Incorporation in Estonia and getting Virtual Currency Exchange and Wallet Service license</div>
                                <div class="roadmap__timeline_month" data-roadmap-month="october-2018">OCTOBER <div class="roadmap__timeline_month_line"></div></div>
                            </div>
                        </div>
                        <div class="roadmap__timeline_line"></div>
                    </div>

                    <div class="roadmap__timeline" data-roadmap-timeline="2">
                        <div class="container">
                            <div class="roadmap__timeline_item" style="width: 20%">
                                <div class="roadmap__timeline_text">Official launch of exchange <br>and support of FIAT currencies</div>
                                <div class="roadmap__timeline_month" data-roadmap-month="january-2019">JANUARY<div class="roadmap__timeline_month_line"></div></div>
                            </div>
                            <div class="roadmap__timeline_item" style="width: 20%">
                                <div class="roadmap__timeline_text">Launch of mobile <br>wallet service</div>
                                <div class="roadmap__timeline_month" data-roadmap-month="march-2019">MARCH<div class="roadmap__timeline_month_line"></div></div>
                            </div>
                            <div class="roadmap__timeline_item" style="width: 20%">
                                <div class="roadmap__timeline_text">Launch of payment <br> gateway service</div>
                                <div class="roadmap__timeline_month" data-roadmap-month="may-2019">MAY<div class="roadmap__timeline_month_line"></div></div>
                            </div>
                            <div class="roadmap__timeline_item" style="width: 20%">
                                <div class="roadmap__timeline_text">You can now buy a cup of coffee <br> using wallet app  and br NFC <br> on your smartphone</div>
                                <div class="roadmap__timeline_month" data-roadmap-month="july-2019">JULY<div class="roadmap__timeline_month_line"></div></div>
                            </div>
                        </div>
                        <div class="roadmap__timeline_line"></div>
                    </div>
                    <div class="roadmap-indicator"></div>
                </div>
            </section>
            
            <section class="create-platform-section" id="create-platform">
                <div class="create-platform">
                    <div class="create-platform__content">                    
                        <div class="create-platform__title">
                            CREATE <br>
                            YOUR OWN CRYPTO <br>
                            TRADING PLATFORM
                        </div>
                        <div class="create-platform__descr">
                            With less than 30 minutes. Use our ready-made solution to install platform and begin to monetize your traffic.
                        </div>
                        <div class="create-platform__form-title">Become exchange platform owner</div>
                        <form novalidate="" class="form" id="create-platform-form">
                            <input type="email" class="input" placeholder="your email" required data-pattern="email" name="email" data-error-msg="Email is invalid">
                            <button class="btn">Join Now</button>
                        </form>
                    </div>
                    <div class="create-platform__bg" style="background: url(img/contact.jpg)"></div>
                </div>
            </section>

            <section class="team-section" id="team">
                <div class="container">   
                    <div  class="main-title">WE <br>ARE <div class="main-title__shadow" data-paralax="30">TEAM</div></div>
                 </div>
                 <div class="scroller">
                        <div class="scroller__content">
                            <div class="team-banner"></div>
                            <div class="team-list">                    
                                <div class="team-list__item">
                                    <div class="team-list__item_name">Maksym <br>Reznichenko</div>
                                    <div class="team-list__item_position">Development</div>
                                    <div class="team-list__item_socials">
                                        <a href="https://www.facebook.com/1silent.force" target="_blank"><img src="img/facebook.svg" alt=""></a>
                                        <a href="https://www.linkedin.com/in/maksym-reznichenko/" target="_blank"><img src="img/linkedin-logo.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="team-list__item">
                                    <div class="team-list__item_name">Alexandra <br>Anikina</div>
                                    <div class="team-list__item_position">Support</div>
                                    <div class="team-list__item_socials">
                                        <a href="https://www.facebook.com/profile.php?id=100012862635911" target="_blank"><img src="img/facebook.svg" alt=""></a>
                                        <a href="https://www.linkedin.com/in/alexanikina/" target="_blank"><img src="img/linkedin-logo.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="team-list__item">
                                    <div class="team-list__item_name">Ruslan <br>Vaschenko</div>
                                    <div class="team-list__item_position">ArtDirection</div>
                                    <div class="team-list__item_socials">
                                        <a href="https://www.facebook.com/ruslan.vaschenko.92" target="_blank"><img src="img/facebook.svg" alt=""></a>
                                        <a href="https://www.linkedin.com/in/waschee/" target="_blank"><img src="img/linkedin-logo.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="team-list__item">
                                    <div class="team-list__item_name">Evgeniy <br>Kolvah</div>
                                    <div class="team-list__item_position">Marketing</div>
                                    <div class="team-list__item_socials">
                                        <a href="https://www.facebook.com/kolvah.e" target="_blank"><img src="img/facebook.svg" alt=""></a>
                                        <a href="https://www.linkedin.com/in/yevhen-kolvakh/" target="_blank"><img src="img/linkedin-logo.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="team-list__item">
                                    <div class="team-list__item_name">Valeriy <br>Vlasyuk</div>
                                    <div class="team-list__item_position">Founder</div>
                                    <div class="team-list__item_socials">
                                        <a href="https://www.facebook.com/valera.vlasyuk.3" target="_blank"><img src="img/facebook.svg" alt=""></a>
                                        <a href="https://www.linkedin.com/in/valeravlasyuk/" target="_blank"><img src="img/linkedin-logo.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="team-indicator"></div>
            </section>

            <section class="contacts-section" id="contact">          
                <div class="container">     
                    <div class="main-title">CONTACT <br>WITH US <div class="main-title__shadow" data-paralax="30">HELLO</div></div>
                </div>
                <div class="form-block">                    
                    <div class="form-block__bg" style="background: url(img/contact.jpeg)"></div>
                    <form class="form" id="contact-form" novalidate="">
                        <input type="text" class="input" placeholder="Name" required data-pattern="login" name="login" data-error-msg="Name is invalid">
                        <input type="email" class="input" placeholder="Email" required data-pattern="email" name="email" data-error-msg="Email is invalid">
                        <textarea class="textarea" placeholder="Comments" name="comment" required data-error-msg="Should be filled in"></textarea>
                        <button class="btn">Send</button>
                    </form>
                </div>
            </section>
    </main>

    <footer class="footer">
        <div class="footer-socials">
            <a href="" target="_blank"><img src="img/facebook.svg" alt=""></a>
            <a href="" target="_blank"><img src="img/twitter.svg" alt=""></a>
            <a href="" target="_blank"><img src="img/telegram.svg" alt=""></a>
        </div>
        <div class="scroll-down">
            <img src="img/noun_Mouse_744299.svg" alt="">
        </div>
        <div class="copyright">© Exchange2.net 2018</div>
        <div class="footer-form active">
            <div class="footer-form__text">Become <br>
                exchange platform <br>
                owner
            </div>
            <form class="form" id="footer-create-platform-form" novalidate="">
                <input type="email" class="input" data-pattern="email" name="email" placeholder="Email" data-error-msg="Email is invalid" required>
            </form>
            <div class="create-trading-btn">Create Trading Platform</div>
            <div class="submit-create-trading-form">JOIN NOW</div>
        </div>

    </footer>
   
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.onepage-scroll.js"></script>
    <!-- <script src="js/jquery.onepage-scroll.min.js"></script> -->
    <script src="js/core.js"></script>
    <script src="js/all.js"></script>
</body>

</html>