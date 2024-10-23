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
  <title>Home</title>
  <!--AOS CSS-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!--css link-->
  <link rel="stylesheet" type="text/css" href="css/login.css" >
</head>
<body>
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="basic-info-items d-flex justify-content-between align-items-center h-100">
                  <ul class="ber">
                    <li>
                      <a href="index.php"><div class="logo"></div></a>
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
                        <li><a class="dropdown-item" href="login.html">LOGIN</a></li>
                      </ul>
                    </div>
                  </ul>
                </div>
            </div>
        </div>
    </div>
  </div>



 <!--login bar-->
  <div class="contain">
    <div class="row">
          
          <form class="login">
            <div class="page">
              <h1 class="text-center ">Login Page</h1>
            </div>
            <div class="mb-3 email">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1 " placeholder="Enter your email" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3 password">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
              <div class="col-auto">
                <span id="passwordHelpInline" class="form-text ">
                  Must be 8-20 characters long.
                </span>
              </div>
            </div>
            <button type="login" class="btn btn-primary">Login</button>
            
          </form>
            
          </div>
        </div>

  <!--AOS JS-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!--INITIALIZE AOS-->
  <script>
    AOS.init();
  </script>
</body>
</html>


