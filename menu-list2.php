<?php 
session_start();
require('php/connection.php');
$query = 'select name,price from drinks';
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Menu-List || Drinks</title>
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
   <link rel="stylesheet" href="cstyle.css">

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
                                          if(isset($_SESSION['sess'])){
                                          echo"Hello,".$_SESSION['sess'];
                                          }
                                          else{
                                              echo "Login";
                                          }
                                          ?></h5> <!-- login status/User Status-->
                                        </div>
                                        </a>
                                </div> 

                                <div class="shopping__cart">
                                    <a  href="cart.php"><i class="zmdi zmdi-shopping-basket"></i></a>
                                
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
        <div class="">
            <div class="ht__bradcaump__wrap d-flex align-items-center inkimc">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title" style="color:#000000;">menu List</h2>
                                <!-- <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" style="color: white;"href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active"style="color: white;">menu List view</span>
                                </nav> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Menu Grid Area -->
        <section class="food__menu__grid__area section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="">
                        <h2 style="color: black;">Currently Preparing<img src="images/icons/online.gif" height="60" width="120"></h2>
                        <!-- <div class="food__nav nav nav-tabs" role="tablist">
                            <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">All</a>
                            <a id="nav-breakfast-tab" data-toggle="tab" href="#nav-breakfast" role="tab">Breakfast</a>
                            <a id="nav-lunch-tab" data-toggle="tab" href="#nav-lunch" role="tab">Lunch</a>
                            <a id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab">Dinner</a>
                            <a id="nav-coffee-tab" data-toggle="tab" href="#nav-coffee" role="tab">Coffee</a>
                            <a id="nav-snacks-tab" data-toggle="tab" href="#nav-snacks" role="tab">Snacks</a>
                        </div> -->
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-lg-12">
                        <div class="fd__tab__content tab-content" id="nav-tabContent">
                            <!-- Start Single Content -->
                            <div class="food__list__tab__content tab-pane fade show active" id="nav-all" role="tabpanel">
                                <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="menu-details.html">
                                            <img src="images/menu-list/1.jpg" alt="list food images">
                                        </a>
                                    </div>
                                    <?php
                                $query = 'select name,price from drinks where id = 200';
                                $result = mysqli_query($conn,$query);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                ?>
                                    <div class="food__list__inner d-flex align-items-center justify-content-between">
                                        <div class="food__list__details">
                                            <h2><?php 
                                        echo$row['name'];
                                        ?></h2>
                                            <p>Chocolate shake is a cold drink made of milk, a sweet flavouring such as chocolate and typically ice cream, whisked until it is frothy”. It is an Americanism that dates back to the 1880s, when the beverage was initially made with whisky and known as a “sturdy, healthful” drink</p>
                                            <div class="list__btn">
                                            <form action="php/bcart.php" method="post">
                                               <button type="submit" name="cshake" class="food__btn grey--btn theme--hover"onClick="add();">Order Now</button>
                                              
                                            </form> 
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span>₹30</span>
                                            </div>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php
                                $query = 'select name,price from drinks where id = 201';
                                $result = mysqli_query($conn,$query);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                ?>
                                <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="menu-details.html">
                                            <img src="images/menu-list/2.jpg" alt="list food images">
                                        </a>
                                    </div>
                                    <div class="food__list__inner d-flex align-items-center justify-content-between">
                                        <div class="food__list__details">
                                        <h2><?php 
                                        echo$row['name'];
                                        ?></h2>
                                            <p>Lassi is a popular traditional dahi-based drink that originated in the Indian Subcontinent. Lassi is a blend of yogurt, water, spices and sometimes fruit. Namkeen lassi is similar to doogh, while sweet and mango lassis are like milkshakes.</p>
                                            <div class="list__btn">
                                            <form action="php/bcart.php" method="post">
                                               <button type="submit" name="lassi" class="food__btn grey--btn theme--hover"onClick="add();">Order Now</button>
                                              
                                            </form> 
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span>₹<?php 
                                        echo$row['price'];
                                        ?></span>
                                            </div>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php
                                $query = 'select name,price from drinks where id = 202';
                                $result = mysqli_query($conn,$query);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                ?>
                                <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="menu-details.html">
                                            <img src="images/menu-list/3.jpg" alt="list food images">
                                        </a>
                                    </div>
                                    <div class="food__list__inner d-flex align-items-center justify-content-between">
                                        <div class="food__list__details">
                                        <h2><?php 
                                        echo$row['name'];
                                        ?></h2>
                                            <p>Lassi is a popular traditional dahi-based drink that originated in the Indian Subcontinent. Lassi is a blend of yogurt, water, spices and sometimes fruit.In this case the fruit used is freshly peeled bananas.</p>
                                            <div class="list__btn">
                                            <form action="php/bcart.php" method="post">
                                               <button type="submit" name="blassi" class="food__btn grey--btn theme--hover"onClick="add();">Order Now</button>
                                              
                                            </form> 
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span>₹<?php 
                                        echo$row['price'];
                                        ?></span>
                                            </div>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php
                                $query = 'select name,price from drinks where id = 203';
                                $result = mysqli_query($conn,$query);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                ?>
                                <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="menu-details.html">
                                            <img src="images/menu-list/4.jpg" alt="list food images">
                                        </a>
                                    </div>
                                    <div class="food__list__inner d-flex align-items-center justify-content-between">
                                        <div class="food__list__details">
                                        <h2><?php 
                                        echo$row['name'];
                                        ?></h2>
                                            <p>It is a drink containing corn syrup,red crystal sprinkles and pineapple sherbet.It is named after the famous japanese flower.</p>
                                            <div class="list__btn">
                                            <form action="php/bcart.php" method="post">
                                               <button type="submit" name="cblo" class="food__btn grey--btn theme--hover"onClick="add();">Order Now</button>
                                              
                                            </form> 
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span>₹<?php 
                                        echo$row['price'];
                                        ?></span>
                                            </div>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php
                                $query = 'select name,price from drinks where id = 204';
                                $result = mysqli_query($conn,$query);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                ?>
                                <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="menu-details.html">
                                            <img src="images/menu-list/5.jpg" alt="list food images">
                                        </a>
                                    </div>
                                    <div class="food__list__inner d-flex align-items-center justify-content-between">
                                        <div class="food__list__details">
                                        <h2><?php 
                                        echo$row['name'];
                                        ?></h2>
                                            <p>Blue Lagoon is a cocktail featuring blue Curaçao mixed with vodka and lemonade. It is typically garnished with an orange slice or a lemon slice. Blue Lagoon is typically served in a highball glass. </p>
                                            <div class="list__btn">
                                            <form action="php/bcart.php" method="post">
                                               <button type="submit" name="bluel" class="food__btn grey--btn theme--hover"onClick="add();">Order Now</button>
                                              
                                            </form> 
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span>₹<?php 
                                        echo$row['price'];
                                        ?></span>
                                            </div>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php
                                $query = 'select name,price from drinks where id = 205';
                                $result = mysqli_query($conn,$query);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                ?>
                                <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="menu-details.html">
                                            <img src="images/menu-list/6.jpg" alt="list food images">
                                        </a>
                                    </div>
                                    <div class="food__list__inner d-flex align-items-center justify-content-between">
                                        <div class="food__list__details">
                                        <h2><?php 
                                        echo$row['name'];
                                        ?></h2>
                                            <p>Litchi Mojito is a refreshing drink to beat the summer heat. This is a very easy and quick recipe to prepare.The ingredients are litchi juice,lemon juice,sugar,mint leaves and chilled soda.</p>
                                            <div class="list__btn">
                                            <form action="php/bcart.php" method="post">
                                               <button type="submit" name="litchi" class="food__btn grey--btn theme--hover"onClick="add();">Order Now</button>
                                              
                                            </form> 
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span>₹<?php 
                                        echo$row['price'];
                                        ?></span>
                                            </div>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php
                                $query = 'select name,price from drinks where id = 206';
                                $result = mysqli_query($conn,$query);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                ?>
                                <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="menu-details.html">
                                            <img src="images/menu-list/7.jpg" alt="list food images">
                                        </a>
                                    </div>
                                    <div class="food__list__inner d-flex align-items-center justify-content-between">
                                        <div class="food__list__details">
                                        <h2><?php 
                                        echo$row['name'];
                                        ?></h2>
                                            <p>The Red Lime is a small, compact tree that produces beautiful orange skinned fruit with reddish orange flesh much like Key Limes in size and flavor.The juice is extracted to create this drink.</p>
                                            <div class="list__btn">
                                            <form action="php/bcart.php" method="post">
                                               <button type="submit" name="redl" class="food__btn grey--btn theme--hover"onClick="add();">Order Now</button>
                                              
                                            </form> 
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span>₹<?php 
                                        echo$row['price'];
                                        ?> </span>
                                            </div>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                </div>
            </div>
        </section>
        <!-- End Menu Grid Area -->
        <!-- Start Footer Area -->
        <footer class="footer__area footer--1">
            <div class="footer__wrapper bg__cat--1 section-padding--lg">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="footer">
                                <h2 class="ftr__title">About Foodtron</h2>
                                <div class="footer__inner">
                                    <div class="ftr__details">
                                        <p>We aim to provide fresh and tasty food.</p>
                                        <div class="ftr__address__inner">
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-home"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p>Various Hotels Across Kottayam</p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-phone"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">+919497441773</a></p>
                                                    <p><a href="#">+04812330617</a></p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">ask@foodtron.com</a></p>
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
                                        <li><a href="#"><img src="images/fresh/pizza.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/fresh/2.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/fresh/1.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/fresh/biryani.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/fresh/icecream.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/fresh/7.jpg" alt="gallery images"></a></li>
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
                        <form action="#">
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
                        </form>
                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="#">
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
                        </form>
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
