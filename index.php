<?php
require_once('db/connection.php');
$msg = "";

/* This is for Post Method */
if (isset($_POST['btn'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_registration WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['user_type'] == 'admin') {

            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_Home.php');

        } elseif ($row['user_type'] == 'user') {

            $_SESSION['user_name'] = $row['name'];
            header('location:home.php');

        }

    } else {
        $error[] = 'incorrect email or password!';
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
    <title>Home</title>
    <!--AOS CSS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--css link-->
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>




    <!--login bar-->
    <div class="contain">
        <div class="row">

            <form class="login" method="post" enctype="multipart/form-data">
                <div class="page">
                    <h1 class="text-center ">Login Page</h1>
                </div>
                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<span class="error-msg">' . $error . '</span>';
                    }
                    ;
                }
                ;
                ?>
                <div class="mb-3 email">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1 " name="email"
                        placeholder="Enter your email" aria-describedby="emailHelp">

                </div>
                <div class="mb-3 password">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Enter your password" name="password">
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text ">
                            Must be 8-20 characters long.
                        </span>
                    </div>
                </div>
                <div class="sign">
                    <button type="submit" class="btn btn-primary" name="btn">Login</button>
                    <button type="" class="btn btn-primary ">
                        <li>
                            <a href="registration.php"> Sign Up</a>
                        </li>
                    </button>
                </div>
            </form>

        </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>