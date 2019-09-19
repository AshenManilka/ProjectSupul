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


<!DOCTYPE html>
<html lang="en">
<head>
    <  <meta name="robots" content="all, follow">
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
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  

    <link rel="stylesheet" href="./registor.css">
</head>
<body>
<style>
body{
    font-family: 'Roboto Slab', Courier, monospace;
   
  } 
</style>

     <div class="container">
       <h1><div class="py-5 text-center">PROFILE</div></h1>
         
         <div class="row">
             
             <div class="col-md-8">
         
       <div class="flex-box">
           
           
           
          <form  onsubmit="return  validation()"   action="" method="post" class="bg-light"  enctype="multipart/form-data">

          <div class="row">
              <div class="col-md-6 mb-3">
                  <!-- first name-->

             
                  <label for="firstName">First name   </label>
                  <h5><?php echo $firstname ?></h5>
                 
               
                 
                 
                </div>

                  <!--Last Name-->

                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <h5><?php echo $lastname ?></h5>
          </div>
        </div>

        <div class="mb-3">
                        <label for="username">Username</label>
                        <h5><?php echo $username ?></h5>
                 
                        <div class="input-group">
                          <div class="input-group-prepend"></div>
                          </div>
                          <span id="un" class= "text-danger font-weight-bold"></span>
                        </div>
                  
              
                      <div class="mb-3">
                        <label for="email">Email </label>
                        <h5><?php echo $email ?></h5>
                        <span id="em" class="text-danger font-weight-bold"></span>
                      </div>
              
                      <div class="mb-3">
                        <label for="Password">Password</label>
                        <h5><?php echo $password ?></h5>
                        <span id="pswd" class="text-danger font-weight-bold"></span>
                      </div>

                    
              
                      <div class="mb-3">
                            <label for="address">Address  </label>
                            <h5><?php echo $address ?></h5>
                            <span id="add" class="text-danger font-weight-bold"></span>
                         </div>

                         <div class="mb-3">
                            <label for="mnum">Mobile number  </label>
                            <h5><?php echo $mobile ?></h5>
                            <span id="Mob" class="text-danger font-weight-bold"></span>
                         </div>
                         
                      
                   
         
    
       </div>
                 </div>
           
         
        

              <div class="col-sm-4 col-lg-4 col-md-4  text-center">
            <div class="thumbnail">
            <div class="inner">
              <a href="#"> <img src="./img/books/<?php echo $image;  ?>" height="300" width="300" alt="new-arrivals1" style="width: 15rem;height:15rem; "></a>
            </div>
                <br><br>

              

              <br>      
              <a href="Update-profile.php " class="btn btn-primary">Update</a>

                     <a href="index1.php " class="btn btn-danger">Back</a>
       
            </div>
            </form>
         
         </div>
     </div>  
 


             
    

     <script type="text/javascript">
                      

     </script>



<!-- Footer Links -->
<section class="bgg-col" >


<div class="container text-center text-md-left mt-5" style="background-colour:black;">

<!-- Grid row -->
<div class="row mt-3">

  <!-- Grid column -->
  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7971946959115!2d79.97095231370463!3d6.914834595003709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri+Lanka+Institute+of+Information+Technology!5e0!3m2!1sen!2slk!4v1552876854406" 
      width="300" height="250" frameborder="0" style="border:0" allowfullscreen>
  </iframe>

  </div>
  <!-- Grid column -->
<!-- Grid column -->
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mr-4">

<!-- Links -->
<h6 class="text-uppercase font-weight-bold">Contact</h6>
<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
<p>
<i class="fas fa-home mr-3"></i>ARD-library</p>
<p>
<i class="fas fa-envelope mr-3"></i> gmail.com</p>
<p>
<i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
<p>
<i class="fas fa-print mr-3"></i> 011-2543622</p>

</div>
  <!-- Grid column -->
  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

    <!-- Links -->
    <h6 class="text-uppercase font-weight-bold">Products</h6>
    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <p>
      <a   href="contactUs.html">Contact Us</a>
    </p>
    <p>
      <a  href="#!">About Us</a>
    </p>
    <p>
      <a   href="#!">Books</a>
    </p>
    <p>
      <a   href="#!">Packeges</a>
    </p>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

    <!-- Links -->
    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <p>
      <a href="#!"> Account</a>
    </p>
    <p>
      <a href="#!"> Affiliate</a>
    </p>
    <p>
      <a href="#!"> Rates</a>
    </p>
    <p>
      <a href="#!">Help</a>
    </p>

  </div>
  <!-- Grid column -->


  <!-- Grid column -->

</div>
<!-- Grid row -->

</div>
<!-- Footer Links -->



</footer>
 
         
</section>


</body>
</html>