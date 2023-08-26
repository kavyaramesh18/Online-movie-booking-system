<?php
include('connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile_no'];


       $sql="insert into `register` (name,email,password,mobile_no) values('$name','$email','$password','$mobile_no')";

       $result=mysqli_query($con,$sql);
       if ($result) {
        echo '<script>
            alert("Created account Successfully!");
            window.location.href = "index.html";
        </script>';
        exit;
    } 
       else 
        {
            die(mysqli_error($con)); 
        }
?>