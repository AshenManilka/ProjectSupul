<?php include "includes/db.php"; ?>
<?php
// Start the session
session_start();




?>



<!DOCTYPE html>
<html lang="en">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
        <meta name="robots" content="all, follow">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <meta charset="utf-8">        
        <meta name="author" content="3LinksITSolutions | Sri Lanka Best Website developers">
        <title>Supul Collection - Fashion for Your Life</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">	
        <!-- all CSS hear -->		
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">`
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/slick.min.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/mainmenu.css">
        <!-- Style CSS hear -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">		
        <link rel="stylesheet" href="assets/css/reset.css">		
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>



        <!--search bar-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  

        <style>
            /* Set the size of the div element that contains the map */
            #map {
                height: 400px;  /* The height is 400 pixels */
                width: 100%;  /* The width is the width of the web page */
            }

        

        </style>
    </head>
    <body>        <!-- *** NAVBAR ***
_________________________________________________________ -->
 <!-- *** NAVBAR ***
_________________________________________________________ -->
<div class="main-wrapper home-4 " >
    <header>
        <!-- hader-top start -->
        <div class="header-top bg-black border-btm"  style=" background-color: rgba(243, 220, 214, 0.9);  margin-top: -2%; border-bottom-color: aliceblue">
               
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-2">
                        <div class="header-left-area">
                            <!-- language-currency-wrapper start -->
                            <div class="language-currency-wrapper">

                            </div>
                            <!-- language-currency-wrapper end -->
                            <!-- top-social-warraper start -->
                            <div class="logo">
                                <ul>
                                    <div class="logo " style="margin-top: 5px">
                                        <a href="../index.html"><img src="./images/logo/logo-2.png" alt=""></a>
                                    </div>
                                    
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 ">
                        <!-- user-info-top start-->
                        <div class="user-info-top mt-4">
                            <ul>
                                <li><a href="index1.php"><i class="fa fa-home "></i></i>Home</a></li>
                                <li><a href="./about-us.php"><i class="fa fa-check-circle fa-2x "></i>AboutUs</a>
                                </li>
                                <li><a href="./about-us.php#locations"><i class="fa fa-phone fa-2x"></i>Locations</a></li>
                                <li><a href="./careers.php"><i
                                            class="fa fa-users fa-2x"></i>Careers</a></li>
                            
                                      <?php
                                         if(isset($_SESSION['email']) && !empty($_SESSION['email']))
                                        {
                                            
                                             ?>
                                            <li><a href="Profile.php"><i class="fas fa-user-circle fa-2x"></i>Profile</a></li>
                                                    
                                            <li class="nav-link dropdown-toggle nav-item   dropdownh">
                                                    <a  href="#" 
                                                    id="navbarDropdown"
                                                    role="button" 
                                                    data-toggle="dropdown" 
                                                    aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="./img/books/<?php echo $_SESSION["image"];  ?>
                                                    " height="5" width="5" alt="Profile" style="width: 3rem;height:3rem; ">
        
                                                   </a>
           
                                                   
                                                   <div class="dropdown-menu dn ">
                                                      
                                                      
                                                       <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-in-alt"></i>Logout
                                                       <!-- <?php
                                                       // session_unset();
                                                       
                                                       
                                                       ?> -->
                                                       </a>
                                                      
                                                   </div>
                                               
                                               
                                               
                                            <?php
                                        }
                                        else{
                                            ?>
                                             <li><a href="loggingForm.php"><i class="fas fa-sign-in-alt fa-2x"></i>
                                             Login</a></li>

                                            <li><a href="registrationForm.php"><i class="fas fa-sign-in-alt fa-2x">

                                            </i>Register</a></li>
                                         
                                    
                                          
                                          <?php     
                                                                               
                                        }
                                        ?>
                                        
                                </li>
                               



                            </ul>

                        </div>
                        <!-- user-info-top end -->
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- header-bottom end -->
        
    </header>
</div>



<!--catagory nav  links--->

