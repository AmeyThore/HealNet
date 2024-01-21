<?php
if(isset($_GET['s1'])){
    $name=$_GET['a1'];
    $Email=$_GET['a2'];
    $Id=$_GET['a3'];
    $conn=mysqli_connect("localhost","root","","zcoer");
    $query="insert into student values('$name','$Email','Id')";
    mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<br>
<br>
<br>
<br>
<body class="container" class="img-responsive" style="background-image: url('images/runner.gif');background-size:cover;background-repeat:no-repeat;">
    
    <!--<h1 style="text-align: center;color:aliceblue">Wellcome to Hell</h1><br><br>-->
    <div class="row" style="border-radius: 20px;">
        <div class="col-md-4">

        </div>

        <div class="col-md-4" style="background-color: rgba(255, 255, 255, 0.527) ;color:aliceblue;border-radius: 20px;">
            <h1>
                Login Here
            </h1>
            

            <hr><br>
            <input type="text" placeholder="Enter Name" class="form-control"><br><br>
            <input type="password" placeholder="Enter Passward" class="form-control"><br>
            <h5><input type="checkbox">Remember me</h2><br>
            <input type="submit" placeholder="Login" style="color:orange;" class="form-control"><br>
            <ul style="padding-left: 65%;text-decoration: underline "><a href="#">forget passward </a></ul>
            <br>
            <br><br>
    


        </div>
        <div class="col-md-4" >

        </div>


    </div>
    <br>
    <br>
    
</body>
</html>