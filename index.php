<?php include 'connect.php';
//inserting data inside table.
if(isset($_POST['submit'])){
   // echo"success";
    $username=$_POST['username'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    //insert query
    $sql="insert into `phpcrud` (username,email,number,address)values('$username' ,'$email' ,'$number' , '$address')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');
    }else die("Data not inserted");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-CRUD Project</title>
    <!-----css file--->
    <link rel="stylesheet" href="Style.CSS">
</head>
<body>
    <h1> PHP CRUD </h1>
    <a href="display.php">View Data</a>
    <form action= "" method="post">
        <input type= "text" placeholder="Enter Your Name" required autocomplete="off" name="username">
        <input type= "email" placeholder="Enter Your email" required autocomplete="off" name="email">
        <input type= "number" placeholder="Enter Your mobile nunmber" required autocomplete="off" name = "number">
        <input type= "text" placeholder="Enter Your address" required autocomplete="off" name="address">
        <input type= "Submit" class="btn" name="submit">
    </form>


</body>
</html>


