<?php
session_start();
require('php/connection.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout || Aahar Food Delivery Html5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/icon.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">

    <!-- Cusom css -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- <div class="fakeloader"></div> -->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Start Header Area -->
        <header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo/foody.png" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="drop"><a href="index.php">Home</a>
                                            <!--   <ul class="dropdown__menu">
                                                <li><a href="index.html">Home Food Delivery</a></li>
                                                <li><a href="index-2.html">Home Pizza Delivery</a></li>
                                                <li><a href="index-3.html">Home Backery Delivery</a></li>
                                                <li><a href="index-4.html">Home Box Layout</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                                <div class="log__in">
                                    <a class="" href="reg/loginfrm.php">
                                        <div class="inktext">
                                            <h5><?php
                                                if (isset($_SESSION['sess'])) {
                                                    echo "Hello," . $_SESSION['sess'];
                                                } else {
                                                    echo "Login";
                                                }
                                                ?></h5> <!-- login status/User Status-->
                                        </div>
                                    </a>
                                </div>

                                <div class="shopping__cart">
                                    <a href="cart.php"><i class="zmdi zmdi-shopping-basket"></i></a>
                                </div>
                                <ul class="dropdown__menu">
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Checkout</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.html">Home</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                    <span class="breadcrumb-item active">Checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <section class="htc__checkout bg--white section-padding--lg">
            <!-- Checkout Section Start-->
            <div class="checkout-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-30">

                            <!-- Checkout Accordion Start -->
                            <div id="checkout-accordion">
                                <label>Delivery Type :</label><br>
                                <form action="php/order.php" method="post">
                                    <input type="radio" id="drivethru" name="dtype" value="dt" required>
                                    <label for="drivethru">Drive-Thru</label><br>
                                    <input type="radio" id="homedeliv" name="dtype" value="hd">
                                    <label for="homedeliv">Home Delivery</label><br> <br>
                                    <!-- Billing Method -->
                                    <div class="single-accordion">
                                        <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-method">1.Address (only for Home Delivery)</a>
                                        <div id="billing-method" class="collapse">

                                            <div class="accordion-body billing-method fix">


                                                <div class="row">

                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input type="text" name="fname" placeholder="First Name"required>
                                                    </div>
                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input type="text" name="lname" placeholder="Last Name"required>
                                                    </div>
                                                    <div class="col-12 mb--20">
                                                        <input type="text" name="hname" placeholder="House Name"required>
                                                    </div>
                                                    <div class="col-12 mb--20">
                                                        <input placeholder="Street address" name="stadd" type="text"required>
                                                    </div>
                                                    <div class="col-12 mb--20">
                                                        <input placeholder="Apartment, suite, unit etc. (optional)" name="aptno"type="text"required>
                                                    </div>
                                                    <div class="col-12 mb--20">
                                                        <input placeholder="Town / City"name="town" type="text"required>
                                                    </div>
                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input placeholder="Postcode / Zip" name="zip"type="text"required>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <input type="email" name="email"placeholder="Email Address"required>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <input placeholder="Phone Number" name="phno"type="text" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Payment Method -->
                                    <div class="single-accordion">
                                        <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#payment-method">4. Payment method</a>
                                        <div id="payment-method" class="collapse">
                                            <div class="accordion-body payment-method fix">
                                                <div class="row">
                                                    <div class="input-box col-12 mb--20">
                                                        <label for="card-name">Name on Card *</label>
                                                        <input type="text" name="noc"id="card-name" required/>
                                                    </div>
                                                    <div class="input-box col-12 mb--20">
                                                        <label>Credit Card Type</label>
                                                        <select name="cardtype" required>
                                                            <option value="visa">VISA/MasterCard</option>
                                                            <option value="other">Other Debit/Credit Card</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-box col-12 mb--20">
                                                        <label for="card-number">Card Number *</label>
                                                        <input type="text" name="cardno" id="card-number" required/>
                                                    </div>
                                                    <div class="input-box col-12">
                                                        <div class="row">
                                                            <div class="input-box col-12">
                                                                <label>Expiration Date</label>
                                                            </div>
                                                            <div class="input-box col-md-6 col-12 mb--20">
                                                                <select name="expmonth" required>
                                                                    <option value="jan">Jan</option>
                                                                    <option value="feb">Feb</option>
                                                                    <option value="mar">Mar</option>
                                                                    <option value="april">Apr</option>
                                                                    <option value="may">May</option>
                                                                    <option value="june">Jun</option>
                                                                    <option value="july">Jul</option>
                                                                    <option value="aug">Aug</option>
                                                                    <option value="sep">Sep</option>
                                                                    <option value="oct">Oct</option>
                                                                    <option value="nov">Nov</option>
                                                                    <option value="dec">Dec</option>
                                                                </select>
                                                            </div>
                                                            <div class="input-box col-md-6 col-12 mb--20">
                                                                <select name="expyear">
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2025">2025</option>
                                                                    <option value="2026">2026</option>
                                                                    <option value="2027">2027</option>
                                                                    <option value="2028">2028</option>
                                                                    <option value="2029">2029</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-box col-12">
                                                        <label for="card-Verify">Card Verification Number *</label>
                                                        <input type="text" name="cvv" id="card-Verify" />
                                                        <p style="color:red"><br>For security reasons we only accept E-payments.</p>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                            </div><!-- Checkout Accordion Start -->
                        </div>

                        <!-- Order Details -->
                        <div class="col-lg-6 col-12 mb-30">

                            <div class="order-details-wrapper">
                                <h2>your order</h2>
                                <div class="order-details">

                                    <ul>
                                        <li>
                                            <p class="strong">product</p>
                                            <p class="strong">total</p>
                                        </li>
                                        <?php
                                        $records = mysqli_query($conn, "SELECT * FROM cart");
                                        while ($records1 = mysqli_fetch_assoc($records)) {
                                            echo '<li>' . '<p>' . $records1["name"] . '</p>' . '<p>' . '₹' . $records1['price'] + '13' . '</p>';
                                        }
                                        ?> <li>
                                            <p class="strong">order total</p>
                                            <p class="strong"><?php echo  '₹' . $_SESSION['subtotal']; ?></p>
                                        </li>
                                        <li><button class="food__btn" type="submit" name="order">place order</button></li>
                                    </ul>
                                    </form> <!-- form end -->
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div><!-- Checkout Section End-->
        </section>
        <!-- Start Footer Area -->
        <footer class="footer__area footer--1">
            <div class="footer__wrapper bg__cat--1 section-padding--lg">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="footer">
                                <h2 class="ftr__title">About Aahar</h2>
                                <div class="footer__inner">
                                    <div class="ftr__details">
                                        <p>Lorem ipsum dolor sit amconsectetur adipisicing elit,</p>
                                        <div class="ftr__address__inner">
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-home"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p>Elizabeth Tower. 6th Floor Medtown, New York</p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-phone"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">+088 01673-453290</a></p>
                                                    <p><a href="#">+088 01773-458290</a></p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">Aahardelivery@email.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="social__icon">
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 sm--mt--40">
                            <div class="footer gallery">
                                <h2 class="ftr__title">Our Gallery</h2>
                                <div class="footer__inner">
                                    <ul class="sm__gallery__list">
                                        <li><a href="#"><img src="images/gallery/sm-img/1.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/2.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/3.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/4.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/5.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/6.jpg" alt="gallery images"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Opening Time</h2>
                                <div class="footer__inner">
                                    <ul class="opening__time__list">
                                        <li>Saturday<span>.......</span>9am to 11pm</li>
                                        <li>Sunday<span>.......</span>9am to 11pm</li>
                                        <li>Monday<span>.......</span>9am to 11pm</li>
                                        <li>Tuesday<span>.......</span>9am to 11pm</li>
                                        <li>Wednesday<span>.......</span>9am to 11pm</li>
                                        <li>Thursday<span>.......</span>9am to 11pm</li>
                                        <li>Friday<span>.......</span>9am to 11pm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Latest Post</h2>
                                <div class="footer__inner">
                                    <div class="lst__post__list">
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="images/blog/sm-img/1.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Chicken Shawarma </a></h6>
                                                <p>Lordo loram consecte turadip isicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="images/blog/sm-img/2.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Fruits Desert</a></h6>
                                                <p>Lordo loramcon secte turadipi sicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="images/blog/sm-img/3.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Vanilla Pastry</a></h6>
                                                <p>Lordo loramcon secte turadip isicing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                    </div>
                </div>
            </div>
            <div class="copyright bg--theme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="copyright__inner">
                                <div class="cpy__right--left">
                                    <p>@All Right Reserved.<a href="https://devitems.com">Devitems</a></p>
                                </div>
                                <div class="cpy__right--right">
                                    <a href="#">
                                        <img src="images/icon/shape/2.png" alt="payment images">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        <!-- Login Form -->
        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
                    </li>
                    <li>
                        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">

                        <div class="single-input">
                            <input class="cr-round--lg" type="text" placeholder="User name or email">
                        </div>
                        <div class="single-input">
                            <input class="cr-round--lg" type="password" placeholder="Password">
                        </div>
                        <div class="single-input">
                            <button type="submit" class="food__btn"><span>Go</span></button>
                        </div>
                        <div class="accountbox-login__others">
                            <h6>Or login with</h6>
                            <div class="social-icons">
                                <ul>
                                    <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                        <div class="single-input">
                            <input class="cr-round--lg" type="text" placeholder="User name">
                        </div>
                        <div class="single-input">
                            <input class="cr-round--lg" type="email" placeholder="Email address">
                        </div>
                        <div class="single-input">
                            <input class="cr-round--lg" type="password" placeholder="Password">
                        </div>
                        <div class="single-input">
                            <input class="cr-round--lg" type="password" placeholder="Confirm password">
                        </div>
                        <div class="single-input">
                            <button type="submit" class="food__btn"><span>Sign Up</span></button>
                        </div>

                    </div>
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form -->
        <!-- Cartbox -->
        <div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
                <div class="cartbox__inner text-left">
                    <div class="cartbox__items">
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/1.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Vanila Muffin</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$15</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/2.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Wheat Bread</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$25</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/3.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Mixed Fruits Pie</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$30</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                    </div>
                    <div class="cartbox__total">
                        <ul>
                            <li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
                            <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$05</span></li>
                            <li class="grandtotal">Total<span class="price">$75</span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        <a class="food__btn" href="cart.html"><span>View cart</span></a>
                        <a class="food__btn" href="checkout.html"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div><!-- //Cartbox -->
    </div><!-- //Main wrapper -->

    <!-- JS Files -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>
</body>

</html>