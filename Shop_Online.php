<?php
require_once('db/connection.php');
$sql = "select * from product";
$result = mysqli_query($conn, $sql);
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Shop_Online</title>
  <!--AOS CSS-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!--css link-->
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="basic-info-items d-flex justify-content-between align-items-center h-100">
            <ul class="ber">
              <li>
                <a href="home.php">
                  <div class="logo"></div>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button"
                  data-bs-toggle="dropdown"><span>VEHICLES</span></a>
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

              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span>SHOPPING
                    TOOLS</span></a>
                <ul class="dropdown-menu menu">
                  <ul>
                    <li>
                      <div class="img" data-aos="zoom-out" data-aos-delay="100"></div>
                    </li>
                    <ul class="flex">
                      <li><a href="Shop_Online.php"> Shop Online</a></li>
                    </ul>
                  </ul>
                </ul>
              </div>

              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span>WHAT DRIVES
                    US</span></a>
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

              <!--navbar-->
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span><i
                      class="bi bi-list"></i></span></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="login.php">LOGIN</a></li>
                </ul>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class=" col-xxl-12">
      <div class=" dropend drop  ">
        <button type="button" class="btn btn-primary dropdown-toggle justify-content-start " data-bs-toggle="dropdown">
          Toyota
        </button>
        <ul class="dropdown-menu Toyota ">
          <ul class="col-sm-4">
            <li>
              <div class="Toyota-1"></div>
              <p>2024</p>
              <p>GR86</p>
              <button>
                <a href="car_1.php">View</a>
              </button>
            </li>
            <li>
              <div class="Toyota-2"></div>
              <p>2024</p>
              <p>GR86</p>
              <button>View</button>
            <li>
              <div class="Toyota-3"></div>
              <p>2024</p>
              <p>GR86</p>
              <button>View</button>
            </li>

          </ul>
          <ul class="col-sm-4">
            <li>
              <div class="Toyota-4"></div>
              <p>2024</p>
              <p>GR86</p>
              <button>View</button>
            </li>
            <li>
              <div class="Toyota-5"></div>
              <p>2024</p>
              <p>GR86</p>
              <button>View</button>
            </li>
            <li>
              <div class="Toyota-6"></div>
              <p>2024</p>
              <p>GR86</p>
              <button>View</button>
            </li>
          </ul>
          <div class="container">
            <div class="row">
              <?php
              while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-lg-4 mt-3 mb-3">
                  <div class="card-deck">
                    <div class="card border_info p-2  ">
                      <img src="<?= $row['photo']; ?>" class="card-img-top" height="180" width="300">
                      <h5> <?= $row['model']; ?></h5>
                      <h3 class="card-title"> <?= $row['price']; ?>/-</h3>

                      <a href="car_1.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-block btn-lg  ">View</a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
      </div>
      </ul>
    </div>
    <div class=" dropend drop ">
      <button type="button" class="btn btn-primary dropdown-toggle justify-content-start" data-bs-toggle="dropdown">
        Volkswagen
      </button>
      <ul class="dropdown-menu Toyota">
        <ul class="col-sm-4">
          <li>
            <div class="Toyota-1"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-2"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          <li>
            <div class="Toyota-3"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>

        </ul>
        <ul class="col-sm-4">
          <li>
            <div class="Toyota-4"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-5"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-6"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
        </ul>
      </ul>
    </div>
    <div class=" dropend drop ">
      <button type="button" class="btn btn-primary dropdown-toggle justify-content-start" data-bs-toggle="dropdown">
        BMW
      </button>
      <ul class="dropdown-menu Toyota">
        <ul class="col-sm-4">
          <li>
            <div class="Toyota-1"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-2"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          <li>
            <div class="Toyota-3"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>

        </ul>
        <ul class="col-sm-4">
          <li>
            <div class="Toyota-4"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-5"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-6"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
        </ul>
      </ul>
    </div>
    <div class=" dropend drop ">
      <button type="button" class="btn btn-primary dropdown-toggle justify-content-start" data-bs-toggle="dropdown">
        Honda
      </button>
      <ul class="dropdown-menu Toyota">
        <ul class="col-sm-4">
          <li>
            <div class="Toyota-1"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-2"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          <li>
            <div class="Toyota-3"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>

        </ul>
        <ul class="col-sm-4">
          <li>
            <div class="Toyota-4"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-5"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-6"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
        </ul>
      </ul>
    </div>
    <div class=" dropend drop ">
      <button type="button" class="btn btn-primary dropdown-toggle justify-content-start" data-bs-toggle="dropdown">
        Tesla
      </button>
      <ul class="dropdown-menu Toyota">
        <ul class="col-sm-4">
          <li>
            <div class="Toyota-1"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-2"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          <li>
            <div class="Toyota-3"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>

        </ul>
        <ul class="col-sm-4">
          <li>
            <div class="Toyota-4"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-5"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
          <li>
            <div class="Toyota-6"></div>
            <p>2024</p>
            <p>GR86</p>
            <button>View</button>
          </li>
        </ul>
      </ul>
    </div>
  </div>
  </div>

















  <!--Footer-->
  <footer class="footer-1">
    <a
      href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNzE2OTA4OTkxLCJjYWxsc2l0ZV9pZCI6MjY5NTQ4NDUzMDcyMDk1MX0%3D"><i
        class="fa-brands fa-facebook"></i></a>
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