<?php
require_once('db/connection.php');
if(isset($_GET['student_id'])){
    $sql = "select * from user_registration where id=".$_GET['id'];
    if($conn->query($sql)){
        $result = $conn->query($sql);
        $student = mysqli_fetch_assoc($result);
    }   
}

/* This is for Post Method */
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);
    //$full_name = $fName." ".$lName;
    $sql = "update user_registration set name = '$name',contact='$contact',password='$password' where id=".$_GET['id'];
    if($conn->query($sql)){
        header('location:user_registration_list.php');
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
        <h4>User Edit Form</h4>
        <?php if(isset($full_name)) { ?>
            <h6>Your Full Name is <?php echo $full_name; ?></h6>
        <?php } ?>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label class="form-label">Contact</label>
                <input type="text" class="form-control" name="contact">
            </div>


            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            
            
            <div class="mb-3">
                <label class="form-label">Photo</label>
                <input type="file" class="form-control" name="photo_url">
            </div>
            <button type="submit" class="btn btn-primary" name="btn">Submit</button>
            <button type="submit" class="btn btn-primary" name="btn">Login</button>
        </form>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
</body>

</html>