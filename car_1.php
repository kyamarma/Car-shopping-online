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
  <link rel="stylesheet" type="text/css" href="css/car_1.css" >
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
                        <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
                      </ul>
                    </div>
                  </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
<!--Buy button-->
        <div class="col-lg-4 mt-3 mb-3">
          <div class="card-deck">
            <div class="card border_info p-2  ">
              <img src="<?= $row['photo']; ?>" class="card-img-top"  height="180" width="300">
              <h5 >  <?= $row['model']; ?></h5>
              <h3 class="card-title"> <?= $row['price']; ?>/-</h3>
              <a href="product_order_list.php?id=<?= $row['id'];?>" class="btn btn-danger btn-block btn-lg  ">Buy Now</a>
            </div>
          </div>
        </div>

<!--vedio-->
<div class="car-menu-1">
     <video loop autoplay muted class="vd">
          <source src="video/2024 Toyota GR86.mp4" type="video/mp4">
          
     </video>
     <div class="vd-1">
      <h4>
            2025 Toyota Crown
          </h4>
          <p>
            Starting MSRP $ <br>
            $20,395 
          </p>
     </div>
</div>

<!---->
<div class="header">
  <ul class="gr">
    <li>
      <h3>GR86 Specs</h3>
      <button>See All Specs </button>
    </li>
  </ul>
  <div class="container">
    <div class="row">
      <div class="col-md-3 header-in ">
        <ul>
          <li>
            <hr>
            <p>PERFORMANCE</p>
              <p>228 hp * and 184 lb.-ft. of torque</p>
          </li>
          <li>
            <hr>
            <p>DRIVETRAIN</p>
            <p>Rear-Wheel Drive (RWD)</p>
          </li>
        </ul>
        <ul>
          <li>
            <hr>
            <p>2.4L 4-CYLINDER</p>
            <p>Naturally aspirated boxer engine</p>
          </li>
          <li>
            <hr>
            <p>TECHNOLOGY</p>
            <p>8-in. touchscreen display</p>
          </li>
        </ul>
        <ul>
          <li>
            <hr>
            <p>TRANSMISSION</p>
            <p>6-speed Manual or Automatic Transmission</p>
          </li>
          <li>
            <hr>
            <p>NATIONAL AUTO SPORT ASSOCIATION</p>
            <p>Complimentary 1-year membership *</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<!--slideshow-->
<div class="slideshow-car-1">
  <h3>The edgy side of sophistication.</h3>
  <button>Exterior</button>
  <ul>
    <li class="car-button">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item  active">
                <img src="./images/Exterior-1.avif" class="d-block w-60" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/Exterior-2.avif" class="d-block w-60" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/Exterior-3.avif" class="d-block w-60" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </li>
      </ul>
    </div>


    <!--Feature-->
    <div class="feature">
        <div class="feature-1">
          <div class="car-4-img"></div>
          <ul>
            <li>
              <h3>Fit for the ambitious driver.</h3>
            </li>
            <li>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, eligendi dolorum cum explicabo necessitatibus odit quo nostrum culpa amet neque, aliquid magnam aliquam! Facilis numquam aliquid, error laborum voluptate doloremque!</p>
            </li>
          </ul>
        </div>
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


