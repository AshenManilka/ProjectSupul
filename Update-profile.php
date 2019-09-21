<?php include "includes/db.php"; ?>
<?php
// Start the session
session_start();
?>


<?php
  
                 //select quary---------------------------------------------------------------------------------------      

                        
                 $query = "SELECT * FROM `registration` WHERE email ='{$_SESSION['email']}'";
             // $query = "SELECT * FROM `registration` WHERE email ='ashen9593@gmail.com'";
              
                $select_all_books_query = mysqli_query($connection,$query);


                while($row = mysqli_fetch_assoc($select_all_books_query)){
                $firstname = $row['firstName'];
                $lastname = $row['lastname'];
                $username = $row['username'];
                $email = $row['email'];
                $password = $row['password'];
             
                $address = $row['address'];
                $mobile = $row['mobile'];
                $image = $row['image'];


                }
   

?>

<?php
   
     if(isset($_POST['submit'])){
         
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $username = $_POST['username'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         $cpassword = $_POST['cpassword'];
         $address = $_POST['address'];
         $mobile = $_POST['mobile'];

         $book_pic = $_FILES['image']['name'];
        $book_pic_temp = $_FILES['image']['tmp_name'];
        
        move_uploaded_file($book_pic_temp,"img/books/$book_pic");
    
         $firstname = mysqli_real_escape_string($connection,$firstname);
         $lastname = mysqli_real_escape_string($connection,$lastname);
         
         $username = mysqli_real_escape_string($connection,$username);
         $email = mysqli_real_escape_string($connection,$email);
         $password = mysqli_real_escape_string($connection,$password);
         $cpassword = mysqli_real_escape_string($connection,$cpassword);
         $address = mysqli_real_escape_string($connection,$address);
         $mobile = mysqli_real_escape_string($connection,$mobile);
         
         //insert qary
      //      if($password == $cpassword ){
   // echo "ashen";
         //   $query = "UPDATE INTO registration(firstname,lastname,username,email,password,address,mobile,image) VALUES ('{$firstname}','{$lastname}','{$username}','{$email}','{$password}','{$address}','{$mobile}' ,'{$book_pic}')";
           
         $query =    "UPDATE `registration` SET `firstName` = '{$firstname}',
        `lastname` = '{$lastname}',
         `username` = '{$username}',
         `email` = '{$email}',
         `password` = '{$password}',
         `address` = '{$address}',
         `mobile` = '{$mobile}',
         `image` = '{$book_pic}'
        WHERE `registration`.`email` ='{$_SESSION['email']}';"; 
       $create_user_query = mysqli_query($connection,$query);


       $_SESSION["email"] = $email;
       $_SESSION["image"] = $book_pic;
       $_SESSION["firstname"] =$firstname;
       $_SESSION["lastname"] = $lastname;

        //    }else{
          //      echo"Retype your password again";
          //  }
         

     }



                 //select quary---------------------------------------------------------------------------------------      

        /*                
                $query =   "SELECT image FROM `registration` WHERE username ='ashen'";
              
                $select_all_books_query = mysqli_query($connection,$query);


                while($row = mysqli_fetch_assoc($select_all_books_query))
                  
                    $image = $row['image'];

    */


?>





<!DOCTYPE html>
<html lang="en">

<head>
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
        <link rel="stylesheet" href="home3.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>



        <!--search bar-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
            id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
            integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">




        <style>
            body {
                height: 100%;



            }

            /* Set the size of the div element that contains the map */
            #map {
                height: 400px;
                /* The height is 400 pixels */
                width: 100%;
                /* The width is the width of the web page */
            }




            .myForm {


                top: 0vh;
                padding: 30px;
                border-radius: 10px;
                color: beige;
                box-shadow: 5px 5px 1px 1px rgb(236, 233, 233);
                background-image: linear-gradient(to right, #D48166, rgb(251, 251, 251));

                opacity: 1;


            }

            .fimg{
             border-radius: 30px;
             box-shadow: 1px 1px 1px 1px rgb(90, 89, 89);
            }

        </style>

    </head>

<body>



    <header>
        <!-- hader-top start -->
        <div class="col-12 header-top bg-black border-btm"
            style=" background-color: rgba(243, 220, 214, 0.9);  margin-top: -2%;border-bottom-color: aliceblue">


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
                                <li><a href="./index.html"><i class="fa fa-home fa-2x "></i></i>Home</a></li>
                                <li><a href="./about-us.html"><i class="fa fa-check-circle fa-2x "></i>About Us</a>
                                </li>
                                <li><a href="./about-us.html#locations"><i class="fa fa-phone fa-2x"></i>Locations</a>
                                </li>
                                <li><a href="./careers.html"><i class="fa fa-users fa-2x"></i>Careers</a></li>
                            </ul>




                        </div>
                        <!-- user-info-top end -->
                    </div>
                </div>
            </div>
        </div>


        <!-- header-bottom end -->

    </header>



    <!--form section------------------------->
    <div class="container myForm mt-3 ">
            <h1><div class="py-5 text-center">UPDATE</div></h1>
              
              <div class="row">
                  
                  <div class="col-md-8">
              
            <div class="flex-box">
                
                
                
               <form  onsubmit="return  validation()"   action="" method="post"  enctype="multipart/form-data">
     


               <div class="row">
              <div class="col-md-6 mb-3">
                  <!-- first name-->

             
                  <label for="firstName">First name</label>
                  <input type="text" class="form-control" id="firstName"  name="firstname"  value="<?php echo htmlspecialchars($firstname); ?>" >
                  <span id="fn" class="text-danger font-weight-bold"></span>
                </div>

                  <!--Last Name-->

                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="<?php echo htmlspecialchars($lastname); ?>">
                  <span id="ln" class="text-danger font-weight-bold"></span>
          </div>
        </div>

        <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                          <div class="input-group-prepend"></div>
                          </div>
                          <input type="text" class="form-control" id="username" name="username"  value="<?php echo htmlspecialchars($username); ?>" >
                          <span id="un" class= "text-danger font-weight-bold"></span>
                        </div>
                  
              
                      <div class="mb-3">
                        <label for="email">Email </label>
                        <input type="text" class="form-control" id="email" name="email"  value="<?php echo htmlspecialchars($email); ?>" >
                        <span id="em" class="text-danger font-weight-bold"></span>
                      </div>
              
                      <div class="mb-3">
                        <label for="Password">Password</label>
                        <input type="text" class="form-control" id="pwd" name="password"  value="<?php echo htmlspecialchars($password); ?>" >
                        <span id="pswd" class="text-danger font-weight-bold"></span>
                      </div>

                      <div class="mb-3">
                        <label for="CPassword">Confirm Password</label>
                        <input type="text " class="form-control" id="cpwd" name="cpassword"  value="<?php echo htmlspecialchars($password); ?>" >
                        <span id="cpswd" class="text-danger font-weight-bold" ></span>
                      </div>
              
                      <div class="mb-3">
                            <label for="address">Address  </label>
                            <input type="text" class="form-control" id="address" name="address"  value="<?php echo htmlspecialchars($address); ?>" >
                            <span id="add" class="text-danger font-weight-bold"></span>
                         </div>

                         <div class="mb-3">
                            <label for="mnum">Mobile number  </label>
                            <input type="text" class="form-control" id="monum" name="mobile"  value="<?php echo htmlspecialchars($mobile); ?>" >
                            <span id="Mob" class="text-danger font-weight-bold"></span>
                         </div>
                         
                      
                   
         
    
       </div>
                 </div>
           
         
        

              <div class="col-sm-4 col-lg-4 col-md-4  text-center">
            <div class="thumbnail">
            <div class="inner">
              <a href="#"> <img src="./img/books/<?php echo $image;  ?>" height="300" width="300" alt="profile-image" class="fimg"  style="width: 15rem;height:18rem; "></a>
            </div>
                <br><br>

                <label class="filebutton ">
                     <h6> CHANGE IMAGE!</h6>
                     <span><input type="file" id="image" name="image" class="form-control "></span>
                    
                     </label>
                   
     
                  <style>
                  label.filebutton {
                   width:100px;
                   height:40px;
                   overflow:hidden;
                   position:relative;
                   background-color:	#FE5F38;
                   border-radius: 5px;
                   padding: 3px 20px 30px 25px ;
                   box-shadow: 2px 2px 2px 1px rgb(255, 255, 255);
                 
                   
               }

               label.filebutton:hover{

                background-color:	rgb(255, 253, 253);
                color: #FE5F38;
                
               }
     
                     label span input {
                         z-index: 999;
                         line-height: 0;
                         font-size: 50px;
                         position: absolute;
                         top: -2px;
                         left: -700px;
                         opacity: 0;
                         filter: alpha(opacity = 0);
                         -ms-filter: "alpha(opacity=0)";
                         cursor: pointer;
                         _cursor: hand;
                         margin: 0;
                         padding:0;
                         
                     }
                  
                  
                  </style>  
     
                   <br>      
                        <div class="row">
                            <div class="col-6">
                            <button  class="btn btn-outline-secondary  btn-block" " type="submit" name="submit" id="submit">UPDATE</button>

                            </div>
                            <div class="col-6">
                            <a href="Profile.php " type class="btn btn-outline-secondary btn-block">BACK</a>

                                </div>

                        </div>
            

             
           
         
                 
       
            </div>

          
              </form>
              
              </div>
              </div>  
      
    </div>


<br><br><br><br><br>


<!-- *** FOOTER ***_________________________________________________________ -->

<!-- footer-area start -->
<footer class="footer-area drak-footer    pt-60"  >
        <div class="footer-top bg-black ">
            <div class="container">
                <div class="row "  style="margin-top: -100px">
                    <div class="col-lg-4" >
                        <div class="newsletter-title">
                            <h2 id="block-newsletter-label">Stay Up For SendNewsletter</h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-8" style="margin-top:-25px">
                        <div class="newsletter-area"  >
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
  
</body>

</html>