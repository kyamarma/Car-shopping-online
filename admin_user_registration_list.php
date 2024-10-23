<?php
require_once('db/connection.php');

$sql = "select * from user_registration";
if ($conn->query($sql)) {
    $result = $conn->query($sql);
}

if (isset($_GET['id'])) {
    $sql = "delete from user_registration where id=" . $_GET['id'];
    if ($conn->query($sql)) {
        header('location: admin_user_registration_list.php');
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

    <title>car_1</title>
    <!--AOS CSS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--css link-->
    <link rel="stylesheet" type="text/css" href="css/order_list.css">
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
                      <li><a href="u_u_Shop_Online.php"> Shop Online</a></li>
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
                      <li><a href="u_u_Shop_Online.php"> BILL & PRICE</a></li>
                    </ul>
                  </ul>
                </ul>
              </div>

              <!--navbar-->
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span><i
                      class="bi bi-list"></i></span></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                  <li><a class="dropdown-item" href="admin_order_list.php">Order list</a></li>
                  <li><a class="dropdown-item" href="admin_user_registration_list.php">User Registration</a></li>
                  <li><a class="dropdown-item" href="admin_product_Add.php">Product Add</a></li>
                </ul>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!--list-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <h2>User Registration  List</h2>
                    <thead>
                        <tr>
                            <th scope="col">SL.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sl = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?= $sl++; ?></td>
                                <td><?= $row['name']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['contact']; ?></td>
                                <td>
                                    <img src="<?= $row['photo_url']; ?>" width="100px" height="120px">
                                </td>
                                
                                <td>
                                    <a href="user_id.php?id=<?= $row['id']; ?>">Edit</a>
                                    <a onclick="return confirm('Are you sure?')"
                                        href="admin_user_registration_list.php?id=<?= $row['id']; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>