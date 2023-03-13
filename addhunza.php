<?php
$sname="localhost";
$uname="root";
$pass="";
$DBname="web_database";
$conn=mysqli_connect($sname,$uname,$pass,$DBname);

if(isset($_POST['submit'])){
    $pkgname = $_POST['pkgname'];
    $daysnights = $_POST['daysnights'];
    $code = $_POST['code'];
    $price = $_POST['price'];
    $dest = $_POST['dest'];
    $file = $_FILES['image'];
    // print_r($file);
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];
    if($fileerror==0){
        $destfile = 'images/'.$filename;
        move_uploaded_file($filepath,$destfile);
        $sql = "INSERT INTO pkg_table VALUES ('$destfile','H01','$pkgname','$daysnights','$code','$price','$dest')";
        mysqli_query($conn,$sql);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MZM TRAVEL</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

    <div class="container right-panel-active" id="container">
        <div class="form-container sign-in-container">
            <form class="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <h1>Hunza trips</h1>
                <input type="text" placeholder="Package Name" required value="" id="pkgname" name="pkgname"/>
                <input type="text" placeholder="Stay duration" required value="" id="daysnights" name="daysnights"/>
                <input type="text" placeholder="Package code" required value="" id="code" name="code"/>
                <input type="text" placeholder="Price" required value="" id="price" name="price"/>
                <input type="text" placeholder="Route" required value="" id="dest" name="dest"/>
                <label for="img">Package Image</label>
                <input type="file" placeholder="Image" required value="" id="image" name="image"/>
                <button type="submit" name="submit">Add Package</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h6>WELCOME TO  ADMIN PORTAL</h6>
                    <button class="ghost" id="signUp" onclick="location.href='http://localhost/travel%20web/addswat.php'">Add package to sawat trips</button>
                    <br>
                    <button class="ghost" id="signUp" onclick="location.href='http://localhost/travel%20web/addkhunjareb.php'">Add package to khunjerab trips</button>
                    <br>
                    <button class="ghost" id="signUp" onclick="location.href='http://localhost/travel%20web/addhunza.php'">Add package to hunza trips</button>
                    <br>
                    <button class="ghost" id="signUp" onclick="location.href='http://localhost/travel%20web/addmurree.php'">Add package to murree trips</button>
                    <br>
                    <button class="ghost" id="signUp" onclick="location.href='http://localhost/travel%20web/addnaran.php'">Add package to naran trips</button>
                    <br>
                    <button class="ghost" id="signUp" onclick="location.href='http://localhost/travel%20web/index1.php'">Back to Home page</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>