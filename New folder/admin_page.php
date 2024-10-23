<?php
require_once('db/connection.php');
if(isset($_GET['id'])){
  $id= $_GET['id'];
  $sql= "select * from product where id='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $model=$row['model'];
  $price =$row['price'];
  $del_charge=100;
  /*$total_price= $price + $del_charge;*/
  $image=$row['photo'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!--fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>car_1</title>
  <!--AOS CSS-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!--css link-->
  <link rel="stylesheet" type="text/css" href="css/index.css" >
</head>
<body>
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="basic-info-items d-flex justify-content-between align-items-center h-100">
                  <ul class="ber">
                    <li>
                      <a href="home.php"><div class="logo"></div></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span>VEHICLES</span></a>
                      <ul class="dropdown-menu">
                        <ul>
                        <li>
                          <a href="">
                            <div class="ber-img-1"></div>
                            <h4>2024 Outlander PHEV</h4>
                            <p>From $40,345</p>
                        </a>
                        </li>
                        <li>
                          <a href="">
                            <div class="ber-img-2"></div>
                            <h4>OUTLANDER PLUG-IN HYBRID SUV</h4>
                            <p>From $28,395</p>
                        </a>
                        </li>
                        <li>
                          <a href="">
                            <div class="ber-img-3"></div>
                            <h4>OUTLANDER PLUG-IN HYBRID SUV</h4>
                            <p>From $23,695</p>
                        </a>
                        </li>
                        <li>
                          <a href="">
                            <div class="ber-img-4"></div>
                            <h4>OUTLANDER PLUG-IN HYBRID SUV</h4>
                            <p>From $26,345</p>
                        </a>
                        </li>
                        
                        </ul>
                        <ul>
                          <li>
                            <a href="">
                              <div class="ber-img-5"></div>
                              <h4>OUTLANDER PLUG-IN HYBRID SUV</h4>
                              <p>From $16,695</p>
                          </a>
                          </li>
                          <li>
                            <a href="">
                              <div class="ber-img-6"></div>
                              <h4>OUTLANDER PLUG-IN HYBRID SUV</h4>
                              <p>From $17,795</p>
                          </a>
                          </li>
                        </ul>
                      </ul>
                    </li>

                    <div class="dropdown" >
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span>SHOPPING TOOLS</span></a>
                      <ul class="dropdown-menu menu">
                        <ul>
                           <li>
                                 <div class="img" data-aos="zoom-out" data-aos-delay="100"></div>
                           </li>
                         <ul class="flex">
                            <li><a href="Shop_Online.php"> Shop Online</a></li>
                            <li><a href=""> Request a Quote</a></li>
                           <li><a href=""> Book Test Drive</a></li>
                           <li><a href=""> Compare Vehicles</a></li>
                         </ul>
                        </ul>
                      </ul>
                    </div>

                    <div class="dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span>WHAT DRIVES US</span></a>
                      <ul class="dropdown-menu menu col-md-6">
                        <ul>
                          <li>
                            <a href="">
                              <div class="img-2"></div>
                            </a>
                          </li>
                         <ul class="flex col-md-6 menu-option-1">
                          <li><a href="about_us.php"> About Us</a></li>
                         </ul>
                        </ul>
                      </ul>
                    </div>

                    <div class="dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span>BILL & PRICE</span></a>
                      <ul class="dropdown-menu menu col-md-6">
                        <ul>
                           <li>
                               <a href="">
                                 <div class="img-3"></div>
                               </a>
                           </li>
                         <ul class="flex col-md-6 menu-option-2">
                            <li><a href="Shop_Online.php"> BILL & PRICE</a></li>
                         </ul>
                        </ul>
                      </ul>
                    </div>

                    <!--navbar-->
                    <div class="dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span><i class="bi bi-list"></i></span></a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                        <li><a class="dropdown-item" href="order_list.php">Order list</a></li>
                      </ul>
                    </div>
                  </ul>
                </div>
            </div>
        </div>
    </div>
  </div>



  

  <!--slideshow-->
  <div id="carouselExampleCaptions" class="carousel slide sideshow" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    
    <div class="carousel-inner slide ">
      <div class="carousel-item active" data-aos="zoom-out" data-aos-delay="100">
        <h3>KCS MOTORS</h3>
        <p>0% APR for 48 months + No Pay 90 Days</p>
        <p class="event-p">The moment is now. Drive home with a great offer on our 2024 Outlander and the 2024 Outlander Plug-in Hybrid during the Mitsubishi Summer Sales Event.</p>
        <a class="btn link-btn mt-3" href="">GET STARTED</a>
      </div>
      <div class="carousel-item ">
        <a href=""><img src="./images/1.jpg" ></a>
        
      </div>
      <div class="carousel-item">
        <a href=""><img src="./images/2.jpg" ></a>
      </div>
      <div class="carousel-item">
        <a href=""><img src="./images/3.jpg" ></a>
      </div>
      <div class="carousel-item">
        <a href=""><img src="./images/4.jpg" ></a>
      </div>
    </div>

    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  



  
  <!--shoping ber-->
  <div class="shopping  ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="shoping-img " data-aos="zoom-left" data-aos-delay="100"></div>
        </div>
        <div class="col-md-6 shop" data-aos="zoom-left" data-aos-delay="100">
          <h2>Get Pre-qualified</h2>
          <p>It's easy. Shop for the perfect car for your budget without impacting your credit score. Once you prequalify, see real rates and payments on many vehicles near you.</p>
          <button>
            <a href="Shop_Online.php">START SHOPPING</a></button>
        </div>
      </div>
      </div>
    </div>

    <!--toplist car-->
  <div class="header">
    <div class="car-1 col-sm-3">
      <div class="car-img-1" data-aos="zoom-left" data-aos-delay="100"></div>
      <a href="">
        <h4>2024 Outlander</h4>
        <p>From $28,395</p>
      </a>
    </div>
    <div class="car-2 col-sm-3">
      <div class="car-img-2" data-aos="zoom-left" data-aos-delay="100"></div>
      <a href="">
        <h4>2024 Outlander</h4>
        <p>From $28,395</p>
      </a>
    </div>
    <div class="car-3 col-sm-3">
      <div class="car-img-3" data-aos="zoom-left" data-aos-delay="100"></div>
      <a href="">
        <h4>2024 Outlander</h4>
        <p>From $28,395</p>
      </a>
    </div>
    
   <!-- <div class="car-4 col-sm-3">
      <div class="car-img-4" data-aos="zoom-left" data-aos-delay="100"></div>
      <a href="">
        <h4>2024 Outlander</h4>
        <p>From $28,395</p>
      </a>
    </div>-->
    
  </div>
  <div class="show_button">
  <ul>
    <li>
      <button >
        <a href="Shop_Online.php">Show More</a>
      </button>
    </li>
  </ul>
  </div>


  

  <!--Footer-->
  <footer>
      <a href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNzE2OTA4OTkxLCJjYWxsc2l0ZV9pZCI6MjY5NTQ4NDUzMDcyMDk1MX0%3D"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://x.com/i/flow/login"><i class="fa-brands fa-twitter"></i></a>
      <a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa-brands fa-instagram"></i></a>
    <p align="center">&copy; All Rights Reserved.</p>
  </footer>


  <!--AOS JS-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!--INITIALIZE AOS-->
  <script>
    AOS.init();
  </script>
</body>
</html>