<div class="header-mid-area hader-mid-two bg-black">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rwo">
                    <div class="header-mid-content hader-mid-two">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 order-3 order-md-1">
                                <!-- search-wrapper start -->
                                <div class="search-wrapper">
                                    <div class="search-bar search-bar-2">

                                    </div>
                                </div>
                                <!-- search-wrapper end -->
                            </div>
                            <div class="col-lg-4 col-md-4 order-2 order-md-2">
                                <!-- logo-mid start -->

                                <!-- logo-mid end -->
                            </div>
                            <div class="col-lg-4 col-md-3 order-1 order-md-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-mid-area end -->
<!-- header-bottom start -->
<div class="header-bottom-area sticky-header " style="margin-top:-25px" >
    <div class="container">
        <div class="row d-none d-lg-block">
            <div class="col-lg-12">
                <div class="main-menu-wrap text-center">
                    <div class="main-menu main-menu-2">

                        <nav class="navbar navbar-expand-lg ">

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">

                                    <li>
                                        <a href="./index.html"> HOME </a>
                                    </li>
                                    <li class="nav-item   dropdownh">
                                        <a class="nav-link dropdown-toggle" href="./products/women.php" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Women

                                        </a>
                                        <div class="dropdown-menu ">
                                            <a class="dropdown-item " href="./products/women.php">Dresses</a>
                                            <a class="dropdown-item" href="#">Party</a>
                                            <a class="dropdown-item" href="#">Linen</a>
                                            <a class="dropdown-item" href="#">Tops</a>
                                            <a class="dropdown-item" href="#">Trousers</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdownh">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            MEN

                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item " href="#">Party</a>
                                            <a class="dropdown-item" href="#">Work ware</a>
                                            <a class="dropdown-item" href="#">Linen</a>
                                            <a class="dropdown-item" href="#">Shirt</a>
                                            <a class="dropdown-item" href="#">Trousers</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdownh">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            KIDS

                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item " href="#">Dresses</a>
                                            <a class="dropdown-item" href="#">Party</a>
                                            <a class="dropdown-item" href="#">Romper</a>
                                            <a class="dropdown-item" href="#">Dumper Bag</a>
                                            <a class="dropdown-item" href="#">Sandal</a>
                                            <a class="dropdown-item" href="#">First Walker</a>
                                        </div>
                                    </li>


                                    <li class="nav-item dropdown  ">
                                        <a id="dropdownMenu1" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle"> Accessories </a>
                                        <ul aria-labelledby="dropdownMenu1"
                                            class="dropdown-menu border-0 shadow">
                                            <li class="dropdown-divider"></li>

                                            <!-- Level two dropdown-->
                                            <li class="dropdown-submenu dropdownh">
                                                <a id="dropdownMenu2" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"
                                                    class="dropdown-item dropdown-toggle">LADIES</a>
                                                <ul aria-labelledby="dropdownMenu2"
                                                    class="dropdown-menu border-0 shadow">
                                                    <li>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item " href="#">Dresses</a>
                                                            <a class="dropdown-item" href="#">Party</a>
                                                            <a class="dropdown-item" href="#">Romper</a>
                                                            <a class="dropdown-item" href="#">Dumper Bag</a>
                                                            <a class="dropdown-item" href="#">Sandal</a>
                                                            <a class="dropdown-item" href="#">First
                                                                Walker</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-submenu dropdownh">
                                                <a id="dropdownMenu2" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"
                                                    class="dropdown-item dropdown-toggle">GENTS</a>
                                                <ul aria-labelledby="dropdownMenu2"
                                                    class="dropdown-menu border-0 shadow">
                                                    <li>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item " href="#">Dresses</a>
                                                            <a class="dropdown-item" href="#">Party</a>
                                                            <a class="dropdown-item" href="#">Romper</a>
                                                            <a class="dropdown-item" href="#">Dumper Bag</a>
                                                            <a class="dropdown-item" href="#">Sandal</a>
                                                            <a class="dropdown-item" href="#">First
                                                                Walker</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>                                                       
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown  ">
                                        <a id="dropdownMenu1" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle"> Footwear </a>
                                        <ul aria-labelledby="dropdownMenu1"
                                            class="dropdown-menu border-0 shadow">
                                            <li class="dropdown-divider"></li>

                                            <!-- Level two dropdown-->
                                            <li class="dropdown-submenu dropdownh">
                                                <a id="dropdownMenu2" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"
                                                    class="dropdown-item dropdown-toggle">LADIES</a>
                                                <ul aria-labelledby="dropdownMenu2"
                                                    class="dropdown-menu border-0 shadow">
                                                    <li>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item " href="#">Dresses
                                                                Shoes</a>
                                                            <a class="dropdown-item" href="#">Casual
                                                                Shoes</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-submenu dropdownh">
                                                <a id="dropdownMenu2" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"
                                                    class="dropdown-item dropdown-toggle">GENTS</a>
                                                <ul aria-labelledby="dropdownMenu2"
                                                    class="dropdown-menu border-0 shadow">
                                                    <li>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item " href="#">Dresses
                                                                Shoes</a>
                                                            <a class="dropdown-item" href="#">Casual
                                                                Shoes</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                           
                                        </ul>
                                    </li>                                               
                                </ul>
                             <!--search bar--->
       
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
<!--search bar--->
     


        <div class="row ">
            <div class="col-lg-12">
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area d-block d-lg-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul>
                                <li>
                                    <a href="../index.html"> HOME </a>
                                </li>

                                <li>
                                    <a href="./products/women.html">
                                        Women </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Men </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Kids </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Accessories </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Footwear </a>
                                </li>
                                <form class="form-inlinemy-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-info my-2 my-sm-0 text-center"
                                        type="submit">Search</button>
                                </form>
                            </ul>

                        </nav>
                    </div>
                </div>
                <!-- Mobile Menu Area End -->
            </div>
        </div>

        <div class="container h-100  col d-none d-md-block " style="margin-top: -20px">
            <div class="d-flex justify-content-center h-100">
              <div class="searchbar">
                <input class="search_input" type="text" name="" placeholder="Search...">
                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
              </div>
            </div>
          </div> 

    
    </div>
