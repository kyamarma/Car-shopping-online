<?php
require_once('db/connection.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "select * from product where id='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $model = $row['model'];
  $price = $row['price'];
  $del_charge = 100;
  /*$total_price= $price + $del_charge;*/
  $image = $row['photo'];
}

/* This is for Post Method */
if (isset($_POST['btn'])) {
  $model_Name = $_POST['model_Name'];
  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $Zip_code = $_POST['Zip_code'];
  $present_Address = $_POST['present_Address'];
  $permanent_Address = $_POST['permanent_Address'];
  $nationality = $_POST['nationality'];




  $upload_dir = "uploads/";
  $target_file = $upload_dir . basename($_FILES["nid"]["name"]);
  if (move_uploaded_file($_FILES['nid']['tmp_name'], $target_file)) {
    $sql = "insert into claim_order (model_Name,fName,lName,email,contact,Zip_code,nid,present_Address,permanent_Address,nationality) values ('$model_Name','$fName','$lName','$email','$contact','$Zip_code','$target_file','$present_Address','$permanent_Address','$nationality')";
  } else {
    $sql = "insert into claim_order (model_Name,fName,lName,email,contact,Zip_code,present_Address,permanent_Address,nationality) values ('$model_Name','$fName','$lName','$email','$contact','$Zip_code','$present_Address','$permanent_Address','$nationality')";
  }

  if ($conn->query($sql)) {
    header('location:U_successfull.php');
  } else {
    echo 'No product found!';
  }




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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Home</title>
  <!--AOS CSS-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!--css link-->
  <link rel="stylesheet" type="text/css" href="css/car_1.css">
</head>

<body>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="basic-info-items d-flex justify-content-between align-items-center h-100">
            <ul class="ber">
              <li>
                <a href="admin_home.php">
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
                      <li><a href="u_Shop_Online.php"> Shop Online</a></li>
                      <li><a href=""> Request a Quote</a></li>
                      <li><a href=""> Book Test Drive</a></li>
                      <li><a href=""> Compare Vehicles</a></li>
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
                      <li><a href="a_about_us.php"> About Us</a></li>
                    </ul>
                  </ul>
                </ul>
              </div>

              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span>BILL &
                    PRICE</span></a>
                <ul class="dropdown-menu menu col-md-6">
                  <ul>
                    <li>
                      <a href="">
                        <div class="img-3"></div>
                      </a>
                    </li>
                    <ul class="flex col-md-6 menu-option-2">
                      <li><a href="u_Shop_Online.php"> BILL & PRICE</a></li>
                    </ul>
                  </ul>
                </ul>
              </div>

              <!--navbar-->
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span><i
                      class="bi bi-list"></i></span></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="admin_order_list.php">Order list</a></li>
                  <li><a class="dropdown-item" href="admin_user_registration_list.php">User Registration</a></li>
                  <li><a class="dropdown-item" href="admin_product_Add.php">Product Add</a></li>
                  <li><a class="dropdown-item" href="product_Add_list.php">Product Add List</a></li>
                  <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                </ul>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--buying feature-->
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 buying_page">
        <h2>Product Details:</h2>
        <table class="table table-bordered" width="500px">
          <tr>
            <th>Model Name :</th>
            <td><?= $model; ?></td>
            <td rowspan="3" class="text-center "> <img src="<?= $image; ?>" width="400" height="200"></td>
          </tr>
          <tr>
            <th>price :</th>
            <td><?= $price; ?></td>
          </tr>
          <tr>
            <th>Delivary Charge :</th>
            <td><?= $del_charge; ?></td>
          </tr>
          <!--<tr>
            <th>Total Price :</th>
            <td><?= number_format($total_price); ?></td>
          </tr>-->
        </table>
      </div>
    </div>
  </div>



  <!--Information-->
  <div class="information">
    <ul>
      <li>Take Your Information</li>
    </ul>
  </div>

  <!--Information collect-->
  <div class="container">
    <form method="post" enctype="multipart/form-data" class="inform">
      <div class="mb-3">
        <label class="form-label">Model Name</label>
        <input type="text" class="form-control" name="model_Name">
      </div>
      <div class="mb-3">
        <label class="form-label">Fast Name</label>
        <input type="text" class="form-control" name="fName">
      </div>
      <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input type="text" class="form-control" name="lName">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label class="form-label">Contact</label>
        <input type="number" class="form-control" name="contact">
      </div>
      <div class="mb-3">
        <label class="form-label">Zip code</label>
        <input type="number" class="form-control" name="Zip_code">
      </div>





      <div class="mb-3">
        <label class="form-label">Your Document (NID) </label>
        <input type="file" class="form-control" name="nid">
      </div>


      <div class="mb-3 address ">
        <label>Persent Address</label>
        <textarea cols="22" rows="5" placeholder="Persent Address" required
          class="border border-dark text-capitalize fw-normal" name="present_Address"></textarea>

        <label>Permanent Address</label>
        <textarea cols="22" rows="5" placeholder="Permanent Address"
          class="border border-dark text-capitalize fw-normal" name="permanent_Address"></textarea>
      </div>

      <div class="md-3 ">
        <tr>
          <td><label>Select Nationality</label></td>
          <td>
            <select name="nationality" class="border border-dark">
              <option value="">Select</option>
              <option value="Afghanistan">Afghanistan</option>
              <option value="Albania">Albania</option>
              <option value="Algeria">Algeria</option>
              <option value="Azerbaijan">Azerbaijan</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Brazil">Brazil</option>
              <option value="China">China</option>
              <option value="Cambodia">Cambodia</option>
              <option value="Canada">Canada</option>
              <option value="Colombia">Colombia</option>
              <option value="France">France</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Iran">Iran</option>
              <option value="Ireland">Ireland</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea</option>
              <option value="USA">USA</option>
            </select>
          </td>
        </tr>
      </div>
      <button type="submit" class="btn btn-primary" name="btn">Next Step</button>
    </form>
  </div>



  <!--Footer-->
  <footer>
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