<?php
require_once('db/connection.php');

/* This is for Post Method */
if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);
    $user_type = $_POST['user_type'];
    $upload_dir = "photos/";
    $target_file = $upload_dir . basename($_FILES["photo_url"]["name"]);
    if (move_uploaded_file($_FILES['photo_url']['tmp_name'], $target_file)) {
        $sql = "insert into user_registration (name,email,contact,password,photo_url,user_type) values ('$name','$email','$contact','$password','$target_file','$user_type')";
    } else {
        $sql = "insert into user_registration (name,email,contact,password,user_type) values ('$name','$email','$contact','$password','$user_type')";
    }

    if ($conn->query($sql)) {
        header('location:index.php');
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration</title>
</head>

<body>
    <div class="container">
        <h4>Registration</h4>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Contact</label>
                <input type="text" class="form-control" name="contact">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <select name="user_type">
                <option value="">Select</option>
                <option value="user">user</option><!--
                <option value="admin">admin</option>-->
            </select>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="photo_url">
            </div>
            <button type="submit" class="btn btn-primary" name="btn">Submit</button>
            <button type="submit" class="btn btn-primary" name="btn">Login</button>
        </form>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>