</div>
<!-- slider-main-area start-->
<div class="slider-main-area mt-2">
    <div class="slider-active owl-carousel">
                        <img style = "width: 100%" src = "images/slider/new_02.jpg" alt="Colorful Life 01" />
                                <img style = "width: 100%" src = "images/slider/new_01.jpg" alt="Colorful Life 02" />
                                <img style = "width: 100%" src = "images/slider/new_04.jpg" alt="Colorful Life 03" />
                    </div>
</div>
<!--slider-main-area end-->
<!--product-area start -->
<div class="product-two-area ptb-80" >
        <div class="container">
                <div class = "col mt-10">
                        <!--section-title start -->
                        <div class = " section-title text-center">
                            <h2 class="mt-10">Best seller</h2>
                            <p>Most Trendy Clothes</p>
                        </div>
                        <!--section-title end -->
                    </div>
        
            <div class="row">
                <div class="col-2 mr-auto text-center">
                        <div class = "tabs-categorys-list">
                                <ul class = "nav" role = "tablist">
                                    <li role = "presentation" class = "active mt-5"><a class = "active" href = "#women" aria-controls = "women" role = "tab" data-toggle = "tab"><h5 class="prl-women">Women </h5></a></li>
                                    
                                    <li role = "presentation" class="mt-5 "><a href = "#men" aria-controls = "men" role = "tab" data-toggle = "tab"><h5 class="prl-men">Men</h5></a></li>
                                    <li role = "presentation" class="mt-5"><a href = "#kids" aria-controls = "kids" role = "tab" data-toggle = "tab"><h5 class="prl-kids">Kids</h5></a></li>
                                    <li role = "presentation" class="mt-5" ><a href = "#accessories" aria-controls = "accessories" role = "tab" data-toggle = "tab"><h5>Accessories</h5></a></li>
                                    <li role = "presentation" class="mt-5"><a href = "#footwear" aria-controls = "footwear" role = "tab" data-toggle = "tab"><h5 class="prl-foot">Footwear</h5></a></li>
                                </ul>
                        </div>
                </div>
     
                
                        <div class = "col-9 tab-content">
                                <div role = "tabpanel" class = "tab-pane active" id = "women">
                                    <div class = "row">
                                        <div class="product-active-3 owl-carousel"><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/test5.html">
                                                            <img class="mt-4 first-image" src="images/test5.png" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/test.html">
                                                            <img class="mt-4 first-image" src="images/test.png" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/test2.html">
                                                            <img class="mt-4 first-image" src="images/test2.png" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/test6.html">
                                                            <img class="mt-4 first-image" src="images/test6.png" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/test4.html">
                                                            <img class="mt-4 first-image" src="images/test4.png" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/test3.html">
                                                            <img class="mt-4 first-image" src="images/test3.png" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div></div>                                           
                                    </div>
                                </div>        
                                <div role="tabpanel" class="tab-pane" id="men">
                                    <div class="row">
                                        <div class="product-active-3 owl-carousel"><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/test7.html">
                                                            <img class="first-image" src="images/test7.png" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/fgfdfsd.html">
                                                            <img class="first-image" src="images/fgfdfsd.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/test8.html">
                                                            <img class="first-image" src="images/test8.png" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/test10.html">
                                                            <img class="first-image" src="images/test10.png" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/test11.html">
                                                            <img class="first-image" src="images/test11.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/test9.html">
                                                            <img class="first-image" src="images/test9.png" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div></div>                                             
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="kids">
                                    <div class="row">
                                                                <h5>
                                                
                                            </h5>
                                                                                         
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="accessories">
                                    <div class="row">
                                        <div class="product-active-3 owl-carousel"><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/titan-watch-205.html">
                                                            <img class="first-image" src="images/titan-watch-205.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div>                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/titan-watch-206.html">
                                                            <img class="first-image" src="images/titan-watch-206.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/titan-watch-211.html">
                                                            <img class="first-image" src="images/titan-watch-211.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/titan-watch-213.html">
                                                            <img class="first-image" src="images/titan-watch-213.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/titan-watch-201.html">
                                                            <img class="first-image" src="images/titan-watch-201.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div>                                             
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="footwear">
                                    <div class="row">
                                        <div class="product-active-3 owl-carousel"><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/ladies-footwear-708.html">
                                                            <img class="first-image" src="images/ladies-footwear-708.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div>                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/gents-footwear-911.html">
                                                            <img class="first-image" src="images/gents-footwear-911.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/gents-footwear-905.html">
                                                            <img class="first-image" src="images/gents-footwear-905.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/gents-footwear-902.html">
                                                            <img class="first-image" src="images/gents-footwear-902.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/gents-footwear-909.html">
                                                            <img class="first-image" src="images/gents-footwear-909.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/ladies-footwear-703.html">
                                                            <img class="first-image" src="images/ladies-footwear-703.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div><div class="col">                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/ladies-footwear-701.html">
                                                            <img class="first-image" src="images/ladies-footwear-701.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-thumbnail">
                                                        <a href="product/ladies-footwear-706.html">
                                                            <img class="first-image" src="images/ladies-footwear-706.jpg" alt="">
                                                        </a>                                                                        
                                                    </div>                                
                                                </div>
                                                <!-- single-product-wrap end -->                       
                                                </div></div>                                             
                                    </div>
                                </div>       
            </div>
        </div>
