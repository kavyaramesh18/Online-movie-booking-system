<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Theater | Seat Reservation</title>
    <link rel="stylesheet" href="register.css">
    </head>
<body>
    <div class="ticket-details-container">
    <div class="title">Ticket Details</div>
<?php
include('connect.php');
$firstname=$_POST['fn'];
$lastname=$_POST['ln'];
$contact_no=$_POST['c'];
$Quantity=$_POST['qty'];
$Date=$_POST['date'];
$Time=$_POST['time'];
$Movie=$_POST['movie'];
$price=$_POST['price'];
$total=$_POST['totall'];
       $sql="insert into `movie` (firstname,lastname,contact_no,Quantity,Date,Time,Movie,Total_amount,Price) values('$firstname','$lastname','$contact_no','$Quantity','$Date','$Time','$Movie','$total','$price')";

       $result=mysqli_query($con,$sql);
       if($result)
       {
        echo '<script>
        alert(" Booked Successfully!");
        </script>';
       }
       else 
        {
            die(mysqli_error($con)); 
        }
        ?>
        <div class="ticket-details-table">
        <?php      
$var=mysqli_query($con,"SELECT * FROM  `movie`") or die("No match found");
$arr=mysqli_fetch_row($var);
if($arr[0]!="")
{
    echo "<table border size=2>
    <tr>
    <th>Fname</th>
    <th>Lname</th>
    <th>Contact_no</th>
    <th>Quantity</th>
    <th>Date</th>
    <th>Time</th>
    <th>Movie name</th>
    <th>Total amount</th>
    <th>Price</th>
    </tr>";
    do{
        echo "<tr>
        <td>$arr[0]</td>
        <td>$arr[1]</td>
        <td>$arr[2]</td>
        <td>$arr[3]</td>
        <td>$arr[4]</td>
        <td>$arr[5]</td>
        <td>$arr[6]</td>
        <td>$arr[7]</td>
        <td>$arr[8]</td>
        </tr>";
    }while($arr=mysqli_fetch_row($var));
    echo "</table>";
}
else{
    echo "Record not found";
    mysqli_close($con);
}
?>
 </div>
  </div>
</body>
</html>