</div>

</div>
<!-- product-area end -->

<!-- banner-area start -->
<div class="banner-area pt-20">
    <div class="container">
        <div class="row">
            <!-- singel-banner start -->
                            <div class="col-lg-12 col-md-12" style="margin-bottom: 30px;">
                    <div class="singel-banner mt-30">
                        <a href="#"><img style="width: 100%" src="images/banners/banner_card_.jpg" alt=""></a>
                    </div>
                </div>
                    </div>
        <div class="row">            
                            <div class="col-lg-6">
                    <div class="singel-banner">
                        <a href="#"><img style="width: 100%" src="images/banners/banne_loyalty.jpg" alt=""></a>
                    </div>
                </div>
                                        <div class="col-lg-6">
                    <div class="singel-banner">
                        <a href="#"><img style="width: 100%" src="images/banners/banner_nora.jpg" alt=""></a>
                    </div>
                </div>
                    </div>
        <div class="row">
            <!-- singel-banner start -->
                            <div class="col-lg-12 col-md-12" style="margin-bottom: 30px;">
                    <div class="singel-banner mt-30">
                        <a href="#"><img style="width: 100%" src="images/banners/banner_hanwella.jpg" alt=""></a>
                    </div>
                </div>
                    </div>
<!--        <div class="row">            
                            <div class="col-lg-6">
                    <div class="singel-banner">
                        <a href="#"><img style="width: 100%" src="http://www.supul.lk/images/banners/banner_hanwella.jpg" alt=""></a>
                    </div>
                </div>
                                </div>
        <div class="row">
                    </div>-->
    </div>
</div>
<!-- banner-area end -->
<div id="baseurl" data-url="index.html"></div>
<div class="load-on-load-list" style="display: none;">
    <!--On page load request these urls and load data according to-->
    </div>
<!-- *** FOOTER ***_________________________________________________________ -->

<!-- footer-area start -->
<footer class="footer-area drak-footer"  >
    <div class="footer-top bg-black pt-80" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="newsletter-title">
                        <h2 id="block-newsletter-label">Stay Up For SendNewsletter</h2>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="newsletter-area">
                        <form action="#" id="mc-form" class="newsletter-inner">
                            <p>Newsletter Signup</p>
                            <div class="newsletter-input">
                                <input type="email" placeholder="Your email address" >
                            </div>
                            <div class="subscribe-btn-area">
                                <button type="submit" class="subscribe-btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle bg-black pb-20 mt-2"  style=" background-color: rgba(243, 220, 214, 0.9);">
        <div class="container">
            <div class="footer-main-content  pt-20">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <!-- footer-content start -->
                        <div class="footer-content">
                            <h3 class="footer-title">Contact us</h3>
                            <ul class="footer_list_info">
                                <li><i class="fa fa-map-marker"></i>Supul Collection<br>Administrative Office<br>#52, Hospital Road, Mulleriyawa New Town, <br>Sri Lanka</li>
                                <li class="phone"><i class="icon ion-android-call"></i> <span>+94 0114 377 522 </span></li>
                                <li class="phone"><i class="icon ion-android-fax"></i> <span>+94 0112 549 525 </span></li>
                                <li class="mail"><i class="icon ion-android-mail"></i> <a href="#">info@supul.lk</a></li>
                            </ul>
                        </div>
                        <!-- footer-content end -->
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <!-- footer-content start -->
                        <div class="footer-content">
                            <h3 class="footer-title">Links</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="footer_list">
                                        <li><a href="products/women.html">Ladies Wear</a></li>
                                        <li><a href="products/men.html">Mens Ware </a></li>
                                        <li><a href="products/kids.html">Kids Ware </a></li>
                                        <li><a href="products/accessories.html">Accessories</a></li>                                        
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="footer_list">
                                        <li><a href="#">Accessories </a></li>
                                        <li><a href="#">Gift Items</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- footer-content end -->
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <!-- footer-content start -->
                        <div class="footer-content">
                            <h3 class="footer-title">Show rooms</h3>
                            <ul class="footer_list_info">
                                <li><a href="#">Angoda</a></li>
                                <li><a href="#">Malabe</a></li>
                                <li><a href="#">Kaduwela</a></li>
                                <li><a href="#">Hanwella</a></li>
                            </ul>
                        </div>
                        <!-- footer-content end -->
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <!-- footer-content start -->
                        <div class="footer-content">
                            <h3 class="footer-title">Social Links</h3>
                            <div class="top-social-warraper">
                                <ul>
                                    <li><a href="https://www.facebook.com/SupulCollection/"><i class="fab fa-facebook"></i></a></li>
                                    <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                                    <li><a href="https://www.youtube.com/channel/UCxB35jLD-Lpc4WI0LU2stEQ"><i class="fab fa-youtube"></i></a></li>
                                    <li><a style="border: none" href="https://www.instagram.com/supulcollection/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer-content end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-black" style="background-color: #D48166">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-bottom-inner border-top">
                        <div class="copyright">Copyright <i class="icon-copyright"></i> <a href="#">Supul Collection</a>. All Rights Reserved</div>
                        <p class="copyright">
                            Powered By <a href="##" target="_new" alt='Most trusted web based solution provider in Sri Lanka' title='Most trusted web based solution provider in Sri Lanka'>*************</a>
                        </p>
                        <div class="payment">
                            <img src="images/icon/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area end -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- all plugins JS hear -->		
<script src="assets/js/popper.min.js"></script>	
<script src="assets/js/bootstrap.min.js"></script>	
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.mainmenu.js"></script>	
<script src="assets/js/ajax-email.js"></script>
<script src="assets/js/plugins.js"></script>
<!-- main JS -->		
<script src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/common.js"></script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.add-to-cart-link', function (e) {
            var productQty = $(this).prev('.product_qty').val();
            var atrbt = $(this).attr('href');
            $(this).attr('href', atrbt + '/' + productQty);
        });
        // Cart page once check the register check box show pasword section
        $('.password-section').hide();
        var isChecked = $('#deliver_to_different_address').is(":checked");
        if (isChecked) {
            $('.shipping-section').show();
        } else {
            $('.shipping-section').hide();
        }
        $('#register-new-account').on('change', function () {
            var isChecked = $(this).is(":checked");
            if (isChecked) {
                $('.password-section').show();
            } else {
                $('.password-section').hide();
            }
        });
        $('#deliver_to_different_address').on('change', function () {
            var isChecked = $(this).is(":checked");
            if (isChecked) {
                $('.shipping-section').show();
            } else {
                $('.shipping-section').hide();
            }
        });

    });
// Print    
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
// DropZone upload multiple images
    function init_dropzone() {
        Dropzone.autoDiscover = false;
        $(".upload-multi-images").dropzone({
            maxFiles: 4,
            addRemoveLinks: true,
            resizeWidth: 1200,
            resizeQuality: 0.6,
            paramName: 'uploadfile',
            init: function () {
                var elemthis = this;
                var imageList = $('.already-added-images > input');
                if (imageList.length > 0) {
                    $.each(imageList, function (key, value) {
                        var mockFile = {name: value.attributes.value.value, fileid: value.attributes.fileid.value, actionid: value.attributes.actionid.value, url: value.attributes.url.value, type: 'image/jpeg'};
                        elemthis.options.addedfile.call(elemthis, mockFile);
                        elemthis.options.thumbnail.call(elemthis, mockFile, value.attributes.value.value);
                        mockFile.previewElement.classList.add('dz-success');
                        mockFile.previewElement.classList.add('dz-complete');
                    });
                }
            },
            removedfile: function (file) {
                if (file.actionid == undefined) {
                    location.reload(true);
                } else {
                    var postData = {fileid: file.fileid, actionid: file.actionid};
                    var url = file.url;
                    var post = ajax_post(url, postData);
                    post.done(function (response) {
                        if (response.status == 'success') {
                            file.previewElement.remove();
                        }
                        notification_handler(response, '');
                    });
                }
            }
        });
    }

/*
   
                (function () {
                    var widget_id = '8EGldQNX3D';
                    var d = document;
                    var w = window;

                    function l() {
                        var s = document.createElement('script');
                        s.type = 'text/javascript';
                        s.async = true;
                        s.src = '//code.jivosite.com/script/widget/' + widget_id;
                        var ss = document.getElementsByTagName('script')[0];
                        ss.parentNode.insertBefore(s, ss);
                    }

                    if (d.readyState == 'complete') {
                        l();
                    } else {
                        if (w.attachEvent) {
                            w.attachEvent('onload', l);
                        } else {
                            w.addEventListener('load', l, false);
                        }
                    }
                })();
           
*/
</script>